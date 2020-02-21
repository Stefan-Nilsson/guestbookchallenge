<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'Post.php';
require 'Guestbook.php';
require 'homepage.php';
session_start();
class Homecontroller
{




    public function render()
    {


        $guestbookTotal = new Guestbook();

        if (!isset($_SESSION['userArray'])) {

        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $poster = new Post($_POST["authorName"],$_POST["title"],$_POST["message"],date('l jS \of F Y h:i:s A'));

            $posterArray = array("name"=>$poster->getAuthorName(), "title"=>$poster->getTitle(), "content"=>$poster->getContent(), "date"=>$poster->getDate());
            //$guestbookTotal->createJson($posterArray);
            $guestbookTotal->loadData();
            $guestbookTotal->filPostsArray($poster);
            $guestbookTotal->createData();
        }

    }
    public  function whatIsHappening()
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
}