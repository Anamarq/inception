#!/bin/bash

source .env
echo "CREATE DATABASE IF NOT EXISTS ${MARIADB_DATABASE_NAME};" > starting_db.sql
echo "CREATE USER IF NOT EXISTS '${MARIADB_USER_NAME}'@'%' IDENTIFIED BY '${MARIADB_USER_PASSWORD}';" >> starting_db.sql
echo "GRANT ALL PRIVILEGES ON ${MARIADB_DATABASE_NAME}.* TO 'test'@'%';" >> starting_db.sql
echo "FLUSH PRIVILEGES;" >> starting_db.sql
echo "ALTER USER '${MARIADB_ROOT_LOGIN}'@'localhost' IDENTIFIED BY '${MARIADB_ROOT_PASSWORD}';" >> starting_db.sql
