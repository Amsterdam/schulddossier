.PHONY: manifests deploy

dc = docker compose
dev-dc = LOCAL_UID=$(shell id -u) LOCAL_GID=$(shell id -g) docker compose -f docker-compose.dev.yml

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

clean-local:
	rm -Rf node_modules public/{build,vendor,var} var vendor

reset:
	kubectl delete deployment schulddossier-phpfpm-schulddossier && kubectl delete deployment schulddossier-nginx-schulddossier && kubectl delete ingress schulddossier-nginx-internal-schulddossier && helm uninstall schulddossier

refresh: reset all

dev:
	nohup kubycat kubycat-config.yaml > /dev/null 2>&1&

# Standalone development; deliberately separate from deployment Compose/Helm.
.PHONY: dev-up dev-down dev-logs dev-init dev-migrate dev-shell dev-test dev-smoke
dev-up:
	$(dev-dc) up -d --build --wait --wait-timeout 300

dev-down:
	$(dev-dc) down

dev-logs:
	$(dev-dc) logs -f

dev-migrate:
	$(dev-dc) exec php php bin/console doctrine:migrations:migrate --no-interaction

# First-time setup. Doctrine asks for confirmation before replacing fixture data.
dev-init: dev-migrate
	$(dev-dc) exec php php bin/console doctrine:fixtures:load --purge-with-truncate

dev-shell:
	$(dev-dc) exec php sh

dev-test:
	python3 -m unittest discover -s tests/dev -v
	$(dev-dc) run --rm --no-deps assets node --test tests/dev/webpack.test.js

dev-smoke:
	python3 tests/dev/smoke.py
	$(dev-dc) exec -T assets node --test tests/dev/hmr.test.js

fixtures:
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "php bin/console --no-interaction doctrine:migrations:migrate"
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "php bin/console doc:fix:load --no-interaction --purge-with-truncate"

composer-install:
	docker run --rm -v .:/app -u 1000:1000 composer install --no-scripts

composer-update:
	docker run --rm -v .:/app -u 1000:1000 composer update --lock

npm-install:
	docker run --rm -v .:/app -w /app -u 1000:1000 node:24 sh -c "/usr/local/bin/npm install --no-audit --no-fund"

npm-update:
	docker run --rm -v .:/app -w /app -u 1000:1000 node:24 sh -c "/usr/local/bin/npm update"

npm-run-dev:
	docker run --rm -v .:/app -w /app -u 1000:1000 node:24 sh -c "/usr/local/bin/npm run dev && /usr/local/bin/npm run css:build"

npm-watch:
	docker run -it --init --rm -v .:/app -w /app -u 1000:1000 node:24 sh -c "/usr/local/bin/npm run watch"

enter-php:
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh

enter-ng:
	kubectl exec -it deploy/schulddossier-nginx-schulddossier -- sh

check-php-format:
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "vendor/bin/phpcs --extensions=php"

fix-php-format:
	kubectl exec -it deploy/schulddossier-phpfpm-schulddossier -- sh -c "vendor/bin/phpcbf --standard=PSR12 --extensions=php src"
