FROM php:5.6.40-apache

ADD php.ini /usr/local/etc/php/
ADD 000-default.conf /etc/apache2/sites-enabled/

RUN cd /usr/bin \
  && curl -s http://getcomposer.org/installer | php \
  && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update \
  && apt-get install --no-install-recommends -y wget git zip vim unzip libpq-dev libonig-dev \
  && docker-php-ext-install pdo_mysql

RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite
