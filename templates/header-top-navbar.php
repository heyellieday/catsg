<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <header class="banner navbar" role="banner">
          <a href="/"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/cityandthesinglegirl.png"></a>

          <nav class=" navLinks visible-sm" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav small'));
              endif;
            ?>
          </nav>
          <nav class=" navLinks hidden-sm" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
              endif;
            ?>
          </nav>
          <div class="welcome">
            <p>
                “Good girls go to Heaven. Bad girls go everywhere.” At least, that was the thought of the legendary <a href="http://en.wikipedia.org/wiki/Helen_Gurley_Brown">Helen Gurley Brown</a>. In 1962, the late Helen Gurley Brown authored the original bible for Cosmo girls everywhere, <a href="http://www.amazon.com/Sex-The-Single-Girl-Classics/dp/1569802521">Sex and the Single Girl</a>. In short, the book told single women how they could have it all: the career, the clothes and the sex. This summer, I’m interning at <a href="http://www.cosmopolitan.com/">Cosmopolitan</a>, where Helen Gurley Brown reigned as Editor-in-Chief for 32 years. Instead of creating a generic blog about my NYC experience, I wanted to write something that incorporated the wisdom of my favorite book. So, what follows are the experiences of a single girl in the city, living by the rules of HGB. Enjoy. 

            </p>
          </div>
      </header>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
