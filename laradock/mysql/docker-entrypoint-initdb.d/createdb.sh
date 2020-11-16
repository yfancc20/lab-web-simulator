#!/bin/sh

mysql -u root -proot < /docker-entrypoint-initdb.d/createdb.sql
