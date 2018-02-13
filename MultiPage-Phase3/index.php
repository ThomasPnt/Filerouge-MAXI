<?php
  define('View', 'View/');
  define('Controller', 'Controller/');
  define('Model', 'Model/');

?>

<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="MultiPage-Phase3/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="MultiPage-Phase3/css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <title>Maxi</title>
  </head>

  <body>
    <?php include Controller . 'routerController.php' ?>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
  <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
  <script src="vendors/js/jquery.waypoints.min.js"></script>
  <script src="resources/js/script.js"></script>
</html>
