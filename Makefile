AUTHOR=fendiD
NAME=dockerLumen
VERSION=7

.PHONY: all build bash run help
all: build

rebuild:
	docker-compose up -d --build 
install: 
	docker-compose up -d && docker-compose exec app php artisan migrate && docker-compose exec app php artisan db:seed --class=ContactSeeder
stop: 
	docker-compose down
test:
	google-chrome http://localhost:8080/api
