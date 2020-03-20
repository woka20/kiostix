mysql -u root -p -e "create database master" 
php artisan migrate:fresh
php artisan db:seed
php -S localhost:8000 -t public
