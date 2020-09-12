<?php

// Require MySQL connection
require ('database/DBController.php');

// Require product class
require ('database/product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

