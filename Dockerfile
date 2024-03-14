FROM mysql/mysql-server:latest

ENV MYSQL_ROOT_PASSWORD=Root@1234 \
    MYSQL_DATABASE=parivartan_dev \
    MYSQL_USER=v7web_db \
    MYSQL_PASSWORD=2G4bDqS3TK@

COPY parivartan_dev08032024.sql /home
COPY init.sql /docker-entrypoint-initdb.d/
RUN rm -rf /home/parivartan_dev08032024.sql

EXPOSE 3306

CMD ["mysqld"]
