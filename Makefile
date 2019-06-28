ROOT_DIR=$(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))
SRC_DIR=$(ROOT_DIR)/src
BIN_DIR=$(ROOT_DIR)/bin

test:
	@echo "==> Running tests"
	@cd $(ROOT_DIR)
	@cp .env.dist .env
	@php -d memory_limit=-1 $(BIN_DIR)/phpunit -c phpunit.xml.dist
	@echo "==> Testing  complete"

stan:
	@echo "==> Running analysis"
	@php $(BIN_DIR)/phpstan analyse -c $(ROOT_DIR)/phpstan.neon
	@echo "==> Analysis complete"

travis: test stan
	@echo "==> Completed"
