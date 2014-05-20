<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="row">
	    <div class="col-xs-4">
		    <nav class=" navFooter" role="navigation">
		            <?php
		              if (has_nav_menu('primary_navigation')) :
		                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
		              endif;
		            ?>
		    </nav>
		</div>
		<div class="col-xs-8">
			<h3 class="quote">“What you have to do is work with the raw material you have, namely you, and never let up.”  - Helen Gurley Brown</h3>
		</div>
	</div>
 </div>
</footer>

<?php wp_footer(); ?>
