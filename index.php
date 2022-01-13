<?php
session_start();
include_once 'inc/database.php';
require 'model/Category.php';
require 'model/Products.php';
require 'model/Comments.php';
require 'model/Register.php';
require 'model/OverProducts.php';

include_once 'view/products.php';
include_once 'view/comments.php';
include_once 'view/overProducts.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>
