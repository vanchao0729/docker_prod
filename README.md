# Docker production repo

For *nix development environment deploy 

## What apps include in this repo

Openresty, mariadb, php, composer, etc
## Prepare

You should self installed docker and docker-compose before 

## Usage

* cp env-example .env

* docker-compose -up d

* docker-compose run  --rm composer install (not must be required) 

## Notice

Before U used composer, please check your docker-composer.yml configure about container_name is composer, which volume set must be your project root directory and volume directory can not be dumplicate.

have fun ^_^
