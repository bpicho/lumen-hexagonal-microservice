# Lumen Hexagonal Microservice Example
Micro service sample project built with Lumen 5 and Hexagonal Architecture pattern.

# How to run #

* Install dependencies:
`composer install`
* Start containers:
`cd dev/docker/`
`sudo ./start_containers.sh` 
* Run migrations
`php artisan migrate:install`
`php artisan migrate`

## Services exposed outside your environment ##

Service | Address outside containers

Webserver | [localhost:8080](http://localhost:8080)

Mailhog web interface | [localhost:8081](http://localhost:8081)

MySQL |**host:** `localhost`; **port:** `8082`

Graylog | localhost:9000

Adminer | localhost:8089/adminer

Swagger | localhost:8080/api/documentation

# Docker compose cheatsheet #

**Note:** you need to cd first to where your docker-compose.yml file lives.

  * Start containers in the background: `docker-compose up -d`
  * Start containers on the foreground: `docker-compose up`. You will see a stream of logs for every container running.
  * Stop containers: `docker-compose stop`
  * Kill containers: `docker-compose kill`
  * View container logs: `docker-compose logs`
  * Execute command inside of container: `docker-compose exec SERVICE_NAME COMMAND` where `COMMAND` is whatever you want to run. Examples:
        * Shell into the PHP container, `docker-compose exec php-fpm bash`
        * Run symfony console, `docker-compose exec php-fpm bin/console`
        * Open a mysql shell, `docker-compose exec mysql mysql -uroot -pCHOSEN_ROOT_PASSWORD`
        
# Swagger cheatsheet #

* Generate Swagger documentation `php artisan swagger-lume:publish`