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
{{- include "pod.persistentVolumes" . }}
{{- include "pod.secretVolumes" . }}
{{- include "pod.configVolumes" . }}
{{- end }}

{{/*
Pod persistent volumes
*/}}
{{- define "pod.persistentVolumes" -}}
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
{{- end }}

{{/*
Pod secret volumes
*/}}
{{- define "pod.secretVolumes" -}}
{{- $secrets := .local.secrets | default list }}

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
{{- else }}
- name: "{{ . }}"
  secret:
    secretName: {{ printf "%s-%s" . $fullName | quote }}
{{- end }}
{{- end }}
{{- end }}

{{/*
Pod config volumes
*/}}
{{- define "pod.configVolumes" -}}
{{- $configMaps := .local.configMaps | default list }}

{{- range .local.containers }}
{{- $configMaps = concat $configMaps (.configMaps | default list) }}
{{- end }}

{{- $fullName := (include "helm.fullname" .root ) }}
{{- range $configMaps | mustUniq }}
{{- $configMap := get $.root.Values.configMaps . }}
- name: "{{ . }}"
  configMap:
    name: {{ printf "%s-%s" . $fullName | quote }}
{{- end }}
{{- end }}

{{/*
Container volumeMounts
*/}}
{{- define "container.volumeMounts" -}}
{{- include "container.secretVolumes" . }}
{{- include "container.configMapVolumes" . }}
{{- include "container.volumes" . }}
{{- end }}

{{/*
Container manual volumes
*/}}
{{- define "container.volumes" -}}
{{- range .local.volumes }}
- name: {{ .name }}
  mountPath: {{ .mountPath }}
  readOnly: {{ .readOnly | default false }}
{{- end }}
{{- end }}

{{/*
Volumes secret volume mounts
*/}}
{{- define "container.secretVolumes" -}}
{{- $secrets := .local.secrets | default list }}
{{- range $secrets }}
{{- $secret := get $.root.Values.secrets . }}
- name: {{ . }}
  mountPath: {{ printf "/mnt/secrets/%s" . | quote }}
  readOnly: true
{{- end }}
{{- end }}

{{/*
ConfigMap volumeMounts
*/}}
{{- define "container.configMapVolumes" -}}
{{- $configMaps := .local.configMaps | default list }}
{{- range $configMaps }}
{{- $configMap := get $.root.Values.configMaps . }}
- name: {{ . }}
  mountPath: {{ printf "/mnt/configs/%s" . | quote }}
  readOnly: true
{{- end }}
{{- end }}

{{/*
env
*/}}
{{- define "container.env" -}}
{{- $fullName := (include "helm.fullname" .root ) }}
{{- $env := merge (.local.env | default dict) .root.Values.env }}
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

{{- with .local.configMaps }}
{{- range . }}
{{- $configMapName := . }}
{{- $configMap := required (printf "ConfigMap %s does not exist" $configMapName) (get $.root.Values.configMaps $configMapName) }}
{{- range $key, $value := $configMap.data }}
- name: {{ $key | upper | replace "-" "_" | quote }}
  valueFrom:
    configMapKeyRef:
      name: {{ printf "%s-%s" $configMapName $fullName | quote }}
      key: {{ $key | quote }}
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
{{- $context := deepCopy (.local.securityContext | default dict) | mergeOverwrite (.root.Values.securityContext.pod | deepCopy)  }}
{{- with $context }}
{{- . | toYaml }}
{{- end }}
{{- end }}

{{/*
container.securityContext
*/}}
{{- define "container.securityContext" -}}
{{- $context := deepCopy (.local.securityContext | default dict) | mergeOverwrite (.root.Values.securityContext.container | deepCopy)  }}
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
{{- $picked := pick $context.local "resources" "env" "secrets" "configMaps" "image" }}
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
