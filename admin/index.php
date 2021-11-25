<?php

define('AREXE', 1);

require_once('define.php');

// Startup
require_once(DIR_SYSTEM . 'library/client.php');
Client::setName('admin');

require_once(DIR_SYSTEM . 'startup.php');

// App
$app = new Admin();

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
