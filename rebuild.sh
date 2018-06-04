
docker build -t w2w-php-img .
docker run -d -p 8080:80 --rm --name w2w-site -e APACHE_RUN_USER=#1000 -v "$PWD":/var/www/html w2w-php-img
