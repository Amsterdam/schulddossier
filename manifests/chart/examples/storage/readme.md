# Storage
This example describes how to mount a volume to a pod. There are different implementation possibilities.

## Volatile data
The following yaml mounts a temporary volume to `/tmp` in a pod. The volume's lifetime is tied to the lifetime of the pod. In other words, the volume's contents are lost when the pod is deleted. Be aware that a container restart within a pod does not wipe the data.

```yaml
deployments:
  my-app:
    volumes:
    - name: tmp
      spec:
        emptyDir: {}
    containers:
    - name: my-container
      volumes:
      - name: tmp
        mountPath: /tmp
```

## Persistent data
This method creates a Managed Disk in Azure and mounts it on `/data` in your pods. This data persists as long as the PersistentVolumeClaim exists.

```yaml
persistentVolumeClaims:
  data:
    resources:
      requests:
        storage: 1Gi

deployments:
  my-app:
    volumes:
    - name: data
      persistentVolumeClaim: data
    containers:
    - name: main
      volumes:
      - name: data
        mountPath: /data
```