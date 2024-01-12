FROM php:8.1-apache

ADD https://raw.githubusercontent.com/zounar/php-proxy/master/Proxy.php /var/www/html/Proxy.php

RUN chmod 777 /var/www/html/Proxy.php
