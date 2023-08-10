ifneq ("$(wildcard docker-compose.yml)","")
	PHP=docker-compose run --rm --no-deps php php
else
	PHP=php
endif

test:
	@echo "==> Running tests"
	@cp .env.dist .env
	@$(PHP) -d memory_limit=-1 vendor/bin/phpunit -c phpunit.xml.dist
	@echo "==> Testing  complete"

stan:
	@echo "==> Running analysis"
	@$(PHP) vendor/bin/phpstan analyse
	@echo "==> Analysis complete"
