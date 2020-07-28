<?php
/*
Template Name:service
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/dlmenu.css">
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/service.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="service">
  <?php get_template_part('layouts/header') ?>
  <div class="sub-header">
    <div class="content">
      <h1>事業内容</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="left-content sidebar">
        <nav class="sidebar-nav">
          <ul>
            <li>
              <a href="#service-info" class="nav-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                事業内容
              </a>
            </li>
          </ul>
      </div>
      <div class="right-content main">
        <div class="box box-large" id="service-info">
          <div class="title-back">
            <h2 class="title">事業内容</h2>
          </div>
          <div class="box-content">
            <h3>おもなサービス</h3>
            <div class="media">
              <div class="image">
                <img src="<?php bloginfo('template_url'); ?>/img/service.png">
              </div>
              <div class="media-content">
                <div class="service-name">
                  BANANA
                </div>
                <p>
                  BANANAは我社が展開するファッションブランド。
                  <br>
                  バナナのグッズも多数販売してります。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
