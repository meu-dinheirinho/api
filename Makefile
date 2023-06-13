.PHONY: install build dmigrate run stop restart kill

build:
	docker-compose build

run:
	docker-compose up -d
	docker ps

stop:
	docker-compose down

restart:
	docker-compose restart

kill:
	@if [ ! -z "$$(docker ps -q)" ]; then docker kill $$(docker ps -q); fi

migrate:
	docker-compose exec php php /var/www/html/artisan migrate
