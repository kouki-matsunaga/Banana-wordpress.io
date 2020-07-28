<?php
/*
Template Name:top
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
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/top.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="top">
  <div class="top-head">
    <div class="content">
      <h1>Banana Design</h1>
    </div>
  </div>
  <?php get_template_part('layouts/header') ?>
  <div class="main-content">
    <div class="content">
      <div class="left-content">
        <div class="box box-large newsfeed">
          <div class="title-back">
            <h2 class="title">ニュースフィード</h2>
          </div>
          <div class="box-content">
            <ul>
              <?php
                global $post;
                $args = array( 'posts_per_page' => 20 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) {
                    setup_postdata($post);
                    ?>
                    <li>
                      <span class="date"><?php echo get_the_date(); ?></span>
                      <span class="category"><?php the_category('｜') ?></span>
                      <a href="<?php the_permalink(); ?>" class="text">
                        <?php the_title(); ?>
                      </a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
        <div class="box box-small about">
          <div class="title-back">
            <h3 class="title">バナナとは？</h2>
          </div>
          <div class="box-content">
            <img src="<?php bloginfo('template_url'); ?>/img/top1.png">
            <p>バナナとは"バナナを食べるくらいならバナナになれ。"をモットーにバナナで世界に凹みをいれるその日まで戦い続ける組織である。</p>
          </div>
        </div>
        <div class="box box-small service">
          <div class="title-back">
            <h3 class="title">サービス</h2>
          </div>
          <div class="box-content">
            <img src="<?php bloginfo('template_url'); ?>/img/top2.png">
            <p>バナナではあらゆるクリエイティブ事業に挑戦しています。</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="right-content">
        <div class="ad">
          <img src="<?php bloginfo('template_url'); ?>/img/right1.jpg">
        </div>
        <div class="ad">
          <img src="<?php bloginfo('template_url'); ?>/img/right2.jpg">
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
