# Configs (ConfigMaps)
Below is an example of how to configure ConfigMaps and use them in pods

```yaml
configMaps:
  database:
    data:
      database-host: app.postgres.database.azure.com
      database-name: main
      database-user: app-backend-o
      database-config: |
        [config.ini]
        foo=bar

deployments:
  app:
    configMaps:
      - database
    containers:
      - name: main
```

This will transform the items in the configmap into environment variables like this:

```bash
DATABASE_HOST=app.postgres.database.azure.com
DATABASE_NAME=main
```

It will also mount the configmap into `/mnt/configs/<configMap>`.
Keys will become files, and the value will be the content of that file.
For example:
```bash
$ cat /mnt/configs/database/database-config
[config.ini]
foo=bar
```
