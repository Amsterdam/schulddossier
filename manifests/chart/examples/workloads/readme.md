# Workloads
Below are several examples of how to create different workloads.

```yaml
# Default image to use for all workloads
image:
  registry: myregistry.com
  repository: repository
  tag: 1.2.3

nodepool: nodepool

jobs:
  migrate:
    annotations:
      helm.sh/hook: post-install,post-upgrade
    labels:
      component: migrate
    containers:
      - name: main
        command:
          - python
          - manage.py
          - migrate

cronJobs:
  migrate:
    labels:
      component: import
    schedule: "0 * * * *"
    containers:
      - name: main
        command:
          - python
          - manage.py
          - import_api

deployments:
  app:
    securityContext:
      runAsUser: 2000
    labels:
      component: app
    autoscale:
      cpu: 70
      memory: 90
      min: 3
      max: 8
    resources:
      requests:
        cpu: 1
        memory: "512Mi"
      limits:
        cpu: 1
        memory: "512Mi"
    serviceAccount: app
    containers:
      - name: main
        resources:
          limits:
            cpu: 4
      - name: foo
        # Overwrite default image
        image:
          tag: "1.3.3.7"
        command:
          - sleep
        args:
          - "10"
```