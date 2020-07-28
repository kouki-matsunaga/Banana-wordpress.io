<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/dlmenu.css">
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/blog.css">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/single.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="single">
  <?php get_template_part('layouts/header') ?>
  <div class="sub-header">
    <div class="content">
      <h1>ブログ</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="top-word" align="center">
        <img src="<?php bloginfo('template_url'); ?>/img/quo1.png">
        バナナを食べるくらいならバナナになれ！
        <img src="<?php bloginfo('template_url'); ?>/img/quo2.png">
      </div>
      <div class="blog-content">
        <div class="left-content">
          <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <div class="box box-large">
              <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
              <div class="date-back">
                <div class="date"><?php echo get_the_date('Y/n/j'); ?></div>
              </div>
              <div class="blog-inner">
                <div class="title">
                  <?php the_title(); ?>
                </div>
                <span class="category-link">
                  <?php the_category('｜') ?>
                </span>
                <div class="twitter-facebook">
                  <?php socialButton(); ?>
                </div>
                <div class="clear"></div>
                <div class="blog-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                </div>
                <p class="text">
                  <?php echo get_the_content(); ?>
                </p>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="right-content">
          <?php dynamic_sidebar(); ?>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <?php the_post_navigation([
    'prev_text' => '&lt; 前の投稿',
    'next_text' => '後の投稿 &gt;',
    'in_same_term' => true,
    // 'excluded_terms' => [],
    // 'taxonomy' => 'category'
  ]); ?>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
