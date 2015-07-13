FROM tutum/apache-php:latest
MAINTAINER Steve Shreeve <steve.shreeve@gmail.com>
WORKDIR /

RUN apt-get update && DEBIAN_FRONTEND="noninteractive" \
    apt-get -yq install git mysql-client php5-gd php5-mcrypt && \
    rm -rf /var/lib/apt/lists/* \
    rm -rf /app && git clone --branch 4.2-branch --depth=1 https://github.com/WordPress/WordPress.git /app

COPY wp-config.php /app/
COPY .htaccess /app/
COPY run.sh /run.sh

RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf && \
    a2enmod rewrite && \
    /usr/sbin/php5enmod mcrypt && \
    chmod +x /*.sh && \
    mkdir -p /app/wp-content/mu-plugins

ENV DB_HOST **LinkMe**
ENV DB_PORT 3306
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**

# VOLUME ["/app/wp-content"] # Can't use on Aptible

EXPOSE 80

CMD ["/run.sh"]
