FROM ubuntu:16.04

RUN apt-get update && \
apt-get install -y nginx && \

apt-get install -y mysql-server -p root &&\

apt-get install -y php-fpm php-mysql \

COPY config/php.ini /etc/php/7.0/fpm/php.ini
COPY config/default /etc/nginx/sites-available/default

RUN systemctl reload nginx && \
mkdir -p /usr/local/bin && \
curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony && \
chmod a+x /usr/local/bin/symfony
