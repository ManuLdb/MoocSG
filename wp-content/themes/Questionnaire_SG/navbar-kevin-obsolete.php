	<nav class="navbar navbar-default">
	  <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".Navigation_mobile_tablette" aria-expanded="false">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	   </div>
	   <div class="collapse navbar-collapse Navigation_mobile_tablette">
	<?php $defaults = array(
		'theme_location' == '',
		'menu' == 'menu_SG',
		'container' == '',
		'container_class' == "navbar navbar-default",
		'container_id' == '',
		'menu_class' == 'menu',
		'menu_id' == '',
		'echo' == true,
		'fallback_cb' == 'wp_page_menu',
		'before' == '',
		'after' == '',
		'link_before' == '',
		'link_after' == '',
		'items_wrap' == '<ul class="nav navbar-nav">%3$s</ul>',
		'depth' == '',
		'walker' == ''
		);
		wp_nav_menu($defaults);
	?> 
	</div>
	</nav>