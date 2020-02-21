<?php
declare(strict_types=1);

//include all your controllers here
require 'Homecontroller.php';
// session_start();
$controller = new Homecontroller();
$controller->render();
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

// $controller = new Homecontroller();
// $controller->render();