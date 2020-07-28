<?php

register_sidebar();

add_theme_support('post-thumbnails');

function socialButton()
{ ?>
  <div class="tweetButton"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php echo htmlspecialchars(the_title('', '', false)); ?>" data-count="horizontal" data-via="" data-lang="ja"></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
  <div class="likeButton"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&layout=button_count&show_faces=false&width=120&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:120px; height:20px;"></iframe></div>
<?php }

?>