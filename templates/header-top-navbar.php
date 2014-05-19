<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <header class="banner navbar" role="banner">
          <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/cityandthesinglegirl.png">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <nav class="collapse navbar-collapse navLinks" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
              endif;
            ?>
          </nav>
      </header>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
