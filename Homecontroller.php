<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'Post.php';

require 'Guestbook.php';


class Homecontroller
{



    public function createJson()
    {

        $loader = new Dataloader();
        $loader->objectsToSession();

    }

    public function render()
    {
        if (!isset($_SESSION['userArray'])){
            $this->createObjects();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customerPost = $_POST["customers"];
            $productPost = $_POST["products"];


            require 'homepage.php';
        }

    function whatIsHappening()
    {
        echo '<h2>$_GET</h2>';
        var_dump($_GET);
        echo '<h2>$_POST</h2>';
        var_dump($_POST);
        echo '<h2>$_COOKIE</h2>';
        var_dump($_COOKIE);
        echo '<h2>$_SESSION</h2>';
        var_dump($_SESSION);
    }
whatIsHappening();
}



}