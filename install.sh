set -x

cp .env.example .env

composer install

npm install

php artisan key:generate

gulp

echo "please set .env file to connect db";

php artisan serve --port=80 --host=flukky.dev

$SHELL