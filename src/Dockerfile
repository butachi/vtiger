FROM php:8.3.11-apache

WORKDIR /usr/src

ARG user
ARG uid

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl 

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN install-php-extensions \
    pdo_mysql \
    mbstring \
    imap \
    xml \
    mysqli \
    && docker-php-source delete

RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/ && \
    chown -R $user:$user /home/$user && \
    chown -R $user:$user /usr/src

COPY ./src .

COPY ./deployment/config/php.ini /usr/local/etc/php/php.ini
COPY ./deployment/config/apache.conf /etc/apache2/sites-available/000-default.conf

# expose port 80 for Apache.
EXPOSE 80

# start Apache web server.
CMD ["apache2-foreground"]

USER $user
