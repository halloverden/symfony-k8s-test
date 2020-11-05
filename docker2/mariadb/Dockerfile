FROM mariadb:10.4-bionic

RUN apt-get update && apt-get install mysql-client

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Oslo /etc/localtime
RUN "date"
