<?php
session_start();
include_once 'inc/db.php';
require 'model/Category.php';
require 'model/News.php';
require 'model/Comments.php';
include_once 'model/comments.php';
require 'model/Register.php';

include_once 'view/Comments.php';
include_once 'view/news.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>
