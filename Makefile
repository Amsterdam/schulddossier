.PHONY: manifests deploy

dc = docker-compose

ENVIRONMENT ?= local
HELM_ARGS = manifests/chart \
	-f manifests/values.yaml \
	-f manifests/env/${ENVIRONMENT}.yaml \
	--set image.tag=${VERSION}

REGISTRY ?= localhost:5000
REPOSITORY ?= tamm/example-app
VERSION ?= latest

all: build push deploy fixtures

build:
	$(dc) build

build-force-rm:
	$(dc) build --force-rm

test:
	echo "No tests available"

push:
	$(dc) push

manifests:
	@helm template schulddossier $(HELM_ARGS) $(ARGS)

deploy: manifests
	helm upgrade --install schulddossier $(HELM_ARGS) $(ARGS)

update-chart:
	rm -rf manifests/chart
	git clone --branch 1.5.2 --depth 1 git@github.com:Amsterdam/helm-application.git manifests/chart
	rm -rf manifests/chart/.git

clean:
	$(dc) down -v --remove-orphans

reset:
	kubectl delete deployment schulddossier-phpfpm-schulddossier && kubectl delete deployment schulddossier-nginx-schulddossier && kubectl delete ingress schulddossier-nginx-internal-schulddossier && helm uninstall schulddossier

refresh: reset all

dev:
	nohup kubycat kubycat-config.yaml > /dev/null 2>&1&

fixtures:
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "php bin/console --no-interaction doctrine:migrations:migrate"
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "php bin/console doc:fix:load  --no-interaction --purge-with-truncate"

composer-install:
	docker run --rm -v .:/app -u 1000:1000 composer install

composer-update:
	docker run --rm -v .:/app -u 1000:1000 composer update --lock

npm-install:
	docker run --rm -v .:/app -w /app -u 1000:1000 node:18 sh -c "/usr/local/bin/npm install"

npm-run-dev:
	docker run --rm -v .:/app -w /app -u 1000:1000 node:18 sh -c "/usr/local/bin/npm run build && /usr/local/bin/npm run css:build"

npm-watch:
	docker run -it --init --rm -v .:/app -w /app -u 1000:1000 node:18 sh -c "/usr/local/bin/npm run watch"

