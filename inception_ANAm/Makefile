name = inception
dcf = ./srcs/docker-compose.yml

all:
	@printf "Running setup ${name}...\\n"
	@docker-compose -f $(dcf) up -d

build:
	@printf "Building setup ${name}...\\n"
	@docker-compose -f $(dcf) up -d --build

down:
	@printf "Stopping setup ${name}...\\n"
	@docker-compose -f $(dcf) down

re:	down
	@printf "Rebuilding setup ${name}...\\n"
	@docker-compose -f $(dcf) up -d --build

clean: down
	@printf "Cleaning setup ${name}...\\n"
	@docker system prune -a

fclean: down
	@printf "Complete cleanup of all Docker setup\\n"
	@docker rmi debian:bullseye
	@docker rmi srcs_nginx
	@docker rmi srcs_wordpress
	@docker rmi srcs_mariadb
	@docker volume rm srcs_MDB_volume
	@docker volume rm srcs_WPS_volume

.PHONY	: all build down re clean fclean
