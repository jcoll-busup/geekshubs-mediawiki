# syntax=docker/dockerfile:1

# ==============================================================================
# Image dependencies
#
FROM php:8.1-fpm-alpine3.17 as base-image


# ==============================================================================
# Provision stage
#
FROM base-image AS provision-image

RUN <<RUNCMD
# Abort upon encountering any error
set -eux

# Install any necessary dependencies
apk add diffutils freetype freetype-dev icu icu-dev libjpeg-turbo libjpeg-turbo-dev libpng libpng-dev zlib-dev

# Compile additional PHP extensions 
docker-php-ext-configure gd --with-freetype --with-jpeg

NUM_COMPILER_THREADS=$(grep -c ^processor /proc/cpuinfo 2> /dev/null || 1) \
&& docker-php-ext-install -j${NUM_COMPILER_THREADS} calendar gd intl mysqli pdo pdo_mysql

# Delete dependencies that are not necessary anymore
apk del freetype-dev icu-dev libjpeg-turbo-dev libpng-dev zlib-dev
RUNCMD

WORKDIR /srv/mediawiki


# ==============================================================================
# Build stage
#
FROM provision-image as build-image

ARG COMPOSER_ALLOW_SUPERUSER=1

RUN <<RUNCMD
# Abort upon encountering any error
set -eux

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
chmod +x /usr/local/bin/composer
RUNCMD

COPY ./src /srv/mediawiki
RUN composer install


# ==============================================================================
# Release stage
#
FROM provision-image as release-image
COPY --from=build-image /srv/mediawiki /srv/mediawiki
