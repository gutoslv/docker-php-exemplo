FROM php:7.3-apache
RUN apt update && \
    apt install -y wget gnupg2 libpq5 libpq-dev && docker-php-ext-install pdo pdo_pgsql
# RUN curl https://www.pgadmin.org/static/packages_pgadmin_org.pub | apt-key add
# RUN echo "deb https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/bionic pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list && apt update
# RUN apt update
# RUN apt-get install -y pgadmin4
# COPY ./wait-for-postgres.sh wait-for-postgres.sh
# RUN chmod +x wait-for-postgres.sh 
RUN apt search php | grep pgsql
COPY src/ /var/www/html