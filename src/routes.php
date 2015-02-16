<?php

if (Config::get('adminer::is_active')) {
    Route::any(Config::get('adminer::path'), 'Yaro\Adminer\AdminerController@handle');
}
