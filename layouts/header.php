<nav class="top-nav <?php if( is_page( array('about','service')) || is_home() || is_single() || is_category() )  { echo 'shadow'; }else{} ?>">
  <ul class="content">
    <li class="logo">
      <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
    </li>
    <li class="list-border"></li>
    <li>
      <a href="<?php bloginfo('url'); ?>" class="home nav-link <?php if ( is_page('top') ) { echo 'active'; } ?>">ホーム</a>
    </li>
    <li class="list-border"></li>
    <li>
      <a href="<?php bloginfo('url'); ?>/about" class="about nav-link <?php if ( is_page('about') ) { echo 'active'; } ?>">組織概要</a>
    </li>
    <li class="list-border"></li>
    <li>
      <a href="<?php bloginfo('url'); ?>/service" class="service nav-link <?php if ( is_page('service') ) { echo 'active'; } ?>">事業内容</a>
    </li>
    <li class="list-border"></li>
    <li>
      <a href="<?php bloginfo('url'); ?>/blog" class="blog nav-link <?php if ( is_home() || is_single() || is_category() ) { echo 'active'; } ?>">ブログ</a>
    </li>
    <li class="list-border"></li>
    <li>
      <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">
          <li>
            <a href="<?php bloginfo('url'); ?>" class="home dl-link <?php if ( is_page('top') ) { echo 'active'; } ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php bloginfo('url'); ?>/about" class="about dl-link <?php if ( is_page('about') ) { echo 'active'; } ?>">組織概要</a>
          </li>
          <li>
            <a href="<?php bloginfo('url'); ?>/service" class="service dl-link <?php if ( is_page('service') ) { echo 'active'; } ?>">事業内容</a>
          </li>
          <li>
            <a href="<?php bloginfo('url'); ?>/blog" class="blog dl-link <?php if ( is_home() || is_single() || is_category() ) { echo 'active'; } ?>">ブログ</a>
          </li>
        </ul>
      </div>
    </li>
    <div class="clear"></div>
  </ul>
</nav>