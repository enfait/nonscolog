FROM moonscale/runner-drupal

ADD core.make.yml /var/www/html/

RUN cd /var/www/html && drush make core.make.yml .

ADD profiles/nonscolog /var/www/html/profiles/nonscolog

RUN cd /var/www/html/profiles/nonscolog && drush make --contrib-destination --no-core nonscolog.make.yml .

RUN chown -R www-data:www-data /var/www/html

VOLUME /var/www/html/sites/default
