include .env
export $(shell sed 's/=.*//' .env)

CONTAINER_NAME ?=

build_dev:
	docker compose up -d --build

build_prod:
	docker compose up -d --build db wordpress

shell:
	docker exec -it $(CONTAINER_NAME) /bin/sh

stop:
	$(MAKE) backup

rm:
	$(MAKE) backup

down:
	$(MAKE) backup
	docker compose down

restart: stop run

clean:
	$(MAKE) backup
	docker system prune -f

purge:
	$(MAKE) backup
	docker rm -f $(shell docker ps -a -q)
	docker rmi -f $(shell docker images -q)

backup:
	docker exec wordpressdb /usr/bin/mysqldump -u $(MYSQL_ROOT_USER) --password=$(MYSQL_ROOT_PASSWORD) $(MYSQL_DATABASE) > ./backup-dev.sql

restore_dev:
	docker exec -i wordpressdb mysql -u ${MYSQL_ROOT_USER} --password="${MYSQL_ROOT_PASSWORD}" ${MYSQL_DATABASE} < ./backup-dev.sql

restore_prod:
	docker exec -i wordpressdb mysql -u ${MYSQL_ROOT_USER} --password="${MYSQL_ROOT_PASSWORD}" ${MYSQL_DATABASE} < ./backup-prod.sql
