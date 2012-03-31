<?php

function tm_enqueue_styles() {
	wp_enqueue_style('tm_style', get_stylesheet_directory_uri() . '/style.css');
}

function tm_body_classes($classes) {
	if(is_home()) {
		$classes[] = 'home';
	}
	return $classes;
}

function tm_show_sidebars($show) {
	return is_home() ? false : $show;
}

function footer_scripts(){ ?>
<!-- All -->
<script>(function(d, s) {
  var js, fjs = d.getElementsByTagName(s)[0], load = function(url, id) {
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.src = url; js.id = id;
    fjs.parentNode.insertBefore(js, fjs);
  };
  load('//connect.facebook.net/en_US/all.js#xfbml=1', 'fbjssdk');
  load('https://apis.google.com/js/plusone.js', 'gplus1js');
  load('//platform.twitter.com/widgets.js', 'tweetjs');
}(document, 'script'));
</script> 

<!-- Facebook Aditional -->
  <div id="fb-root"></div>
<?php }

function footer_attrb_cp() {
  # It's not a good idea to remove this.
  echo '<p id="copyright"> &copy; 2010 - ' . date("Y") . '&nbsp;' . get_bloginfo('name') . '. All words are belong to me.</p>';
  echo '<p id="attrb"> <a href="http://www.kingsidharth.com/ks1203">ks1203</a> for <a href="http://wordpress.org">WordPress</a> & <a href="http://www.64notes.com/thesis" rel="nofollow">Thesis</a>.';
}
