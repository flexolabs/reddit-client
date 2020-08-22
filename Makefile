ifndef OPENAPI_DOCKER_COMMAND
OPENAPI_DOCKER_IMAGE=dkarlovi/openapi-generator-php
OPENAPI_DOCKER_COMMAND=docker run --init --interactive --rm --tty --user "$(shell id -u):$(shell id -g)" --volume "$(shell pwd):/project" --volume "$(shell pwd)/../openapi-specs:/specs" --workdir /project ${OPENAPI_DOCKER_IMAGE}
endif

build:
	sh -c "${OPENAPI_DOCKER_COMMAND} /specs/reddit/v1/index.yaml . .openapi-generator/config.json"
