<?php

session_start();

?>

<!DOCTYPE html>
<html lang="ru"> <!-- стоял en, не знаю на что это влияет, но лучше отмечу -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/css/header.css">
  <link rel="stylesheet" href="/style/css/Vampire the masquerade.css">  
  <title>Vampire the masquerade</title>
</head>

<body> 
<!-- -------------------------начало тела-------------------------- -->		
<?php include('/domains/DND/views/model view/header.php'); ?>
<div class="main-cap">
   <a class="main-cap-a1">
   <p align="center">
     Добро пожаловать в мир тьмы Vampire the masquerade!<br> 
     Это мир сверхъестественного ужаса и интриг, спрятанный у всех на виду. 
	 Здесь вампиры, оборотни и многие другие существа живут среди нас, скрытых в тенях.
     В данном разделе будет описываться сама суть мира Вампиров. 
     Приготовьте пакет крови, приступаем к изучению!<br> 
   </p></a>
   
   <a class="main-cap-a2">О Мире</a>
   
   <p><div class="main-cap-a3div"><a class="main-cap-a3">
      Что, если бы монстры были настоящими? Не как мерзости, таящиеся в тенях… 
       а хитрые хищники, скрывающиеся у всех на виду? 
       Влиять на каждый аспект нашего мира так, как мы даже не осмелились представить? 
	   Что, если бы вы стали одним из них?
   </a></div></p> 
   
   <p><div class="main-cap-a3div"><a class="main-cap-a3">
       В Мире тьмы вампиры, оборотни и монстры самых разных видов живут среди нас: 
       весь сверхъестественный мир скрыт у всех на виду.<br> 
       В Vampire the masquerade ужас индивидуален. 
	   Вы не жертва, убегающая от монстров. Вы чудовище, антигерой, боящийся того, на что вы способны, если поддадитесь своим 
	   внутренним конфликтам. Гротеск и возвышенное смешение, когда рассказы о тайнах и ужасах 
	   разворачиваются с глубокими размышлениями о моральных последствиях и ограничениях 
	   человечества.<br> 
       В Vampire the masquerade все не так, как кажется, но все взаимосвязано. 
	   Вечная жизнь, сверхъестественная сила, даже господств, 
	   тайны влияющие на мир, — все это в ваших руках… если вы сможете выжить.   
   </a></div></p>
   
   <a class="main-cap-a2">В чем суть?</a>
   
   <p><div class="main-cap-a3div"><a class="main-cap-a3">
      Вы монстр, притворяющийся человеком, борющийся за выживание и господство в темном и 
      таинственном мире. Ночь за ночью вы изо всех сил пытаетесь найти свое место в причудливой 
      паутине тайн, древних заговоров и современных потрясений. В погоне за нежизнью вы используете 
      все возможности, от тайных способностей до простой дипломатии, соблазнения и уличной смекалки.
   </a></div></p> 
   
   <a class="main-cap-a2">Кланы</a>
   
   <p><div class="main-cap-a3div"><a class="main-cap-a3">
      В Vampire: The Masquerade Сородичи делятся на кланы. Кланы — это древние родословные вампиров, 
      которые имеют общие характеристики, передаваемые через Кровь. 
      Каждый клан предоставляет определенные силы, слабости, а иногда даже поведение и убеждения тем,
      кто к нему принадлежит.
   </a></div></p> 
<!---------------------------ссылки на кланы---------------------------->	 
   <div class="main-cap-a5div">
   <img src="/objects/image/banu.png" width="110" height="110" class="leftimg">
       <div class="main-cap-a4div">
        <a href="Klans/BanuHaqim.html" class="main-cap-a4">Бану Хиким</a> 
       </div> 
   <a class="ssiltext"><p class="letter">Судьи</p></a>
   <p class="ssiltext1">Судить. Отрекаться. Наказывать. Казнить. Дисциплинировать.</p>  
   </div>
<!------------------------------>   
   <div class="main-cap-a5div1">
   <img src="/objects/image/brujah.png" width="110" height="110" class="rightimg">
       <div class="main-cap-a4div">
        <a href="Klans/Brujah.html" class="main-cap-a4">Бруха</a>
       </div>
   <a class="ssiltext"><p class="letter">Повстанцы</p></a>
   <p class="ssiltext1">Бунт. Протест. Борьба. Противодействие. Сопротивление.</p> 
   </div>     
<!------------------------------> 
   <div class="main-cap-a5div"> 
   <img src="/objects/image/caitiff.png" width="110" height="110" class="leftimg">   
       <div class="main-cap-a4div">
        <a href="Klans/Caitiff.html" class="main-cap-a4">Каэтифф</a>
       </div>
   <a class="ssiltext"><p class="letter">Вообще без понятия что написать</p></a>
   <p class="ssiltext1">Поэтому допишем потом</p>
   </div>     
<!------------------------------> 
   <div class="main-cap-a5div1">
   <img src="/objects/image/gangrel.png" width="110" height="110" class="rightimg">    
       <div class="main-cap-a4div">
        <a href="Klans/Gangrel.html" class="main-cap-a4">Гангрел</a>
       </div>
   <a class="ssiltext"><p class="letter">Звери</p></a>
   <p class="ssiltext1">Изменение формы. Борьба. Преследование. Рыскание. Терпеть.</p> 
   </div>  
<!------------------------------> 
   <div class="main-cap-a5div">
   <img src="/objects/image/hecata.png" width="110" height="110" class="leftimg">  
       <div class="main-cap-a4div">
        <a href="Klans/Hecata.html" class="main-cap-a4">Геката</a>
       </div>
   <a class="ssiltext"><p class="letter">Некромант</p></a>
   <p class="ssiltext1">Воскрешать. Вызывать и связывать призраков. Исследовать. Наблюдать.</p> 
   </div> 
<!------------------------------> 
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/lasombra.png" width="110" height="110" class="rightimg">   
       <div class="main-cap-a4div">
        <a href="Klans/Lasombra.html" class="main-cap-a4">Ласомбра</a>
       </div>
   <a class="ssiltext"><p class="letter">Манипуляоры</p></a>
   <p class="ssiltext1">Команда. Настойчивость. Достижение. Обман. Кукловод.</p> 
   </div> 
<!------------------------------> 
   <div class="main-cap-a5div"> 
   <img src="/objects/image/malkavian.png" width="110" height="110" class="leftimg">     
       <div class="main-cap-a4div">
        <a href="Klans/Malkavian.html" class="main-cap-a4">Малкавиан</a>
       </div>
   <a class="ssiltext"><p class="letter">Оракулы</p></a>
   <p class="ssiltext1">Постигать. Смущать. Предсказывать.</p> 
   </div> 
<!------------------------------> 
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/ministry.png" width="110" height="110" class="rightimg">     
       <div class="main-cap-a4div">
        <a href="Klans/Ministy.html" class="main-cap-a4">Министерство</a>
       </div>
   <a class="ssiltext"><p class="letter">Искусители</p></a>
   <p class="ssiltext1">Влиять. Ловить. Иметь дело. Культивировать.</p> 
   </div>
<!------------------------------>  
   <div class="main-cap-a5div"> 
   <img src="/objects/image/nosferatu.png" width="110" height="110" class="leftimg">    
       <div class="main-cap-a4div">
        <a href="Klans/Nosferatu.html" class="main-cap-a4">Носферату</a>
       </div>
   <a class="ssiltext"><p class="letter">Чудовища</p></a>
   <p class="ssiltext1">Шпионить. Прятаться. Расследовать. Таиться. Наблюдать.</p> 
   </div>   
<!------------------------------> 
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/ravnos.png" width="110" height="110" class="rightimg">      
       <div class="main-cap-a4div">
        <a href="Klans/Ravnos.html" class="main-cap-a4">Равнос</a>
       </div>
   <a class="ssiltext"><p class="letter">Кочевники</p></a>
   <p class="ssiltext1">Ускользать. Обманывать. Блефовать. Бродить.</p>
   </div>    
<!------------------------------> 
   <div class="main-cap-a5div"> 
   <img src="/objects/image/salubri.png" width="110" height="110" class="leftimg">      
       <div class="main-cap-a4div">
        <a href="Klans/Salubri.html" class="main-cap-a4">Салюбри</a>
       </div>
   <a class="ssiltext"><p class="letter">Беглецы</p></a>
   <p class="ssiltext1">Лечить. Прятаться. Сопротивляться. Выживать. Искупать.</p> 
   </div>
<!------------------------------> 
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/thinblood.png" width="110" height="110" class="rightimg">    
       <div class="main-cap-a4div">
        <a href="Klans/ThinBlood.html" class="main-cap-a4">Слабокровные</a>
       </div>
   <a class="ssiltext"><p class="letter">Тут тоже не знаю что писать</a>
   <p class="ssiltext1">Поэтому подождет, благо место для теста есть, потом придумаем</p>
   </div>   
<!------------------------------> 
   <div class="main-cap-a5div"> 
   <img src="/objects/image/toreador.png" width="110" height="110" class="leftimg">   
       <div class="main-cap-a4div">
        <a href="Klans/Toreador.html" class="main-cap-a4">Тореадор</a>
       </div>
   <a class="ssiltext"><p class="letter">Соблазнители</p></a>
   <p class="ssiltext1">Соблазнять. Заманивать. Одержимость. Выполнять. Очаровывать.</p> 
   </div>
<!------------------------------>
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/tremere.png" width="110" height="110" class="rightimg">     
       <div class="main-cap-a4div">
        <a href="Klans/Tremere.html" class="main-cap-a4">Тремер</a>
       </div>
   <a class="ssiltext"><p class="letter">Ведьмы</p></a>
   <p class="ssiltext1">Учиться. Совершенствовать. Планировать. Выполнять ритуалы и колдовство.</p>
   </div>   
<!------------------------------> 
   <div class="main-cap-a5div"> 
   <img src="/objects/image/tzimisce.png" width="110" height="110" class="leftimg">    
       <div class="main-cap-a4div">
        <a href="Klans/Tzimisce.html" class="main-cap-a4">Цимисхи</a>
       </div>
   <a class="ssiltext"><p class="letter">Драконы</p></a>
   <p class="ssiltext1">Схватывать. Обладать. Преобразовывать. Видоизменять. Контролировать.</p>
   </div>   
<!------------------------------> 
   <div class="main-cap-a5div1"> 
   <img src="/objects/image/ventrue.png" width="110" height="110" class="rightimg">    
       <div class="main-cap-a4div">
        <a href="Klans/Ventrue.html" class="main-cap-a4">Вентру</a>
       </div>
   <a class="ssiltext"><p class="letter">Аристократы</p></a>
   <p class="ssiltext1">Править. Руководить. Влиять. Терпеть.</p> 
   </div>
   
</div>     
<!-- -------------------------конец тела--------------------------- -->	
</body>

</html>