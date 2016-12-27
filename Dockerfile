FROM ubuntu:16.04

RUN apt-get update\
apt-get install nginx\

apt-get install mysql-server\

apt-get install php-fpm php-mysql\

COPY config/php.ini /etc/php/7.0/fpm/php.ini
COPY config/default /etc/nginx/sites-available/default

RUN systemctl reload nginx\
mkdir -p /usr/local/bin\
curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony\
chmod a+x /usr/local/bin/symfony
