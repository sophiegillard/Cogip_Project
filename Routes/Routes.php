<?php

namespace App\Routes;

use App\Controllers\CompaniesController;
use App\Controllers\ContactsController;
use App\Controllers\InvoicesController;
use Bramus\Router\Router;
use App\Controllers\HomeController;
use http\Params;
use App\Controllers\ShowCompaniesController;
use App\Controllers\ShowContactController;
use App\Controllers\DashboardController;
use App\Controllers\DashboardInvoicesController;
use App\Controllers\DashboardCompaniesController;
use App\Controllers\DashboardContactController;


$router = new Router();

$router->get('/', function () {
    (new HomeController)->index();
});

$router->get('/contacts', function () {
    (new ContactsController)->index();
});

$router->get('/companies', function () {
    (new CompaniesController)->index();
});

$router->get('/invoices', function () {
    (new InvoicesController)->index();
});

$router->get('/showCompany', function () {
    (new ShowCompaniesController)->index();
});

$router->get('/showContact', function () {
    (new ShowContactController)->index();
});

$router->get('/dashboard', function () {
    (new DashboardController)->index();
});

$router->get('/dashboardInvoices', function () {
    (new DashboardInvoicesController)->index();
});

$router->get('/dashboardCompanies', function () {
    (new DashboardCompaniesController)->index();
});

$router->get('/dashboardContact', function () {
    (new DashboardContactController)->index();
});

$router->post('/dashboardInvoices', function () {
    $ref = $_POST['reference'];
    $price = $_POST['price'];
    $company = $_POST['companyName'];
    $dueDate = $_POST['date'];
    (new DashboardInvoicesController)->addInvoices($ref, $company, $dueDate);
    header('location:/dashboardInvoices');
});

$router->post('/dashboardContact', function () {
    $name = $_POST['contactName'];
    $phone = $_POST['phoneNumber'];
    $companyId = $_POST['company'];
    $email = $_POST['contactEmail'];
    $file = $_POST['file'];
    (new DashboardContactController)->addContact($name, $phone, $companyId, $email);
    header('location:/dashboardContact');
});

$router->post('/dashboardCompany', function () {

    $name = $_POST['companyName'];
    $country = $_POST['country'];
    $tva = $_POST['tva'];
    $type = $_POST['companyType'];
    (new DashboardCompaniesController)->addCompany($name, $country, $tva, $type);
    header('location:/dashboardCompanies');
});

//Delete
$router->get('/dashboardDeleteInvoices', function () {

    $id = $_GET['id'];
    (new DashboardInvoicesController)->deleteInvoices($id);
    header('location:/dashboardInvoices');
});

$router->get('/dashboardDeleteCompany', function () {

    $id = $_GET['id'];
    (new DashboardCompaniesController())->deleteCompany($id);
    header('location:/dashboardCompanies');
});

$router->get('/dashboardDeleteContact', function () {

    $id = $_GET['id'];
    (new DashboardContactController())->deleteContact($id);
    header('location:/dashboardContact');
});

//Update

$router->post('/dashboardUpdateInvoices', function () {
    $ref = $_POST['reference'];
    $price = $_POST['price'];
    //$company = $_POST['companyName'];
    $dueDate = $_POST['date'];
    $id = $_GET['id'];
    (new DashboardInvoicesController())->updateInvoices(1, $ref, $dueDate, $id);
    header('location:/dashboardInvoices');
});

$router->post('/dashboardUpdateCompany', function () {
    $name = $_POST['companyName'];
    $country = $_POST['country'];
    $tva = $_POST['tva'];
    $type = $_POST['companyType'];
    $id = $_GET['id'];
    (new DashboardCompaniesController())->updateCompany($name, $country, $tva, 1, $id);
    header('location:/dashboardCompanies');
});

$router->post('/dashboardUpdateContact', function () {
    $name = $_POST['contactName'];
    $phone = $_POST['phoneNumber'];
    //$companyId = $_POST['company'];
    $email = $_POST['contactEmail'];

    $id = $_GET['id'];
    (new DashboardContactController())->updateContact($name, $phone, 1, $email, $id);
    header('location:/dashboardContact');
});

$router->run();