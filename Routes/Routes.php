<?php

namespace App\Routes;

use App\Controllers\CompaniesController;
use App\Controllers\ContactsController;
use App\Controllers\InvoicesController;
use Bramus\Router\Router;
use App\Controllers\HomeController;
use http\Params;

$router = new Router();

$router->get('/', function() {
    (new HomeController)->index();
});

$router->get('/contacts', function(){
    (new ContactsController)->index();
});

$router->get('/companies', function(){
    (new CompaniesController)->index();
});

$router->get('/invoices', function(){
    (new InvoicesController)->index();
});

$router->run();