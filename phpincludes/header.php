<?php
	  echo '<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Intranetportal</title>';
	   if ($thisPage == "home") echo '<link rel="stylesheet" href="./css/main.css">';
	   else
		   echo '<link rel="stylesheet" href="../css/main.css">';
	   echo '</head>
    <body>
									
  <div id = "wrapper">
	  <div id="header">
					<!--Title-->	
		<div class="titel"><a name="top">Intranet<span>portal</span></a>
		<!--Weatherwidget-->
		<div class="Weatherwidget"><a href="//ibooked.de/weather/Oensingen-w498787" title="Wetter Niederbipp"><img src="//w.bookcdn.com/weather/picture/26_w498787_1_2_3498db_250_2980b9_ffffff_ffffff_1_2071c9_ffffff_0_3.png?scode=124&domid=w209" /></a></div>
</div></div>';
		?>