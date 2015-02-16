## Adminer for Laravel 4

Official [adminer website](http://adminer.org).

### Installation
Add to app/config/app.php:
```php
'providers' => array(
//...
    'Yaro\Adminer\AdminerServiceProvider',
//...
),
```

Then:
```shell
php artisan asset:publish yaro/adminer
php artisan config:publish yaro/adminer
```


Thats all, folks