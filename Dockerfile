FROM php:7-apache
COPY src/* /var/www/html
RUN mkdir -p /var/www/html/p

CMD ["start-apache"]