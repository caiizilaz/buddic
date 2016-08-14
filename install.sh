set -x

cp .env.example .env

composer install

npm install

php artisan key:generate

php artisan migrate

gulp

php artisan serve --port=80 --host=flukky.dev

$SHELL