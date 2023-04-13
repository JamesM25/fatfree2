<?php
/*
 * James Motherwell
 * 4/13/2024
 * 328/fatfree2/index.php
 */

// Turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function () {
    //echo '<h1>Hello, World!</h1>';

    // Display view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();