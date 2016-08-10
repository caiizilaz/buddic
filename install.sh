set -x

cp .env.example .env

composer install

npm install

php artisan key:generate

gulp

echo "please set .env file to connect db";

chmod +x serv.sh

./serv.sh 

gulp watch

$SHELL