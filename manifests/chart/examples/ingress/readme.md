# Ingress
This example shows how to expose a web-application to the world wide web.

```yaml
labels:
  app: my-app

network:
  allow-ingress:
    selector: app == 'my-app'
    ingress:
    - action: Allow
    egress:
    - action: Allow

deployments:
  my-deployment:
    selectorLabels:
      app: my-app
    containers:
    - name: main
      ports:
      - port: 8080
        name: http

services:
  my-service:
    selector:
      app: my-app
    ports:
    - port: 80
      targetPort: http

ingress:
  my-ingress:
    # className refers to an existing ingress class. Our shared cluster has 2 installed ingress controllers:
    # nginx-internal: Load Balancer that's only accessable internally
    # nginx-external: Internet-facing Load Balancer
    className: nginx-internal
    paths:
    - path: /
      service: my-service
      port: 80
    tls:
      # Use this property to load a secret that is created as part of the helm chart installation
      secretName: my-certificate
      # Use this property to refer to an existing secret that holds the SSL certificate
      secretNameOverride: null
```