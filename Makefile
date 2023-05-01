.PHONY: install build dmigrate run stop restart kill

install:
	docker-compose run --rm app composer install

build:
	docker-compose build
	
migrate:
	docker-compose exec php php /var/www/html/artisan migrate

run:
	docker-compose up -d
	docker ps

stop:
	docker-compose down

restart:
	docker-compose restart

kill:
	@if [ ! -z "$$(docker ps -q)" ]; then docker kill $$(docker ps -q); fi
