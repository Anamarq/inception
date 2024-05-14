#!/bin/bash

service mariadb start
mysql -e "create database if not exists $MDB_NAME;"
mysql -e "create user if not exists '$MDB_USER'@'%' identified by '$MDB_PASS';"
mysql -e "grant all privileges on *.* TO '$MDB_USER'@'%' with grant option;"
mysql -e "flush privileges;"
mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MDB_ROOT_PASS';"
pkill -f mysqld
mysqld
