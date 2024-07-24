<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return json_encode(['success' => true, 'message' => 'Successfully reached to API route']);
});
