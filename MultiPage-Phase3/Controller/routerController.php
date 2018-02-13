<?php
  $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
  switch ($page) {
    case 'about':
      include(Controller . 'aboutController.php');
      $controller = new aboutController();
      break;
    case 'host':
      include(Controller . 'hostController.php');
      $controller = new hostController();
      break;
    case 'refugee':
      include(Controller . 'refugeeController.php');
      $controller = new refugeeController();
      break;
    default:
      include(Controller . 'aboutController.php');
      $controller = new aboutController();
      break;
  }
  $controller->run();
?>
