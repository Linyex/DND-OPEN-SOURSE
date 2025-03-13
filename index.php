<?php 
require_once __DIR__ . '/engine/helpers.php';
$user = currentUser();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/css/IndexStyle.css">
  <?php require_once __DIR__ . '/engine/requiremainstyle.php'?>
  <title> D&D </title> 
</head>


<body>
<div class="wrapper">
<?php include('./views/model view/header.php'); ?>
<div class="main">
	 
  <a class="main-inscription"><h3><p align="center"><center>Добро пожаловать на сайт по созданию персонажей и игры в настольные игры на основе DND системы</center></p></h3></a>

  <div class="container py-4 px-3">
        <div class="container">
            <h2 class="mb-3">Последние новости</h2>
        <?php require_once __DIR__ . '/views/model view/news.php'?>
        </div>
  </div>
</div>
        <?php  require_once __DIR__ . '/views/model view/footer.php'?> 
</div>
      </body>
</html>