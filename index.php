<?php


define('AREXE', 1);

require_once('define.php');

// Startup
require_once(DIR_SYSTEM . 'library/client.php');
Client::setName('catalog');

require_once(DIR_SYSTEM . 'startup.php');

// App
$app = new Catalog();

// Initialise main classes
$app->initialise();

// Load eCommerce classes
$app->ecommerce();

// Route the app
$app->route();

// Dispatch the app
$app->dispatch();

// Render the output
$app->render();
