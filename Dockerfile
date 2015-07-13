FROM tutum/apache-php:latest
MAINTAINER Steve Shreeve <steve.shreeve@gmail.com>
WORKDIR /

# Install baseline
RUN apt-get update && DEBIAN_FRONTEND="noninteractive" \
    apt-get -yq install git mysql-client && \
    rm -rf /var/lib/apt/lists/* \
    rm -rf /app && git clone --branch 4.2-branch --depth=1 https://github.com/WordPress/WordPress.git /app

# Adjust configuration
RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf
RUN a2enmod rewrite
ADD wp-config.php /app/
ADD .htaccess /app/
ADD run.sh /run.sh
RUN chmod +x /*.sh

# Default env
ENV DB_HOST **LinkMe**
ENV DB_PORT 3306
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**

# VOLUME ["/app/wp-content"] # Can't use on Aptible

EXPOSE 80

CMD ["/run.sh"]
