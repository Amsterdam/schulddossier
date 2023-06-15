{{/*
Expand the name of the chart.
*/}}
{{- define "helm.name" -}}
{{- default .Chart.Name .Values.nameOverride | trunc 63 | trimSuffix "-" }}
{{- end }}

{{/*
Create a default fully qualified app name.
We truncate at 63 chars because some Kubernetes name fields are limited to this (by the DNS naming spec).
If release name contains chart name it will be used as a full name.
*/}}
{{- define "helm.fullname" -}}
{{- if .Values.fullnameOverride }}
{{- .Values.fullnameOverride | trunc 63 | trimSuffix "-" }}
{{- else }}
{{- .Release.Name | trunc 63 | trimSuffix "-" }}
{{- end }}
{{- end }}

{{/*
Create chart name and version as used by the chart label.
*/}}
{{- define "helm.chart" -}}
{{- printf "%s-%s" .Chart.Name .Chart.Version | replace "+" "_" | trunc 63 | trimSuffix "-" }}
{{- end }}

{{/*
Common labels
*/}}
{{- define "helm.labels" -}}
helm.sh/chart: {{ include "helm.chart" . }}
{{- if .Chart.AppVersion }}
app.kubernetes.io/version: {{ .Chart.AppVersion | quote }}
{{- end }}
app.kubernetes.io/managed-by: {{ .Release.Service }}
{{- end }}

{{/*
Selector labels
*/}}
{{- define "helm.selectorLabels" -}}
app.kubernetes.io/name: {{ .Values.name }}
app.kubernetes.io/instance: {{ .Release.Name }}
{{- end }}

{{/*
Resource labels
*/}}
{{- define "resource.labels" -}}
{{ include "helm.labels" .root }}
{{ include "resource.selectorLabels" . }}
{{- with .root.Values.labels }}
{{ toYaml . }}
{{- end }}
{{- with .local.labels }}
{{ toYaml . }}
{{- end }}
{{- end }}

{{/*
Resource Selector labels
*/}}
{{/* deployedAt: {{ now | unixEpoch | quote }} */}}
{{- define "resource.selectorLabels" -}}
{{ include "helm.selectorLabels" .root }}
{{- with .local.selectorLabels }}
{{ toYaml . }}
{{- end }}
{{- end }}

{{/*
Annotations
*/}}
{{- define "resource.annotations" -}}
{{- with .local.annotations }}
{{- toYaml . }}
{{- end }}
{{- end }}

{{/*
Create the name of the service account to use
*/}}
{{- define "helm.serviceAccountName" -}}
{{- if .Values.serviceAccount.create }}
{{- default (include "helm.fullname" .) .Values.serviceAccount.name }}
{{- else }}
{{- default "default" .Values.serviceAccount.name }}
{{- end }}
{{- end }}

{{/*
Volumes
*/}}
{{- define "pod.volumes" -}}
{{- $fullName := (include "helm.fullname" .root ) }}
{{- range .local.volumes }}
- name: {{ .name }}
{{- with .persistentVolumeClaim }}
  persistentVolumeClaim:
    claimName: {{ printf "%s-%s" . $fullName }}
{{- end }}
{{- with .spec }}
  {{- toYaml . | nindent 2}}
{{- end }}
{{- end }}
{{- include "pod.secretVolumes" . }}
{{- end }}

{{/*
Volumes
*/}}
{{- define "pod.secretVolumes" -}}
{{- $mountSecrets := .local.mountSecrets | default list }}
{{- $secrets := concat (.local.secrets | default list) $mountSecrets }}

{{- range .local.containers }}
{{- $secrets = concat $secrets (.secrets | default list) }}
{{- end }}

{{- $fullName := (include "helm.fullname" .root ) }}
{{- range $secrets | mustUniq }}
{{- $secret := get $.root.Values.secrets . }}
{{- if eq (lower $secret.type) "keyvault" }}
- name: "{{ . }}"
  csi:
    driver: secrets-store.csi.k8s.io
    readOnly: true
    volumeAttributes:
      secretProviderClass: "{{ . }}-{{ $fullName }}"
{{- end }}
{{- end }}
{{- end }}

{{/*
Container volumeMounts
*/}}
{{- define "container.volumeMounts" -}}
{{- include "container.secretVolumes" . }}
{{- include "container.volumes" . }}
{{- end }}

{{/*
Container manual volumes
*/}}
{{- define "container.volumes" -}}
{{- range .local.volumes }}
- name: {{ .name }}
  mountPath: {{ .mountPath }}
{{- end }}
{{- end }}

{{/*
Volumes secret volume mounts
*/}}
{{- define "container.secretVolumes" -}}
{{- $mountSecrets := .local.mountSecrets | default list }}
{{- $secrets := concat (.local.secrets | default list) $mountSecrets | mustUniq }}
{{- range $secrets }}
{{- $secret := get $.root.Values.secrets . }}
{{- if eq (lower $secret.type) "keyvault" }}
- name: {{ . }}
  mountPath: /mnt/secrets/{{ . | replace "-" "_" }}
  readOnly: true
{{- end }}
{{- end }}
{{- end }}

{{/*
env
*/}}
{{- define "container.env" -}}
{{- $fullName := (include "helm.fullname" .root ) }}
{{- $env := merge (.local.env | default dict) .root.Values.env }}
{{- if or $env .local.secrets }}
{{- with $env }}
{{- range $name, $value := . }}
- name: {{ $name | upper | replace "-" "_" }}
  value: {{ $value | quote }}
{{- end }}
{{- end }}

{{- with .local.secrets }}
{{- range . }}
{{- $secretName := . }}
{{- $secret := required (printf "Secret %s does not exist" $secretName) (get $.root.Values.secrets $secretName) }}
{{- range $key, $value := $secret.secrets }}
{{/*
If its a simple opaque secret its in the format of key:value
Else its a list
*/}}
{{- if not (eq $secret.type "opaque") }}
{{- $key = . }}
{{- end -}}
- name: {{ $key | upper | replace "-" "_" | quote }}
  valueFrom:
    secretKeyRef:
      name: {{ printf "%s-%s" $secretName $fullName | quote }}
      key: {{ $key | quote }}
{{- end }}
{{- end }}
{{- end }}

{{- end }}
{{- end }}

{{/*
envFrom
*/}}
{{- define "container.envFrom" -}}
{{- with .envFrom }}
{{- toYaml .local.envFrom }}
{{- end }}
{{- end }}

{{/*
pod.serviceAccount
*/}}
{{- define "pod.serviceAccount" -}}
{{- $fullName := (include "helm.fullname" .root ) }}
{{- with .local.serviceAccount | default .root.Values.serviceAccount }}
serviceAccountName: {{ printf "%s-%s" . $fullName }}
{{- end }}
{{- end }}

{{/*
tolerations
*/}}
{{- define "pod.tolerations" -}}
{{- with .root.Values.nodepool -}}
- key: {{ . | quote }}
  operator: "Equal"
  value: "true"
  effect: "NoSchedule"
{{- end }}
{{- with .root.Values.tolerations }}
{{- . | toYaml }}
{{- end }}
{{- with .local.tolerations }}
{{- . | toYaml }}
{{- end }}
{{- end }}

{{/*
pod.securityContext
*/}}
{{- define "pod.securityContext" -}}
{{- $context := mergeOverwrite .root.Values.securityContext.pod (.local.securityContext | default dict)  }}
{{- with $context }}
{{- . | toYaml }}
{{- end }}
{{- end }}

{{/*
container.securityContext
*/}}
{{- define "container.securityContext" -}}
{{- $context := mergeOverwrite (.root.Values.securityContext.container) (.local.securityContext | default dict) }}
{{- with $context }}
{{- . | toYaml }}
{{- end }}
{{- end }}

{{/*
container.resources
*/}}
{{- define "container.resources" -}}
{{- with .local.resources }}
{{- toYaml . }}
{{- end }}
{{- end }}

{{/*
container.ports
*/}}
{{- define "container.ports" -}}
{{- range .local.ports }}
- containerPort: {{ .port }}
  name: {{ .name }}
{{- end }}
{{- end }}

{{/*
container.image
*/}}
{{- define "container.image" -}}
{{- $image := deepCopy (.local.image | default dict) | mergeOverwrite (.root.Values.image | deepCopy) }}
{{- $repository := required "A repository configuration is required" $image.repository }}
image: {{ printf "%s:%s" (list $image.registry $image.repository | join "/") ($image.tag | default "latest") | quote }}
imagePullPolicy: {{ $image.imagePullPolicy | default "IfNotPresent" }}
{{- end }}

{{/*
container.command
*/}}
{{- define "container.command" -}}
{{- with .local.command }}
command: {{ toYaml . | nindent 2 }}
{{- end }}
{{- with .local.args }}
args: {{ toYaml . | nindent 2 }}
{{- end }}
{{- end }}


{{/*
containers
*/}}
{{- define "pod.containers" -}}
{{- $context := . -}}

{{- range .local.containers }}
{{- $picked := pick $context.local "resources" "env" "secrets" "image" }}
{{- $containerContext := dict "local" (merge . $picked) "root" $context.root }}
- name: {{ .name }}
{{- include "container" $containerContext | indent 2 }}
{{- end }}

{{- end }}


{{/*
container
*/}}
{{- define "container" -}}
{{- include "container.image" . }}
{{- include "container.command" . }}

{{- with include "container.ports" . }}
ports: {{- . | trim | nindent 2}}
{{- end }}

{{- with include "container.resources" . }}
resources: {{- . | nindent 2}}
{{- end }}

{{- with include "container.securityContext" . }}
securityContext: {{- . | nindent 2}}
{{- end }}

{{- with include "container.env" . }}
env: {{- . | trim | nindent 2}}
{{- end }}

{{- with include "container.envFrom" . }}
envFrom: {{- . | nindent 2}}
{{- end }}

{{- with include "container.volumeMounts" . }}
volumeMounts: {{- . | nindent 2}}
{{- end }}

{{- end }}
