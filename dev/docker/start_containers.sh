#!/usr/bin/env bash

function info {
    printf "\033[0;36m===> \033[0;33m${1}\033[0m\n"
}

info "Stopping containers and removing: containers, networks, volumes, and images..."

if [ -z "$1" ]; then
    docker-compose down
else
    info "Removing all services images..."
    docker-compose down --rmi all
fi

info "starting fresh containers..."
docker-compose up --build