FROM php:apache
COPY login.com.conf /etc/apache2/sites-available/login.com.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite     &&\
    apt-get update &&\
    a2dissite 000-default   &&\
    a2ensite login.com   &&\
    apt-get install php5-gd &&\
    service apache2 restart
WORKDIR /var/www/html
COPY ./login.com .
EXPOSE 8000
