<?php
/*
 * Template Name: homepage
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewpoint" content="width=device-width, initial-scale=1" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

<link href="<?php bloginfo('template_url'); ?>/css/homepage.css" rel="stylesheet">

  <style type="text/css"></style>
</head>
<body>
<div class="navbar">
  <div class="triangle"></div>
    <img src="<?php bloginfo('template_url'); ?>/image/logo.png" alt="NCTU logo" width="360" height="75" style="position: relative; left: 6%; top: 1.5em;">

    <img src="<?php bloginfo('template_url'); ?>/image/search.png" alt="NCTU logo" width="155" height="30" style="position: relative; left: 40%; top: 1.2em;">

    <img src="<?php bloginfo('template_url'); ?>/image/language.png" alt="NCTU logo" width="135" height="30" style="position: relative; left: 42%; top: 1.5em;">

    <div id="parallelogram">
      <ul>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
    </ul> 
    </div>
      <div id="content">
        <div id="nav" style="position: absolute; margin-left: 15%; top: 65%; font-size: 1.3em;">本室簡介</div>
        <div id="nav" style="position: absolute; margin-left: 27%; top: 65%; font-size: 1.3em;">訊息公告</div>
        <div id="nav" style="position: absolute; margin-left: 39%; top: 65%; font-size: 1.3em;">法令&表格</div>
        <div id="nav" style="position: absolute; margin-left: 50%; top: 65%; font-size: 1.3em;">人事業務標準</div>
        <div id="nav" style="position: absolute; margin-left: 51%; top: 80%; font-size: 1.3em;">作業流程</div>
        <div id="nav" style="position: absolute; margin-left: 63%; top: 65%; font-size: 1.3em;">公務員廉政</div>
        <div id="nav" style="position: absolute; margin-left: 63.5%; top: 80%; font-size: 1.3em;">倫理規範</div>
        <div id="nav" style="position: absolute; margin-left: 73.5%; top: 65%; font-size: 1.3em;">出勤卡鐘位置</div>
        <div id="nav" style="position: absolute; margin-left: 86%; top: 65%; font-size: 1.3em;">留言板</div>

      </div>

<div class="line"></div>

  <img src="<?php bloginfo('template_url'); ?>/image/picture.jpg" alt="background" width="100%" height="375" style="position: relative; top: 2em; z-index: 0;">
<!-- 左欄box -->
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
<!-- 左欄文字 -->
<div id="left_words">
  <div id ="left" style="position: absolute; top: 110%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 動態</div>
  <div id ="left" style="position: absolute; top: 130%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 行事曆</div>
  <div id ="left" style="position: absolute; top: 175%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 工作</div>
  <div id ="left" style="position: absolute; top: 195%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 成果</div>
  <div id ="left" style="position: absolute; top: 240%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 加保</div>
  <div id ="left" style="position: absolute; top: 260%; left: 3%; font-size: 2.0em; z-index: 5; font-weight: 500; color:  #040000;"> 人數</div>
  <div id ="left" style="position: absolute; top: 262%; left: 9%; font-size: 1.7em; z-index: 5; font-weight: 500; color:  #040000;"> 4,876人</div>
</div>

<!-- 右欄box -->
<div class="rightbox">
  <div class="first"></div>
  <div class="first_hover"></div>
  <div class="second"></div>
  <div class="second_hover"></div>
  <div class="third"></div>
  <div class="third_hover"></div>
  <div class="fourth"></div>
  <div class="fourth_hover"></div>
  <div class="fifth"></div>
  <div class="fifth_hover"></div>
</div>

<div id = "right_words">
  <div id = "right" style="position: absolute; top: 110%; right: 4%; font-size: 1.8em; z-index: 5; font-weight: 500; color:#FFFFFF; "> 一 般 訊 息</div>
  <div id = "right" style="position: absolute; top: 150%; right: 4%; font-size: 1.8em; z-index: 5; font-weight: 500; color:#FFFFFF; "> 活 動 訊 息</div>
  <div id = "right" style="position: absolute; top: 188%; right: 4%; font-size: 1.8em; z-index: 5; font-weight: 500; color:#FFFFFF; "> 法 規 訊 息</div>
  <div id = "right" style="position: absolute; top: 225%; right: 4%; font-size: 1.8em; z-index: 5; font-weight: 500; color:#FFFFFF; "> 友 校 訊 息</div>
  <div id = "right" style="position: absolute; top: 265%; right: 4%; font-size: 1.8em; z-index: 5; font-weight: 500; color:#FFFFFF; "> 業 務 訊 息</div>
</div>
  

<div class="line2"></div>
  <!-- 下方7個圖示 -->
<div class="img1">
  <img src="<?php bloginfo('template_url'); ?>/image/01.png" class="01" alt="01" width="52%" height="47%" style=" left: 25%; top: 12%; position: relative; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text1">
    <p>適用勞基法</p>
    <p>專區</p>
  </div>
</div>
<div class="img2">
  <img src="<?php bloginfo('template_url'); ?>/image/02.png" alt="02" width="52%" height="47%" style=" position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text2">
    <p>外籍教職員</p>
    <p>專區</p>
  </div>
</div>
<div class="img3">
  <img src="<?php bloginfo('template_url'); ?>/image/03.png" alt="03" width="52%" height="47%" style="position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text3">
    <p>兼任教師</p>
    <p>專區</p>
  </div>
</div>
<div class="img4">
  <img src="<?php bloginfo('template_url'); ?>/image/04.png" alt="04" width="52%" height="47%" style=" position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text4">
    <p>學習與勞動</p>
    <p>權益專區</p>
  </div>
</div>
<div class="img5">
  <img src="<?php bloginfo('template_url'); ?>/image/05.png" alt="05" width="52%" height="47%" style=" position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text5">
    <p>教師升等</p>
    <p>專區</p>
  </div>
</div>
<div class="img6">
  <img src="<?php bloginfo('template_url'); ?>/image/06.png" alt="06" width="52%" height="47%" style=" position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text6">
    <p>退休專區</p>
  </div>
</div>
<div class="img7">
  <img src="<?php bloginfo('template_url'); ?>/image/07.png" alt="07" width="52%" height="47%" style=" position: relative; top: 12%; left: 25%; filter: drop-shadow(4px 2px 15px rgba(0, 0, 0, 0.9));">
  <div class="text7">
    <p>福利專區</p>
  </div>
    <p style="top: 77%; left: 20%; position: absolute;">含自強康樂委員會</p>
</div>

<!-- 下方圖示字 -->
<!-- <div id="down_words">
  <div id = "down" style="position: absolute; top: 355%; left: 5.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 適用勞基法</div>
  <div id = "down" style="position: absolute; top: 367%; left: 5.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 19.0%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 外籍教職員</div>
  <div id = "down" style="position: absolute; top: 367%; left: 19.0%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 33.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 兼任教師</div>
  <div id = "down" style="position: absolute; top: 367%; left: 33.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 47.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 學習與勞動</div>
  <div id = "down" style="position: absolute; top: 367%; left: 47.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 權益專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 61.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 教師升等</div>
  <div id = "down" style="position: absolute; top: 367%; left: 61.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 74.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 退休專區</div>
  <div id = "down" style="position: absolute; top: 355%; left: 87.5%; font-size: 1.5em; z-index: 5; font-weight: 500; color:#040000; "> 福利專區</div>
  <div id = "down" style="position: absolute; top: 367%; left: 87.5%; font-size: 1.0em; z-index: 5; font-weight: 500; color:#040000; "> 含自強康樂委員會</div>

</div> -->

<div class="line3"></div>


<div class="footer">
  <img src="<?php bloginfo('template_url'); ?>/image/left.png" alt="footer" width="3.5%" style="position: fixed; bottom: 4%; left: 0;">
  <img src="<?php bloginfo('template_url'); ?>/image/right.png" alt="footer" width="3.5%" style="position: fixed; bottom: 4%; right: 0;">
  <img src="<?php bloginfo('template_url'); ?>/image/footer.png" alt="footer" width="100%" style="position: fixed; bottom: 0; left: 0;">
</div>

<?php get_template_part('includes/footer'); ?>
</body>
</html>