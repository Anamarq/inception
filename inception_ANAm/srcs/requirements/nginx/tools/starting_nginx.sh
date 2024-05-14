#!/bin/bash

openssl req -x509 -days 365 -newkey rsa:4096 -nodes -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=ES/ST=ANDALUCIA/L=MALAGA/O=42Malaga/CN=anamarqu.42.fr";

exec "$@"
