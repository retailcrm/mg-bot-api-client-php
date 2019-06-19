ROOT_DIR=$(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))
SRC_DIR=$(ROOT_DIR)/src
BIN_DIR=$(ROOT_DIR)/bin

deps:
	@echo "==> Installing dependencies"
	@curl -L https://getcomposer.org/composer.phar -o $(BIN_DIR)/composer
	@COMPOSER_HOME=/tmp php -d memory_limit=-1 $(BIN_DIR)/composer install

test:
	@echo "==> Running tests"
	@cd $(ROOT_DIR)
ifeq ($(wildcard .env), )
	@echo "==> Creating .env file for testing purposes..."
	@cp .env.dist .env
endif
	@php -d memory_limit=-1 $(BIN_DIR)/phpunit -c phpunit.xml.dist --log-junit $(ROOT_DIR)/test-report.xml
	@echo "==> Testing  complete"

stan:
	@echo "==> Running analysis"
	@php $(BIN_DIR)/phpstan analyse -l 4 -c $(ROOT_DIR)/phpstan.neon $(SRC_DIR)
	@echo "==> Analysis complete"

docs:
	@echo "==> Building docs"
ifeq ($(wildcard *.phar), )
	@wget https://github.com/phpDocumentor/phpDocumentor2/releases/download/v3.0.0-alpha.3/phpDocumentor.phar -O phpDocumentor.phar
	@wget https://github.com/phpDocumentor/phpDocumentor2/releases/download/v3.0.0-alpha.3/phpDocumentor.phar.pubkey -O phpDocumentor.phar.pubkey
	@chmod +x phpDocumentor.phar
endif
	@php phpDocumentor.phar --config $(ROOT_DIR)/phpdoc.dist.xml