<?php

/*
 * Index File
 *
 * This is the entry point for the application.
 *
 * The document root of your apache configuration should point in this directory.
 * 'mod_rewrite' should be enabled for a correct interpretation of the .htaccess file.
 */

session_start();

require_once '../app/helpers.php';
require_once '../vendor/autoload.php';

$app = new App\App;

/**
 * Enable error reporting
 *
 * Enabling error reporting in the browser.
 * Error reporting should not be enabled if you release your application on a webserver.
 *
 *
 */
    error_reporting( E_ALL );
    ini_set( 'display_errors', '1' );