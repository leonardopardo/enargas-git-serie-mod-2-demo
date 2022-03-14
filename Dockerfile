FROM centos:7

# php dependencies
RUN yum -y install https://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php74
RUN yum -y install httpd php php-cli php-common php-zip unzip
RUN yum -y install php-xml
RUN yum -y install php-mbstring

# install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# install git
RUN yum -y git

# update dependencies
RUN yum -y update

WORKDIR /var/www/html

EXPOSE 80

CMD apachectl -DFOREGROUND