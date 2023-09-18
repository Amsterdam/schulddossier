# Inject Keyvault Secrets
The following example describes how to mount the secret `foo` from an Azure Keyvault as an Environment Variable `FOO` in a container.

## Introduction
The AKS addon `AzureKeyvaultSecretsProvider` is used to synchronize Keyvault Secrets as Kubernetes Secrets. Which in their turn can be mounted as Environment Variables into pods.

The driver provides various methods of identity-based access to your Azure key vault. This example uses the `Azure AD Workload identity` method, which needs some [infrastructure configuration](#infrastructure-configuration) upfront.

> Ref: https://learn.microsoft.com/en-us/azure/aks/csi-secrets-store-driver

## Manifest
```yaml
name: example
tenantId: <tenant-id>
keyVaultName: <keyvault-name>
workloadIdentity: <managed identity ClientID with secret read-permissions on the keyvault>

secrets:
  my-vault-secrets:
    type: keyvault
    secrets:
    # This is the name of the secret in your KeyVault
    - foo

deployments:
  my-deployment:
    containers:
    - name: my-container
      secrets:
      - my-vault-secrets

# The following values are the chart's defaults. So you do not necessarily have to overwrite them.
# This creates a service account named `default-<releasename>`, which will be used to access your KeyVault.
serviceaccount: default
serviceAccounts:
  default:
    enableWorkloadIdentity: true
```

## Infrastructure configuration
The following infrastructure pipeline configuration creates a Managed Identity named `app-mi-o`, and a federated credential to the serviceAccount that has been created as part of your helm chart installation. Also, this Managed Identity gets the role `Key Vault Secrets User` on your KeyVault, which gives it read-access to your secrets.

```yaml
dev:
  identities:
  - name: app-mi-o
  
  keyVault:
    roleAssignments:
    - identity: app-mi-o
      role: Key Vault Secrets User
  
  sharedAKS:
    # The OIDC Issuer URL is scoped to an AKS cluster. You can retrieve it using the following command
    # az aks show --subscription <SUBSCRIPTION_ID> -n <CLUSTER_NAME> -g <RESOURCE GROUP> --query "oidcIssuerProfile.issuerUr l" -otsv
    issuerUrl: <OIDC Issuer URL>
    namespace: <workload namespace>
    identityFederations:
    - identity: app-mi-o
      serviceAccounts:
        # default-example refers to the serviceAccount that has been created as part of the helm chart installation. The postfix `-example` is the release name.
      - name: default-example
```