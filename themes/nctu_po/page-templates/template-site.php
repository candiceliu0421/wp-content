<?php
/*
 * Template Name: site
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  
  <meta http-equiv="expires" content="0">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cathe-Control" content="no-cache">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- bootstrap -->
	<link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>


	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

  	
  	<link href="<?php bloginfo('template_url'); ?>/css/site.css" rel="stylesheet">
  	<link href="<?php bloginfo('template_url'); ?>/css/style2.css" rel="stylesheet">
	
</head>
<body> 
<div class="navbar">
  <div class="triangle"></div>
    <img src="<?php bloginfo('template_url'); ?>/image/logo.png" alt="NCTU logo" width="360" height="75" style="position: relative; left: 6%; top: 1.5em;">

    <img src="<?php bloginfo('template_url'); ?>/image/search.png" alt="NCTU logo" width="155" height="30" style="position: relative; left: 40%; top: 1.2em;">

    <img src="<?php bloginfo('template_url'); ?>/image/language.png" alt="NCTU logo" width="135" height="30" style="position: relative; left: 42%; top: 1.5em;">
<div class="top" id="top_1">
  <a href="<?php echo site_url(); ?>/homepage/"><div id="nav1"><div id="navid1">關於本室</div></div></a>
  <div class="navbox1_3">   <!-- 點擊展開出左大梯形 -->
    <div id="navboxw1_3">
      可 查 閱 本 室 簡 介 、 本<br>室 位 置 、 主 任 簡 介 、<br>本 室 願 景 、 組 織 架<br>構 、 人 員 職 掌 及 工 作<br>成 果 等 資 訊
    </div>
      <a href="<?php echo site_url(); ?>/intro/"><div id="navboxw1_3_1">本 室 簡 介<br></div></a>
      <a href="<?php echo site_url(); ?>/site/"><div id="navboxw1_3_2">本 室 位 置<br></div></a>
      <div id="navboxw1_3_3">人 員 職 掌<br></div>
      <a href="<?php echo site_url(); ?>/vision/"><div id="navboxw1_3_4">本 室 願 景<br></div></a>
      <div id="navboxw1_3_5">工 作 成 果</div>
  </div>
  <div class="navbox1_4">   <!-- 點擊展開出右大梯形 -->
  	<section class="cd-horizontal-timeline">
	   <div class="timeline">
		  <div class="events-wrapper">
			 <div class="events">
				<ol>
					<li><a href="#0" data-date="16/01/2014" class="selected">學校地圖</a></li>
					<li><a href="#0" data-date="28/02/2014">Google map</a></li>
					<li><a href="#0" data-date="20/04/2014">聯外交通資訊</a></li>					
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->					
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="16/01/2014">
				<div>	
				   本室位於<br>交通大學光復校區<br>行政大樓 二樓
           <div class="container">
            <div id ="gallery">
              <div class="img_wrapper">
                <div class="img" id="images" style="background-image: url(<?php bloginfo('template_url')?>/image/map.png);">
                
                </div>              
             </div>            
            </div>
           </div>
				</div>
			</li>

			<li data-date="28/02/2014">
				<div>	
           本室位於<br>交通大學光復校區<br>行政大樓 二樓
					 <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="position: absolute; left: 20vw;" src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=30010新竹市東區大學路1001號&z=16&output=embed&t=></iframe>
				</div>
			</li>

			<li data-date="20/04/2014">
				<div>	
					本室位於<br>交通大學光復校區<br>行政大樓 二樓
          <br><br>
          自行開車
          <br>
          <br>
          大眾運輸
          
          <!-- 交通資訊 -->
            <p id="s1" style="position: absolute; top: 23%; left:17%;">南下</p>
            <p id="s1_1" style="position: absolute; top: 0; left: 30%;">
               中山高速公路南下:<br>
               台北&rarr;中壢&rarr;新竹交流道(靠右)&rarr;(左轉入)大學路(加油站旁)&rarr;交通大學光復校區
               <br><br>
               第二高速公路南下:<br>
               台北&rarr;關西&rarr;新竹系統交流道&rarr;中山高北上(往台北方向)&rarr;新竹交流道(左彎往新竹市區方向)&rarr;經光復路(高速公路下)&rarr;(左轉入)大學路(加油站旁)&rarr;交通大學光復校區
            </p>
            <p id="s2" style="position: absolute; top: 29%; left:17%;">北上</p>
            <p id="s2_1" style="position: absolute; top: 0; left: 30%;">
               中山高速公路北上:<br>
               1.台中&rarr;中山高北上(往台北方向)&rarr;新竹交流道(左彎往新竹市區方向)&rarr;經光復路(高速公路下)&rarr;(左轉入)大學路(加油站旁)&rarr;交通大學光復校區
               <br>
               2.台中&rarr;中山高北上(往台北方向)&rarr;科學園區交流道(左彎)&rarr;園區二路(左彎)&rarr;新安路&rarr;交通大學光復校區
               <br><br>
               第二高速公路北上:請於新竹系統處轉接中山高速公路，後續請參考「中山高速公路北上」走法。<br>
               備註:新竹交流道以集散道路連結為-複合式之交流道，南下車輛由交流道南下出口駛出後，依序有公道五、光復路、新竹科學園區出口，請由光復路出口右前方轉入大學路抵達交通大學
               
            </p>
            <p id="s3" style="position: absolute; top: 35%; left:17%;">高鐵</p>
            <p id="s3_1" style="position: absolute; top: 0; left: 30%;">
               抵高鐵新竹站後，可選擇下列方式轉運至交通大學光復校區。<br><br>
               1.計程車<br>
               2.科學園區接駁巴士:於1號月台搭乘橘線科學園區接駁巴士<br>抵達科技生活館後<br>轉搭紅線科學園區接駁巴士，即可抵達交通大學
               <br><br>
               3.公車:於2號月台搭乘新竹客運前往火車站後<br>再轉搭市內公車至交通大學。
            </p>
            <p id="s4" style="position: absolute; top: 41%; left:17%;">台鐵</p>
            <p id="s4_1" style="position: absolute; top: 0; left: 30%;">
               抵高鐵新竹站後，可選擇下列方式轉運至交通大學光復校區。<br><br>
               1.計程車<br>
               2.公車:步行至站前民族路上之公車總站轉搭
               <br><br>
               1路市區公車(約10至15分鐘一班):<br>
               (火車站&rarr;過溝)<br>
               2路市區公車(約60分鐘一班):<br>
               (火車站&rarr;交通大學)
            </p>
            <p id="s5" style="position: absolute; top: 47%; left:17%;">客運</p>
            <p id="s5_1" style="position: absolute; top: 0; left: 30%;">
               搭乘火車抵達新竹火車站，可選擇下列方式轉運至交通大學光復校區。<br><br>
               1.計程車<br>
               2.公車:步行至站前民族路上之公車總站轉搭
               <br><br>
               1路市區公車(約10至15分鐘一班):<br>
               (火車站&rarr;過溝)<br>
               2路市區公車(約60分鐘一班):<br>
               (火車站&rarr;交通大學)
            </p>
				</div>
			</li>			
		</ol>
	</div> <!-- .events-content -->
</section>

   	  	
  </div>
</div>

<div class="top" id="top_2">
  <div id="nav2">
    <div id="navid2">訊息公告</div>
  </div>
  <div class="navbox2"></div>
  <div class="navbox2_2"></div>
</div>
<div class="top" id="top_3">
  <div id="nav3">
    <div id="navid3">法令&表格</div>
  </div>
  <div class="navbox3"></div>
  <div class="navbox3_2"></div>
</div>
<div class="top" id="top_4">
  <div id="nav4">
    <div id="navid4_1">人事業務標準</div>
    <div id="navid4_2">作業流程</div>
  </div>
  <div class="navbox4"></div>
  <div class="navbox4_2"></div>
</div>
<div class="top" id="top_5">
  <div id="nav5">
    <div id="navid5_1">公務員廉政</div>
    <div id="navid5_2">倫理規範</div>
  </div>
  <div class="navbox5"></div>
  <div class="navbox5_2"></div>
</div>
<div class="top" id="top_6">
  <div id="nav6">
    <div id="navid6">出勤卡鐘位置</div>
  </div>
  <div class="navbox6"></div>
  <div class="navbox6_2"></div>
</div>
<div class="top" id="top_7">
  <div id="nav7">
    <div id="navid7">留言版</div>
  </div>
  <div class="navbox7"></div>
  <div class="navbox7_2"></div>
</div>
<div class="hp-img_wrapper">
  <div class="bgd" style="background-image: url(<?php bloginfo('template_url'); ?>/image/picture.jpg");">
  </div>
</div>
</div>
<div class="footer">
  <img src="<?php bloginfo('template_url'); ?>/image/footer.png" alt="footer" width="100%" style="position: fixed; bottom: 0; left: 0;">
</div>


	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js'></script>

    <script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>

</body>

<script type="text/javascript">
  $(document).ready(function() { 
  var img = $(this),t = true;//當t為true時，是正常狀態下的
  $("#images").click(function() {
    if(t) {
        t = false;
        imgH = $(this).height(800);
        imgW = $(this).width(800);
    } else {
        t = true;
        imgH = $(this).height(400);
        imgW = $(this).width(400);
    }
  });
});

  


</script>
</html>