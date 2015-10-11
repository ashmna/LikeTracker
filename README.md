Like Tracker
============

*server install mysql, php, nginx*

    sudo apt-get update

    sudo apt-get install mysql-server mysql-client
    sudo apt-get install nginx
    sudo service nginx stop
    sudo aptitude install python-software-properties
    sudo add-apt-repository ppa:nginx/stable
    sudo add-apt-repository ppa:ondrej/php5
    sudo aptitude update
    sudo aptitude safe-upgrade
    sudo service nginx restart
    sudo apt-get install php5-fpm


*nginx config*

    server {
      root ./skins/dev/;
      index index.php;

      server_name dev.lt.am;

      location / {
       rewrite page/(.*)/ /index.php?page=$1;
       rewrite page/(.*) /index.php?page=$1;
      }

      location /global/api {
         rewrite ^(.*)$ /index.php;
      }

    }

