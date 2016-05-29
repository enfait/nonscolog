FROM moonscale/runner-drupal

RUN mkdir /project \
    && chown www-data:www-data /project \
    && chown www-data:www-data /var/www

USER www-data

WORKDIR /project

COPY ./composer.json /project/composer.json

RUN composer install

RUN rm -rf /var/www/html && ln -s /project/www /var/www/html

COPY ./www/profiles/custom /project/www/profiles/custom

COPY ./www/sites/default /project/www/sites/default

USER root

RUN chown www-data:www-data -R /project/www/profiles/custom /project/www/sites/default

WORKDIR /project/www

VOLUME /project/www/sites/default/files /project/www/sites/default/private
