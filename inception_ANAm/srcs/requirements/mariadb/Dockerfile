FROM debian:bullseye

RUN apt update && apt upgrade -y
RUN apt install -y --no-install-recommends mariadb-server && rm -rf /var/lib/apt/lists/*
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/init.sh /
RUN chmod +x /init.sh
RUN service mariadb start
EXPOSE 3306

CMD ["/init.sh"]
