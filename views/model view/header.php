<?php 
require_once __DIR__ . '/../../engine/helpers.php';
$user = currentUser();
?>
<header>
    <nav>
   <ul class="topmenu">  
   <li><a href="/index.php">Главная</a></li>
    <li><a href="" class="active">Миры<span class="fa fa-angle-down"></span></a>    
     <ul class="submenu">
      <li><a href="" class="active">Мир тьмы<span class="fa fa-angle-down"></span></a> 
       <ul class="submenu">
        <li><a href="/views/Vampire the masquerade.php">Вампиры</a></li>    
        <li><a href="">Магия</a></li> 
        <li><a href="">Демоны</a></li> 
       </ul>
      </li>      
     </ul>
    </li>
    <li><a  class="active">Инструменты<span class="fa fa-angle-down"></span></a> 
     <ul class="submenu">
      <li><a href="" class="active">Создание персонажа<span class="fa fa-angle-down"></span></a> 
       <ul class="submenu">
        <li><a href="/views/create list/VTMcreatelist.php">Вампиры</a></li> 
        <li><a href="">Магия</a></li> 
        <li><a href="">Демоны</a></li> 
       </ul>
       </li>
       <li><a href="" class="active">Правила<span class="fa fa-angle-down"></span></a> 
         <ul class="submenu">
        <li><a href="">Для игроков</a></li> 
        <li><a href="">Для ГМов</a></li> 
     </ul>
     <li><a href="" class="active">Кубик<span class="fa fa-angle-down"></span></a> 
    </li> 
      </li>
     </ul>
    </li>
<!-- <li>
        <div class="logo">
                <a class="logo">D&D</a>
        </div>
     </li>  --> 
    <li>
<!-- Не заходите там пока жопа -->
     <a href="/views/account/autorization.php" class="right">Аккаунт <?php displayname() ?></a>
    </li>       
   </ul> 
    </nav>
</header>