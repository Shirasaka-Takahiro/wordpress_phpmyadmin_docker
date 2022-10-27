FROM mysql:8.0
COPY ./mysql/sql /docker-entrypoint-initdb.d
COPY ./mysql/my.cnf /etc/mysql/conf.d/my.cnf
EXPOSE 3306