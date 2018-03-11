
-----------------------------------------------------
Fetch currency rates from https://currencylayer.com
-----------------------------------------------------

1. Goto project directory

2. Download project dependencies 
composer install

3. Create database with name "intelliad"

4. Create tables in database with pre-fill dataset
php artisan migrate:fresh --seed

5. Run server
php artisan serve

6. Visit localhost:8000/storecurrencydata 

7. Run script with CLI
php artisan StoreCurrencyData

8. Run test cases
vendor\bin\phpunit tests/Unit/CurrencyDataTest.php



