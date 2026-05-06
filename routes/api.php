<?php
use App\Controllers\ContactController;

// The Router class handles the '/api' prefix matching automatically
router()->group(['prefix' => 'api', 'name' => 'api.'], function($router) {
    $router->post('/contact-submit', [ContactController::class, 'submit'])->name('submit.contact');
});