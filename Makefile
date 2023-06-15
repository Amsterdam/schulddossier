.PHONY: manifests deploy

dc = docker-compose

ENVIRONMENT ?= local
HELM_ARGS_PHPFPM = manifests/phpfpm/chart \
	-f manifests/phpfpm/values.yaml \
	-f manifests/phpfpm/env/${ENVIRONMENT}.yaml \
	--set image.tag=${VERSION}

HELM_ARGS_NGINX = manifests/nginx/chart \
	-f manifests/nginx/values.yaml \
	-f manifests/nginx/env/${ENVIRONMENT}.yaml \
	--set image.tag=${VERSION}

REGISTRY ?= localhost:5000
VERSION ?= latest

build:
	$(dc) build

test:
	echo "No tests available"

push:
	$(dc) push

manifests:
	@helm template schulddossier-phpfpm $(HELM_ARGS_PHPFPM) $(ARGS)
	@helm template schulddossier-nginx $(HELM_ARGS_NGINX) $(ARGS)

deploy: manifests
	helm upgrade --install schulddossier-phpfpm $(HELM_ARGS_PHPFPM) $(ARGS)
	helm upgrade --install schulddossier-nginx $(HELM_ARGS_NGINX) $(ARGS)

update-chart:
	rm -rf manifests/chart
	git clone --branch 1.5.2 --depth 1 git@github.com:Amsterdam/helm-application.git manifests/chart
	rm -rf manifests/chart/.git

clean:
	$(dc) down -v --remove-orphans