name = inception
dcf = ./srcs/docker-compose.yml

all:
	@printf "Ejecutando la configuración ${name}...\\n"
	@docker-compose -f $(dcf) up -d

build:
	@printf "Construyendo la configuración ${name}...\\n"
	@docker-compose -f $(dcf) up -d --build

down:
	@printf "Deteniendo la configuración ${name}...\\n"
	@docker-compose -f $(dcf) down

re:	down
	@printf "Reconstruyendo la configuración ${name}...\\n"
	@docker-compose -f $(dcf) up -d --build

clean: down
	@printf "Limpiando la configuración ${name}...\\n"
	@docker system prune -a

fclean: down
	@printf "Limpieza total de todas las configuraciones de Docker\\n"
	@docker rmi debian:bullseye
	@docker rmi srcs_nginx
	@docker rmi srcs_wordpress
	@docker rmi srcs_mariadb
	@docker volume rm srcs_MDB_volume
	@docker volume rm srcs_WPS_volume

.PHONY	: all build down re clean fclean
