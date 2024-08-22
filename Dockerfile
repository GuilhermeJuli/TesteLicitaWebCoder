FROM mysql:8.0

COPY script.sql /docker-entrypoint-initdb.d/
RUN echo "Script SQL Executado com sucesso!" 

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=TestLicitaNetCoder
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=root

EXPOSE 3306
