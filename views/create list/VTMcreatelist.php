<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лист персонажа</title>
</head>
<!-- Нужно будет тут стилька навалить -->
<body>
<?php include('/domains/DND/views/model view/header.php'); ?>
<!-- лист  -->
<div class="VTM-form-list">
  <div class="VTM-head-list">
    <div class="VTM-head-one-list/">
      <div class="VTM-name-list"><a>Имя персонажа:</a><input class="VTM-list-name-input"></div>
      <div class="VTM-player-list"><a>Имя игрока:</a><input class="VTM-list-player-input"></div>
      <div class="VTM-age-list"><a>Возраст:</a><input class="VTM-list-age-input"></div>
      <div class="VTM-gender-list"><a>Пол:</a><input class="VTM-list-gender-input"></div>
      <div class="VTN-nature-list"><a>Натура:</a><input class="VTM-list-nature-input"></div>
    </div>
    <div class="VTM-head-two-list">
      <div class="VTM-mask-list"><a>Маска:</a><input class="VTM-list-mask-input"></div>
      <div class="VTM-role-list"><a>Амплуа:</a><input class="VTM-list-role-input"></div>
      <div class="VTM-klan-list"><a>Клан:</a><input class="VTM-list-klan-input"></div>
      <div class="VTM-generation-list"><a>Поколение:</a><input class="VTM-list-generation-input"></div>
      <div class="VTM-sir-list"><a>Сир:</a><input class="VTM-list-sir-input"></div>
    </div>
  </div>
<!-- ------------------------------------------------------- -->
<div class="VTM-d-a-attributes-list"><a>Характеристики</a></div>
  <div class="VTM-attributes-list">
    <div class="VTM-physical-list"><a>Физические</a></div>
      <div class="VTM-strength-list"><a>Сила</a></div>
      <div class="VTM-list-strength-input">
        <input class="VTM-strength1-input" type="radio" name="strength1" title="1">
        <input class="VTM-strength2-input" type="radio" name="strength2" title="2">
        <input class="VTM-strength3-input" type="radio" name="strength3" title="3" value="3">
        <input class="VTM-strength4-input" type="radio" name="strength4" title="4">
        <input class="VTM-strength5-input" type="radio" name="strength5" title="5">
      </div>  
      <div class="VTM-dexterity-list"><a>Ловкость</a></div>
      <div class="VTM-list-dexterity-input">
        <input class="VTM-dexterity1-input" type="radio" name="dexterity1" title="1">
        <input class="VTM-dexterity2-input" type="radio" name="dexterity2" title="2">
        <input class="VTM-dexterity3-input" type="radio" name="dexterity3" title="3">
        <input class="VTM-dexterity4-input" type="radio" name="dexterity4" title="4">
        <input class="VTM-dexterity5-input" type="radio" name="dexterity5" title="5">
      </div>  
      <div class="VTM-stamina-list"><a>Выностливость</a></div>
      <div class="VTM-list-stamina-input">
        <input class="VTM-stamina1-input" type="radio" name="stamina1" title="1">
        <input class="VTM-stamina2-input" type="radio" name="stamina2" title="2">
        <input class="VTM-stamina3-input" type="radio" name="stamina3" title="3">
        <input class="VTM-stamina4-input" type="radio" name="stamina4" title="4">
        <input class="VTM-stamina5-input" type="radio" name="stamina5" title="5">
      </div>  
    <div class="VTM-social-list"><a>Социальные</a></div>
    <div class="VTM-charisma-list"><a>Харизма</a></div>
      <div class="VTM-list-charisma-input">
        <input class="VTM-charisma1-input" type="radio" name="charisma1" title="1">
        <input class="VTM-charisma2-input" type="radio" name="charisma2" title="2">
        <input class="VTM-charisma3-input" type="radio" name="charisma3" title="3">
        <input class="VTM-charisma4-input" type="radio" name="charisma4" title="4">
        <input class="VTM-charisma5-input" type="radio" name="charisma5" title="5">
      </div>
      <div class="VTM-manipulation-list"><a>Манипуляция</a></div>
      <div class="VTM-list-manipulation-input">
        <input class="VTM-manipulation1-input" type="radio" name="manipulation1" title="1">
        <input class="VTM-manipulation2-input" type="radio" name="manipulation2" title="2">
        <input class="VTM-manipulation3-input" type="radio" name="manipulation3" title="3">
        <input class="VTM-manipulation4-input" type="radio" name="manipulation4" title="4">
        <input class="VTM-manipulation5-input" type="radio" name="manipulation5" title="5">
      </div>
      <div class="VTM-appearance-list"><a>Привлекательность</a></div>
      <div class="VTM-list-appearance-input">
        <input class="VTM-appearance1-input" type="radio" name="appearance1" title="1">
        <input class="VTM-appearance2-input" type="radio" name="appearance2" title="2">
        <input class="VTM-appearance3-input" type="radio" name="appearance3" title="3">
        <input class="VTM-appearance4-input" type="radio" name="appearance4" title="4">
        <input class="VTM-appearance5-input" type="radio" name="appearance5" title="5">
      </div>
    <div class="VTM-mental-list"><a>Ментальные</a></div>
    <div class="VTM-perception-list"><a>Восприятие</a></div>
      <div class="VTM-list-perception-input">
        <input class="VTM-perception1-input" type="radio" name="perception1" title="1">
        <input class="VTM-perception2-input" type="radio" name="perception2" title="2">
        <input class="VTM-perception3-input" type="radio" name="perception3" title="3">
        <input class="VTM-perception4-input" type="radio" name="perception4" title="4">
        <input class="VTM-perception5-input" type="radio" name="perception5" title="5">
      </div>   
      <div class="VTM-intelligence-list"><a>Интеллект</a></div>
      <div class="VTM-list-intelligence-input">
        <input class="VTM-intelligence1-input" type="radio" name="intelligence1" title="1">
        <input class="VTM-intelligence2-input" type="radio" name="intelligence2" title="2">
        <input class="VTM-intelligence3-input" type="radio" name="intelligence3" title="3">
        <input class="VTM-intelligence4-input" type="radio" name="intelligence4" title="4">
        <input class="VTM-intelligence5-input" type="radio" name="intelligence5" title="5">
      </div>
      <div class="VTM-wits-list"><a>Смекалка</a></div>
      <div class="VTM-list-wits-input">
        <input class="VTM-wits1-input" type="radio" name="wits1" title="1">
        <input class="VTM-wits2-input" type="radio" name="wits2" title="2">
        <input class="VTM-wits3-input" type="radio" name="wits3" title="3">
        <input class="VTM-wits4-input" type="radio" name="wits4" title="4">
        <input class="VTM-wits5-input" type="radio" name="wits5" title="5">
      </div>         
  </div>
</div>

<!-- --------------------------------------------------------- -->
<div class="VTM-d-a-abilities-list"><a>Способности</a></div>
  <div class="VTM-abilities-list">
<!-- -------------------------------------------------------- -->
    <div class="VTM-talents-list"><a>Таланты</a>
      <div class="VTM-athletics-list"><a>Атлетика</a></div>
      <div class="VTM-list-athletics-input">
        <input class="VTM-athletics1-input" type="radio" name="athletics1" title="1">
        <input class="VTM-athletics2-input" type="radio" name="athletics2" title="2">
        <input class="VTM-athletics3-input" type="radio" name="athletics3" title="3">
        <input class="VTM-athletics4-input" type="radio" name="athletics4" title="4">
        <input class="VTM-athletics5-input" type="radio" name="athletics5" title="5">
      </div>
      <div class="VTM-alertness-list"><a>Бдительность</a></div>
        <div class="VTM-list-alertness-input">
        <input class="VTM-alertness1-input" type="radio" name="alertness1" title="1">
        <input class="VTM-alertness2-input" type="radio" name="alertness2" title="2">
        <input class="VTM-alertness3-input" type="radio" name="alertness3" title="3">
        <input class="VTM-alertness4-input" type="radio" name="alertness4" title="4">
        <input class="VTM-alertness5-input" type="radio" name="alertness5" title="5">
      </div>
      <div class="VTM-brawl-list"><a>Драка</a></div>
      <div class="VTM-list-brawl-input">
        <input class="VTM-brawl1-input" type="radio" name="brawl1" title="1">
        <input class="VTM-brawl2-input" type="radio" name="brawl2" title="2">
        <input class="VTM-brawl3-input" type="radio" name="brawl3" title="3">
        <input class="VTM-brawl4-input" type="radio" name="brawl4" title="4">
        <input class="VTM-brawl5-input" type="radio" name="brawl5" title="5">
      </div>
      <div class="VTM-intimidation-list"><a>Запугивание</a></div>
      <div class="VTM-list-intimidation-input">
        <input class="VTM-intimidation1-input" type="radio" name="intimidation1" title="1">
        <input class="VTM-intimidation2-input" type="radio" name="intimidation2" title="2">
        <input class="VTM-intimidation3-input" type="radio" name="intimidation3" title="3">
        <input class="VTM-intimidation4-input" type="radio" name="intimidation4" title="4">
        <input class="VTM-intimidation5-input" type="radio" name="intimidation5" title="5">
      </div>
      <div class="VTM-expression-list"><a>Красноречие</a></div>
      <div class="VTM-list-expression-input">
        <input class="VTM-expression1-input" type="radio" name="expression1" title="1">
        <input class="VTM-expression2-input" type="radio" name="expression2" title="2">
        <input class="VTM-expression3-input" type="radio" name="expression3" title="3">
        <input class="VTM-expression4-input" type="radio" name="expression4" title="4">
        <input class="VTM-expression5-input" type="radio" name="expression5" title="5">
      </div>
      <div class="VTM-leadership-list"><a>Лидерство</a></div>
      <div class="VTM-list-leadership-input">
        <input class="VTM-leadership1-input" type="radio" name="leadership1" title="1">
        <input class="VTM-leadership2-input" type="radio" name="leadership2" title="2">
        <input class="VTM-leadership3-input" type="radio" name="leadership3" title="3">
        <input class="VTM-leadership4-input" type="radio" name="leadership4" title="4">
        <input class="VTM-leadership5-input" type="radio" name="leadership5" title="5">
      </div>
      <div class="VTM-streetwise-list"><a>Знание улиц</a></div>
      <div class="VTM-list-streetwise-input">
        <input class="VTM-streetwise1-input" type="radio" name="streetwise1" title="1">
        <input class="VTM-streetwise2-input" type="radio" name="streetwise2" title="2">
        <input class="VTM-streetwise3-input" type="radio" name="streetwise3" title="3">
        <input class="VTM-streetwise4-input" type="radio" name="streetwise4" title="4">
        <input class="VTM-streetwise5-input" type="radio" name="streetwise5" title="5">
      </div>
      <div class="VTM-subterfuge-list"><a>Хитрость</a></div>
      <div class="VTM-list-subterfuge-input">
        <input class="VTM-subterfuge1-input" type="radio" name="subterfuge1" title="1">
        <input class="VTM-subterfuge2-input" type="radio" name="subterfuge2" title="2">
        <input class="VTM-subterfuge3-input" type="radio" name="subterfuge3" title="3">
        <input class="VTM-subterfuge4-input" type="radio" name="subterfuge4" title="4">
        <input class="VTM-subterfuge5-input" type="radio" name="subterfuge5" title="5">
      </div>
      <div class="VTM-awareness-list"><a>Шестое чувство</a></div>
      <div class="VTM-list-awarennes-input">
        <input class="VTM-awarennes1-input" type="radio" name="awarennes1" title="1">
        <input class="VTM-awarennes2-input" type="radio" name="awarennes2" title="2">
        <input class="VTM-awarennes3-input" type="radio" name="awarennes3" title="3">
        <input class="VTM-awarennes4-input" type="radio" name="awarennes4" title="4">
        <input class="VTM-awarennes5-input" type="radio" name="awarennes5" title="5">
      </div>
      <div class="VTM-empathy-list"><a>Эмпатия</a></div>
      <div class="VTM-list-empathy-input">
        <input class="VTM-empathy1-input" type="radio" name="empathy1" title="1">
        <input class="VTM-empathy2-input" type="radio" name="empathy2" title="2">
        <input class="VTM-empathy3-input" type="radio" name="empathy3" title="3">
        <input class="VTM-empathy4-input" type="radio" name="empathy4" title="4">
        <input class="VTM-empathy5-input" type="radio" name="empathy5" title="5">
      </div>
    </div>

<!-- -------------------------------------------------- --> 
    <div class="VTM-skills-list"><a>Навыки</a></div>
    <div class="VTM-drive-list"><a>Вождение</a></div>
      <div class="VTM-list-drive-input">
        <input class="VTM-drive1-input" type="radio" name="drive1" title="1">
        <input class="VTM-drive2-input" type="radio" name="drive2" title="2">
        <input class="VTM-drive3-input" type="radio" name="drive3" title="3">
        <input class="VTM-drive4-input" type="radio" name="drive4" title="4">
        <input class="VTM-drive5-input" type="radio" name="drive5" title="5">
    </div>
    <div class="VTM-larceny-list"><a>Воровство</a></div>
      <div class="VTM-list-larceny-input">
        <input class="VTM-larceny1-input" type="radio" name="larceny1" title="1">
        <input class="VTM-larceny2-input" type="radio" name="larceny2" title="2">
        <input class="VTM-larceny3-input" type="radio" name="larceny3" title="3">
        <input class="VTM-larceny4-input" type="radio" name="larceny4" title="4">
        <input class="VTM-larceny5-input" type="radio" name="larceny5" title="5">
    </div>
    <div class="VTM-survival-list"><a>Выживание</a></div>
      <div class="VTM-list-survival-input">
        <input class="VTM-survival1-input" type="radio" name="survival1" title="1">
        <input class="VTM-survival2-input" type="radio" name="survival2" title="2">
        <input class="VTM-survival3-input" type="radio" name="survival3" title="3">
        <input class="VTM-survival4-input" type="radio" name="survival4" title="4">
        <input class="VTM-survival5-input" type="radio" name="survival5" title="5">
    </div>
    <div class="VTM-Performance-list"><a>Исполение</a></div>
      <div class="VTM-list-performance-input">
        <input class="VTM-performance1-input" type="radio" name="performance1" title="1">
        <input class="VTM-performance2-input" type="radio" name="performance2" title="2">
        <input class="VTM-performance3-input" type="radio" name="performance3" title="3">
        <input class="VTM-performance4-input" type="radio" name="performance4" title="4">
        <input class="VTM-performance5-input" type="radio" name="performance5" title="5">
    </div>
    <div class="VTM-animalken-list"><a>Знание о животных</a></div>
      <div class="VTM-list-animalken-input">
        <input class="VTM-animalken1-input" type="radio" name="animalken1" title="1">
        <input class="VTM-animalken2-input" type="radio" name="animalken2" title="2">
        <input class="VTM-animalken3-input" type="radio" name="animalken3" title="3">
        <input class="VTM-animalken4-input" type="radio" name="animalken4" title="4">
        <input class="VTM-animalken5-input" type="radio" name="animalken5" title="5">
    </div>
    <div class="VTM-crafts-list"><a>Ремесло</a></div>
      <div class="VTM-list-crafts-input">
        <input class="VTM-crafts1-input" type="radio" name="crafts1" title="1">
        <input class="VTM-crafts2-input" type="radio" name="crafts2" title="2">
        <input class="VTM-crafts3-input" type="radio" name="crafts3" title="3">
        <input class="VTM-crafts4-input" type="radio" name="crafts4" title="4">
        <input class="VTM-crafts5-input" type="radio" name="crafts5" title="5">
      </div>
    <div class="VTM-stealth-list"><a>Скрытность</a></div>
      <div class="VTM-list-stealth-input">
        <input class="VTM-stealth1-input" type="radio" name="stealth1" title="1">
        <input class="VTM-stealth2-input" type="radio" name="stealth2" title="2">
        <input class="VTM-stealth3-input" type="radio" name="stealth3" title="3">
        <input class="VTM-stealth4-input" type="radio" name="stealth4" title="4">
        <input class="VTM-stealth5-input" type="radio" name="stealth5" title="5">
      </div>
    <div class="VTM-firearms-list"><a>Стрельба</a></div>
      <div class="VTM-list-firearms-input">
        <input class="VTM-firearms1-input" type="radio" name="firearms1" title="1">
        <input class="VTM-firearms2-input" type="radio" name="firearms2" title="2">
        <input class="VTM-firearms3-input" type="radio" name="firearms3" title="3">
        <input class="VTM-firearms4-input" type="radio" name="firearms4" title="4">
        <input class="VTM-firearms5-input" type="radio" name="firearms5" title="5">
      </div>
    <div class="VTM-melee-list"><a>Оружие ближнего боя</a></div>
      <div class="VTM-list-melee-input">
        <input class="VTM-melee1-input" type="radio" name="melee1" title="1">
        <input class="VTM-melee2-input" type="radio" name="melee2" title="2">
        <input class="VTM-melee3-input" type="radio" name="melee3" title="3">
        <input class="VTM-melee4-input" type="radio" name="melee4" title="4">
        <input class="VTM-melee5-input" type="radio" name="melee5" title="5">
      </div>
    <div class="VTM-etiquette-list"><a>Этикет</a></div>
      <div class="VTM-list-etiquette-input">
        <input class="VTM-etiquette1-input" type="radio" name="etiquette1" title="1">
        <input class="VTM-etiquette2-input" type="radio" name="etiquette2" title="2">
        <input class="VTM-etiquette3-input" type="radio" name="etiquette3" title="3">
        <input class="VTM-etiquette4-input" type="radio" name="etiquette4" title="4">
        <input class="VTM-etiquette5-input" type="radio" name="etiquette5" title="5">
      </div>

      
   <div class="VTM-knowledges-list"><a>Знания</a></div>
    <div class="VTM-academics-list"><a>Гуманитарные науки</a></div>
      <div class="VTM-list-academics-input">
        <input class="VTM-academics1-input" type="radio" name="academics1" title="1">
        <input class="VTM-academics2-input" type="radio" name="academics2" title="2">
        <input class="VTM-academics3-input" type="radio" name="academics3" title="3">
        <input class="VTM-academics4-input" type="radio" name="academics4" title="4">
        <input class="VTM-academics5-input" type="radio" name="academics5" title="5">
      </div>  
    <div class="VTM-science-list"><a>Естественные науки</a></div>
      <div class="VTM-list-science-input">
        <input class="VTM-science1-input" type="radio" name="science1" title="1">
        <input class="VTM-science2-input" type="radio" name="science2" title="2">
        <input class="VTM-science3-input" type="radio" name="science3" title="3">
        <input class="VTM-science4-input" type="radio" name="science4" title="4">
        <input class="VTM-science5-input" type="radio" name="science5" title="5">
      </div>
    <div class="VTM-law-list"><a>Законы</a></div>
      <div class="VTM-list-law-input">
        <input class="VTM-law1-input" type="radio" name="law1" title="1">
        <input class="VTM-law2-input" type="radio" name="law2" title="2">
        <input class="VTM-law3-input" type="radio" name="law3" title="3">
        <input class="VTM-law4-input" type="radio" name="law4" title="4">
        <input class="VTM-law5-input" type="radio" name="law5" title="5">
      </div> 
    <div class="VTM-computer-list"><a>Информатика</a></div>
      <div class="VTM-list-computer-input">
        <input class="VTM-computer1-input" type="radio" name="computer1" title="1">
        <input class="VTM-computer2-input" type="radio" name="computer2" title="2">
        <input class="VTM-computer3-input" type="radio" name="computer3" title="3">
        <input class="VTM-computer4-input" type="radio" name="computer4" title="4">
        <input class="VTM-computer5-input" type="radio" name="computer5" title="5">
      </div>
    <div class="VTM-medicine-list"><a>Медицина</a></div>
      <div class="VTM-list-medicine-input">
        <input class="VTM-medicine1-input" type="radio" name="medicine1" title="1">
        <input class="VTM-medicine2-input" type="radio" name="medicine2" title="2">
        <input class="VTM-medicine3-input" type="radio" name="medicine3" title="3">
        <input class="VTM-medicine4-input" type="radio" name="medicine4" title="4">
        <input class="VTM-medicine5-input" type="radio" name="medicine5" title="5">
      </div>
    <div class="VTM-occult-list"><a>Оккультизм</a></div>
      <div class="VTM-list-occult-input">
        <input class="VTM-occult1-input" type="radio" name="occult1" title="1">
        <input class="VTM-occult2-input" type="radio" name="occult2" title="2">
        <input class="VTM-occult3-input" type="radio" name="occult3" title="3">
        <input class="VTM-occult4-input" type="radio" name="occult4" title="4">
        <input class="VTM-occult5-input" type="radio" name="occult5" title="5">
      </div>
    <div class="VTM-politics-list"><a>Политика</a></div>
      <div class="VTM-list-politics-input">
        <input class="VTM-politics1-input" type="radio" name="politics1" title="1">
        <input class="VTM-politics2-input" type="radio" name="politics2" title="2">
        <input class="VTM-politics3-input" type="radio" name="politics3" title="3">
        <input class="VTM-politics4-input" type="radio" name="politics4" title="4">
        <input class="VTM-politics5-input" type="radio" name="politics5" title="5">
      </div>
    <div class="VTM-investigation-list"><a>Расследование</a></div>
      <div class="VTM-list-investigation-input">
        <input class="VTM-investigation1-input" type="radio" name="investigation1" title="1">
        <input class="VTM-investigation2-input" type="radio" name="investigation2" title="2">
        <input class="VTM-investigation3-input" type="radio" name="investigation3" title="3">
        <input class="VTM-investigation4-input" type="radio" name="investigation4" title="4">
        <input class="VTM-investigation5-input" type="radio" name="investigation5" title="5">
      </div>
    <div class="VTM-finance-list"><a>Финансы</a></div>
      <div class="VTM-list-finance-input">
        <input class="VTM-finance1-input" type="radio" name="finance1" title="1">
        <input class="VTM-finance2-input" type="radio" name="finance2" title="2">
        <input class="VTM-finance3-input" type="radio" name="finance3" title="3">
        <input class="VTM-finance4-input" type="radio" name="finance4" title="4">
        <input class="VTM-finance5-input" type="radio" name="finance5" title="5">
      </div>
    <div class="VTM-technology-list"><a>Электроника</a></div>
      <div class="VTM-list-technology-input">
        <input class="VTM-technology1-input" type="radio" name="technology1" title="1">
        <input class="VTM-technology2-input" type="radio" name="technology2" title="2">
        <input class="VTM-technology3-input" type="radio" name="technology3" title="3">
        <input class="VTM-technology4-input" type="radio" name="technology4" title="4">
        <input class="VTM-technology5-input" type="radio" name="technology5" title="5">
      </div>
  </div>
</div>

<!-- ---------------------------------- -->

<!-- Блок для скриптов -->
<script scr="/scripts/jquery.js"></script>
<script src="/scripts/main.js"></script>
<script src="/scripts/VTMcreatelist.js"></script>
</body>
</html>