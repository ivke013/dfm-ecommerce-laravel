<?php
use Illuminate\Support\Facades\Route;


Route::get('shop', function () {
    echo 222;
});


Route::get('/saberi/{a}/{b}', [\DFM\ECommerce\App\Http\Controllers\EcommerceController::class, 'subtract']);
