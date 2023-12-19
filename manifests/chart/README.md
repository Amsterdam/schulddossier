# Helm-Application

A generic helm chart for deploying an application

## Parameter definitions

## Container definition
| Name                   | Description                                                                                                                              | Value |
| ---------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `name`                 | Container name                                                                                                                           | `""`  |
| `image`                | Optionally override `root.image`                                                                                                         | `nil` |
| `command`              | Optionally override default image [command](https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/) | `nil` |
| `args`                 | Optionally override default image [args](https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/)    | `nil` |
| `ports`                | `list` of ports that the container exposes                                                                                               |       |
| `ports[0].name`        | Port name                                                                                                                                | `nil` |
| `ports[0].port`        | Container port number                                                                                                                    | `nil` |
| `resources`            | [ResourceRequirements](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#resources)                         | `{}`  |
| `securityContext`      | Optionally override `root.securityContext.container`                                                                                     | `nil` |
| `secrets`              | `list` of [secrets](#secrets-parameters) to be mounted                                                                                   | `[]`  |
| `env`                  | `map` of environment variables to be mounted                                                                                             | `[]`  |
| `volumes`              | `list` of volumes to be mounted on the container                                                                                         |       |
| `volumes[0].name`      | Name of the volume to be mounted                                                                                                         | `[]`  |
| `volumes[0].mountPath` | Path within the container at which the volume should be mounted                                                                          | `[]`  |

## Volume definition
| Name                    | Description                                                                                                                               | Value |
| ----------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `name`                  | Name of the volume                                                                                                                        | `""`  |
| `persistentVolumeClaim` | (optional) `key` of the [persistentVolumeClaim](#persistent-data-parameters)                                                              | `nil` |
| `spec`                  | Extra [parameters](https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/volume/#Volume) added to the manifest | `nil` |

## Parameters

### Global parameters

| Name             | Description                                                                                                                     | Value     |
| ---------------- | ------------------------------------------------------------------------------------------------------------------------------- | --------- |
| `name`           | `required` Name of the application                                                                                              | `""`      |
| `nodepool`       | `required` Name of the Nodepool (AKS Scaleset) where the workloads should run on                                                | `""`      |
| `host`           | Default hostname to bind on ingresses                                                                                           | `""`      |
| `serviceAccount` | Default serviceaccount to bind on the pods                                                                                      | `default` |
| `tolerations`    | (Optional) Default workload [tolerations](https://kubernetes.io/docs/concepts/scheduling-eviction/taint-and-toleration/) object | `nil`     |

### SecurityContext parameters

| Name                                                 | Description                                                                                                                                                                   | Value   |
| ---------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------- |
| `securityContext.pod`                                | Default pod [securityContext](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#security-context-1) object                                       |         |
| `securityContext.pod.runAsNonRoot`                   | Indicates that the container must run as a non-root user                                                                                                                      | `true`  |
| `securityContext.pod.runAsUser`                      | Run as UID                                                                                                                                                                    | `1000`  |
| `securityContext.container`                          | Default container [securityContext](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#security-context-2) object. Inherits `securityContext.pod` |         |
| `securityContext.container.privileged`               | Run container in privileged mode                                                                                                                                              | `false` |
| `securityContext.container.allowPrivilegeEscalation` | Controls whether a process can gain more privileges than its parent process                                                                                                   | `false` |
| `securityContext.container.readOnlyRootFilesystem`   | Whether this container has a read-only root filesystem                                                                                                                        | `true`  |

### Image parameters

| Name               | Description                                | Value |
| ------------------ | ------------------------------------------ | ----- |
| `image.registry`   | Default registry of the workload images    | `""`  |
| `image.repository` | Default repository of the workload images  | `""`  |
| `image.tag`        | Default tag/version of the workload images | `""`  |

### Keyvault parameters

| Name               | Description                                                                                                                              | Value |
| ------------------ | ---------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `tenantId`         | Default directory ID of the Azure tenant                                                                                                 | `""`  |
| `keyVaultName`     | Default name of the Keyvault that holds secrets and/or certificates                                                                      | `""`  |
| `keyVaultIdentity` | `deprecated` Default Client ID of the Managed Identity with read-access on Keyvault secrets/certificates. Use `workloadIdentity` instead | `""`  |
| `workloadIdentity` | Default Client ID of the Managed Identity with read-access on Keyvault secrets/certificates.                                             | `""`  |

### ServiceAccounts parameters

| Name                                           | Description                                                                                                                                             | Value   |
| ---------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------- |
| `serviceAccounts`                              | `map` of the [ServiceAccounts](https://kubernetes.io/docs/reference/kubernetes-api/authentication-resources/service-account-v1/) that should be created |         |
| `serviceAccounts.<key>.workloadIdentity`       | Optionally override `root.workloadIdentity`                                                                                                             | `nil`   |
| `serviceAccounts.<key>.enableWorkloadIdentity` | Flag to enable/disable workload identity                                                                                                                | `false` |

### Persistent data parameters

| Name                                            | Description                                                                                                                                                                                 | Value           |
| ----------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------- |
| `persistentVolumeClaims`                        | `map` of the [PersistentVolumeClaims](https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/persistent-volume-claim-v1/) that should be created                  |                 |
| `persistentVolumeClaims.<key>.storageClassName` | storageClassName is the name of the StorageClass required by the claim                                                                                                                      | `nil`           |
| `persistentVolumeClaims.<key>.volumeName`       | Name of the [Volume](https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/volume/). Use this property instead of `storageClassName` to use an existing `Volume` | `nil`           |
| `persistentVolumeClaims.<key>.accessModes`      | Contains the desired access modes the volume should have                                                                                                                                    | `ReadWriteOnce` |
| `persistentVolumeClaims.<key>.resources`        | Represents the minimum resources the volume should have. [More info](https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources)                                              | `nil`           |

### ConfigMaps parameters

| Name                    | Description                                                                                                                                        | Value |
| ----------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `configMaps`            | `map` of the [ConfigMaps](https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/config-map-v1/) that should be deployed |       |
| `configMaps.<key>.data` | `map` of data to deploy in the configmap                                                                                                           | `[]`  |

### Secrets parameters

| Name                    | Description                                                                                                                                 | Value |
| ----------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `secrets`               | `map` of the [Secrets](https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/secret-v1/) that should be deployed |       |
| `secrets.<key>.type`    | opaque/keyvault                                                                                                                             | `nil` |
| `secrets.<key>.secrets` | `list` of keyvault secrets (type==keyvault) or `hashmap` of plaintext secrets (type==opaque)                                                | `[]`  |

### Services parameters

| Name                                 | Description                                                                                                                        | Value |
| ------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------- | ----- |
| `services`                           | `map` of the [Services](https://kubernetes.io/docs/reference/kubernetes-api/service-resources/service-v1/) that should be deployed |       |
| `services.<key>.selector`            | `map` of the pod's label selectors. Route service traffic to pods with label keys and values matching this selector                | `{}`  |
| `services.<key>.ports`               | `list` of ports that are exposed by this service                                                                                   |       |
| `services.<key>.ports[0].port`       | The port that will be exposed by this service                                                                                      | `nil` |
| `services.<key>.ports[0].targetPort` | Number or name of the port to access on the pods targeted by the service                                                           | `nil` |

### Ingress parameters

| Name                                   | Description                                                                                                                                             | Value    |
| -------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | -------- |
| `ingress`                              | `map` of the [Ingresses](https://kubernetes.io/docs/reference/kubernetes-api/service-resources/ingress-v1/) that should be deployed                     |          |
| `ingress.<key>.className`              | Name of an IngressClass cluster resource                                                                                                                | `nil`    |
| `ingress.<key>.host`                   | Optionally override `root.host`                                                                                                                         | `nil`    |
| `ingress.<key>.paths`                  | `list` of paths that map requests to backends                                                                                                           |          |
| `ingress.<key>.paths[0].path`          | Path is matched against the path of an incoming request                                                                                                 | `nil`    |
| `ingress.<key>.paths[0].pathType`      | Exact/ImplementationSpecific/Prefix                                                                                                                     | `Prefix` |
| `ingress.<key>.paths[0].service`       | Name of the service to route the traffic to                                                                                                             | `nil`    |
| `ingress.<key>.paths[0].port`          | Port number that the service exposes                                                                                                                    | `nil`    |
| `ingress.<key>.tls.secretName`         | Name of the secret that is generated as part of this installation that holds the certificate for SSL termination                                        | `nil`    |
| `ingress.<key>.tls.secretNameOverride` | Fullname of the secret that holds the certificate for SSL termination. Use this property instead of `secretname` if you want to use an existing secret. | `nil`    |

### Jobs parameters

| Name                                 | Description                                                                                                                          | Value  |
| ------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------ |
| `jobs`                               | `map` of the [Job](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/job-v1/) workloads that should be deployed |        |
| `jobs.<key>.ttlSecondsAfterFinished` | Limits the lifetime of a Job that has finished execution                                                                             | `nil`  |
| `jobs.<key>.backoffLimit`            | Specifies the number of retries before marking this job failed                                                                       | `5`    |
| `jobs.<key>.enableWorkloadIdentity`  | Enables the `Workload Identity` feature                                                                                              | `true` |
| `jobs.<key>.workloadIdentity`        | Optionally override `root.workloadIdentity`                                                                                          | `nil`  |
| `jobs.<key>.env`                     | `map` of container environment variables                                                                                             | `nil`  |
| `jobs.<key>.resources`               | Default container [ResourceRequirements](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#resources)   | `nil`  |
| `jobs.<key>.serviceAccount`          | Optionally override `root.serviceAccount`                                                                                            | `nil`  |
| `jobs.<key>.tolerations`             | Optionally override `root.tolerations`                                                                                               | `nil`  |
| `jobs.<key>.securityContext`         | Optionally override `root.securityContext.pod`                                                                                       | `nil`  |
| `jobs.<key>.containers`              | [Container[]](#container-definition)                                                                                                 | `[]`   |
| `jobs.<key>.volumes`                 | [Volume[]](#volume-definition)                                                                                                       | `[]`   |

### CronJob parameters

| Name                                        | Description                                                                                                                                   | Value    |
| ------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | -------- |
| `cronJobs`                                  | `map` of the [CronJob](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/cron-job-v1/) workloads that should be deployed |          |
| `cronJobs.<key>.schedule`                   | Cron expression                                                                                                                               | `""`     |
| `cronJobs.<key>.startingDeadlineSeconds`    | Deadline in seconds for starting the job if it misses scheduled time for any reason                                                           | `300`    |
| `cronJobs.<key>.successfulJobsHistoryLimit` | The number of successful finished jobs to retain                                                                                              | `1`      |
| `cronJobs.<key>.failedJobsHistoryLimit`     | The number of failed finished jobs to retain                                                                                                  | `1`      |
| `cronJobs.<key>.concurrencyPolicy`          | Allow/Forbid/Replace                                                                                                                          | `Forbid` |
| `cronJobs.<key>.ttlSecondsAfterFinished`    | Limits the lifetime of a Job that has finished execution                                                                                      | `nil`    |
| `cronJobs.<key>.backoffLimit`               | Specifies the number of retries before marking this job failed                                                                                | `5`      |
| `cronJobs.<key>.enableWorkloadIdentity`     | Enables the `Workload Identity` feature                                                                                                       | `true`   |
| `cronJobs.<key>.workloadIdentity`           | Optionally override `root.workloadIdentity`                                                                                                   | `nil`    |
| `cronJobs.<key>.env`                        | `map` of container environment variables                                                                                                      | `nil`    |
| `cronJobs.<key>.resources`                  | Default container [ResourceRequirements](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#resources)            | `nil`    |
| `cronJobs.<key>.serviceAccount`             | Optionally override `root.serviceAccount`                                                                                                     | `nil`    |
| `cronJobs.<key>.tolerations`                | Optionally override `root.tolerations`                                                                                                        | `nil`    |
| `cronJobs.<key>.securityContext`            | Optionally override `root.securityContext.pod`                                                                                                | `nil`    |
| `cronJobs.<key>.containers`                 | [Container[]](#container-definition)                                                                                                          | `[]`     |
| `cronJobs.<key>.volumes`                    | [Volume[]](#volume-definition)                                                                                                                | `[]`     |

### Deployment parameters

| Name                                       | Description                                                                                                                                        | Value  |
| ------------------------------------------ | -------------------------------------------------------------------------------------------------------------------------------------------------- | ------ |
| `deployments`                              | `map` of the [Deployment](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/deployment-v1/) workloads that should be deployed |        |
| `deployments.<key>.autoscale`              | (Optional) Enable pod autoscaling                                                                                                                  |        |
| `deployments.<key>.autoscale.cpu`          | CPU resource utilization percentage threshold                                                                                                      | `nil`  |
| `deployments.<key>.autoscale.memory`       | Memory resource utilization percentage threshold                                                                                                   | `nil`  |
| `deployments.<key>.autoscale.min`          | Minimum amount of pods                                                                                                                             | `1`    |
| `deployments.<key>.autoscale.max`          | Maximum amount of pods                                                                                                                             | `3`    |
| `deployments.<key>.enableWorkloadIdentity` | Enables the `Workload Identity` feature                                                                                                            | `true` |
| `deployments.<key>.workloadIdentity`       | Optionally override `root.workloadIdentity`                                                                                                        | `nil`  |
| `deployments.<key>.env`                    | `map` of container environment variables                                                                                                           | `nil`  |
| `deployments.<key>.resources`              | Default container [ResourceRequirements](https://kubernetes.io/docs/reference/kubernetes-api/workload-resources/pod-v1/#resources)                 | `nil`  |
| `deployments.<key>.serviceAccount`         | Optionally override `root.serviceAccount`                                                                                                          | `nil`  |
| `deployments.<key>.tolerations`            | Optionally override `root.tolerations`                                                                                                             | `nil`  |
| `deployments.<key>.securityContext`        | Optionally override `root.securityContext.pod`                                                                                                     | `nil`  |
| `deployments.<key>.containers`             | [Container[]](#container-definition)                                                                                                               | `[]`   |
| `deployments.<key>.volumes`                | [Volume[]](#volume-definition)                                                                                                                     | `[]`   |
