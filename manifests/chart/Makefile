VERSION ?= 0.0.0
HELM_UNITTEST_VERSION ?= 0.3.2

UID:=$(shell id --user)
GID:=$(shell id --group)

clean:
	rm -rf *.tgz

build: clean
	helm package . --version ${VERSION}

push: build
	helm push ./application-${VERSION}.tgz oci://${REGISTRY}/helm-application

helm-unittest-plugin:
	helm plugin list unittest | grep "${HELM_UNITTEST_VERSION}" || ( helm plugin remove unittest; helm plugin install https://github.com/helm-unittest/helm-unittest --version ${HELM_UNITTEST_VERSION} )

lint:
	helm lint

test: lint helm-unittest-plugin
	# helm template . -f values.test.yaml
	helm unittest . --debug
	# Alternative way to use docker to test
	# docker run -ti --rm -u $(UID):$(GID) -v .:/apps helmunittest/helm-unittest:3.11.3-0.3.2 . --debug
