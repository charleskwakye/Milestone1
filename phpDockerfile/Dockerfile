FROM ubuntu:22.04

ENV DEBIAN_FRONTEND noninteractive

RUN apt update
RUN apt install -y apache2
RUN apt install -y apache2-utils
RUN apt install -y tcl
RUN apt-get -y install php8.1
RUN apt-get -y install php-cli
RUN apt install -y php-cgi
RUN apt-get install -y php php-fpm php-pdo-mysql php-mbstring php-mysqli
EXPOSE 80
ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]
