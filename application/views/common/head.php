<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title><?=$data['title']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap-css -->
<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>" >
<!-- //bootstrap-css -->

<!-- Custom CSS -->
<link href="<?=base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?=base_url('assets/css/style-responsive.css');?>" rel="stylesheet"/>

<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url('assets/css/font.css')?>" type="text/css"/>
<link href="<?=base_url('assets/css/font-awesome.css');?>" rel="stylesheet"> 

<!-- calendar -->
<link rel="stylesheet" href="<?=base_url('assets/css/monthly.css');?>">
<!-- //calendar -->
	<?php if (isset($data['hasCharts'])): ?>
		<link rel="stylesheet" href="<?=base_url('assets/css/morris.css');?>" type="text/css"/>
		<script src="<?=base_url('assets/js/jquery2.0.3.min.js');?>"></script>
		<script src="<?=base_url('assets/js/raphael-min.js');?>"></script>
		<script src="<?=base_url('assets/js/morris.js');?>"></script>
	<?php endif ?>

	<?php if (isset($data['hasVmap'])): ?>
		<link href="<?=base_url('assets/css/jqvmap.css');?>" media="screen" rel="stylesheet" type="text/css"/>
	<?php endif ?>
	
</head>

<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->