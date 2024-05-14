FROM debian:bullseye

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y --no-install-recommends nginx openssl && rm -rf /var/lib/apt/lists/*
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=SP/ST=Malaga/L=Malaga/O=42 Malaga/OU=anamarqu/CN=anamarqu" -keyout /etc/nginx/ssl/anamarqu.key -out /etc/nginx/ssl/anamarqu.crt
COPY conf/default /etc/nginx/sites-available/default
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
