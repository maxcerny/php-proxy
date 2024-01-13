FROM php:8.1-apache

COPY ./Proxy.php /var/www/html/Proxy.php

COPY ./welcome.php /var/www/html/welcome.php

RUN chmod 777 /var/www/html/Proxy.php

CMD  php /var/www/html/welcome.php && apache2-foreground