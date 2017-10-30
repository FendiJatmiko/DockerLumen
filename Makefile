AUTHOR=fendiD

.PHONY: all build
all: build

rebuild:
	docker-compose up -d --build 
install: 
	docker-compose up -d && docker-compose exec app php artisan migrate && docker-compose exec app php artisan db:seed --class=ContactSeeder
stop: 
	docker-compose down
test:
	google-chrome http://localhost:8080/api
