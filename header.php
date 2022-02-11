<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="private">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Phone Market</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/Ajax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://unpkg.com/vue"></script>
  <?php wp_head(); ?>  
</head>
<body>

	<header>
	  <div class="container pt-5">
		<nav class="header-block row justify-content-center">

		<div class="header-block col-xxl-4 col-xl-5 col-lg-4 col-md-10 col-sm-10">
			<h1 class="hedrblocktext">PhoneSX</h1>
			<div>
			<h1 class="headertext mt-5">МАГАЗИН СОТОВОЙ СВЯЗИ</h1>
		    <p class="headerstroka mt-5">Комплексное решение ваших задач</p>
		    </div>
		</div>
        
        <div class="header-block col-xxl-5 col-xl-5 col-lg-4 col-md-10 col-sm-10">
		<img class="header-block-img" src="<?php bloginfo('template_directory'); ?>/assets/img/PhoneRuka.png" alt="">
		</div>

       </nav>
      </div> 
	</header>