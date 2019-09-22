<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body style="
  <?php 
  //request functions
    require './inc/functions.php'; 
  //variable with the value of rgb color example background-color:rgb(0,150,90);
    echo $randomColor();
  ?>">
  <div class="container">
  <?php
  //request functions
    require './inc/functions.php';
    echo $printQuote();
  ?>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
