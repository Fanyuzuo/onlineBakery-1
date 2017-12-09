<?php
try
{

  $pdo = new PDO('mysql:host=localhost;dbname=bakery', 'tsolomonphillips', 'raidTombs2463%');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

try
{

  $sql = 'INSERT INTO product_t
  (productID, productDescription, productPrice, materialCost)
  values
  (12, "Boston Cream Pie", 40.00, 25.00)'; 
  
  $affectedRows = $pdo->exec($sql);
}
catch (PDOException $e)
{
  $output = 'Error updating the product list: ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output = "Insert $affectedRows rows." . "<br/>";

include 'add_products.html.php';