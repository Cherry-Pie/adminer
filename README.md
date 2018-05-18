## Adminer for Laravel 4

Official [adminer website](http://adminer.org).

### Installation
Add dependency to composer.json:
```json
"require": {
    "yaro/adminer": "0.*"
}
```

Add to app/config/app.php:
```php
'providers' => array(
//...
    'Yaro\Adminer\AdminerServiceProvider',
//...
),
```

Then run commands:
```shell
$ php artisan asset:publish yaro/adminer
$ php artisan config:publish yaro/adminer
```


### Config description
**is_active** - activate/disable adminer<br/>
**path** - request uri for adminer panel<br/>
**version** - which version to use<br/>
**theme** - optional css theme<br/>

