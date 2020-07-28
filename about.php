<?php
/*
Template Name:about
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
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/about.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="about">
  <?php get_template_part('layouts/header') ?>
  <div class="sub-header">
    <div class="content">
      <h1>組織概要</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="left-content sidebar">
        <nav class="sidebar-nav">
          <ul>
            <li>
              <a href="#ideal" class="nav-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                経営理念
              </a>
            </li>
            <li>
              <a href="#aboutus" class="nav-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                会社情報
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="right-content main">
        <div class="box box-large" id="ideal">
          <div class="title-back">
            <h2 class="title">経営理念</h2>
          </div>
          <div class="box-content" align="center">
            <div class="motto">
              バナナを食べるくらいならバナナになれ。
            </div>
            <p>
              私達は普段良くバナナを口にしています。
              <br>
              食べていることすら忘れるくらいに、バナナは私達の生活にとけ込んでいるのです。
              <br>
              偉大な大工は、誰も見ないからといって、床裏にひどい木材を使ったりはしません。
              <br>
              我々もそれと同じように、誰も知ろうとしないからといって、バナナを育てる土や環境をないがしろにはしません。
              <br>
              バナナデザイン株式会社は今までも、そしてこれからもその身に日の光を一杯にうけ育ち続けるでしょう。
              <br>
              温室でそだったバナナが、世界に凹みをいれるその日まで。
            </p>
          </div>
        </div>
        <div class="box box-large" id="aboutus">
          <div class="title-back">
            <h2 class="title">会社情報</h2>
          </div>
          <div class="box-content">
            <table>
              <tr>
                <th>設立</th>
                <td>平成26年10月1日</td>
              </tr>
              <tr>
                <th>資本金</th>
                <td>10,000,000円</td>
              </tr>
              <tr>
                <th>役員</th>
                <td>代表取締役：猿野昇　取締役：犬飼吠</td>
              </tr>
              <tr>
                <th>従業員</th>
                <td>10名(キジ含む)</td>
              </tr>
              <tr>
                <th>取引銀行</th>
                <td>鬼が島銀行</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>クリエイティブ事業</td>
              </tr>
              <tr>
                <th>パートナー</th>
                <td>株式会社パインシステムズ</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
