FROM mysql:8.0
RUN touch /etc/mysql/conf.d/mymy.cnf
COPY ./mysql/sql /docker-entrypoint-initdb.d
COPY ./mysql/mymy.cnf /etc/mysql/conf.d/mymy.cnf
EXPOSE 3306