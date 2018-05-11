#!/bin/bash

printf '\e[0;96m Downloading WordPress...\e[0m\n'
wp core download

printf '\e[0;96m Creating database...\e[0m\n'
mysql -u root -e "CREATE DATABASE IF NOT EXISTS ${PWD##*/};"

printf '\e[0;96m Installing WordPress...\e[0m\n'
wp core config --dbname=${PWD##*/} --dbuser=root --dbpass=
wp core install --url=${PWD##*/}.test --title=$sitename --admin_user=local --admin_password=local --admin_email=local@local.local
