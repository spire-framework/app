<?php

// Display PHP errors.
ini_set('display_errors', 1);

// Load constants and functions.
require_once 'constants.php';
require_once 'functions.php';

// Register the composer autoloader.
require_once ROOTDIR . 'vendor/autoload.php';

// Initialize application config.
Spire\Config\Config::file(ROOTDIR . 'config/app.php');

// Load the application autoloader.
require_once 'Psr4Autoloader.php';

// Load application modules.
$autoloader = new Psr4Autoloader;
$autoloader->register();
$autoloader->addNamespace('Modules', ROOTDIR . 'modules');
