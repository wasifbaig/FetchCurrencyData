
-----------------------------------------------------
Fetch currency rates from https://currencylayer.com
-----------------------------------------------------

1. Goto project directory

2. Download project dependencies <br/>
composer install

3. Create database with name "intelliad" <br/>

4. Create tables in database with pre-fill dataset <br/>
php artisan migrate:fresh --seed

5. Run server <br/>
php artisan serve

6. Visit localhost:8000/storecurrencydata 

7. Run script with CLI <br/>
php artisan StoreCurrencyData

8. Run test cases <br/>
vendor\bin\phpunit tests/Unit/CurrencyDataTest.php



