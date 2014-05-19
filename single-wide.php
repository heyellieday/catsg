<?php
/*
Single Post Template: Wide
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="post-wide">
    <?php the_post_thumbnail(); ?>
    <header class="titleBanner">
       <h2 class="entry-title title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="articleText">
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="entry-summary">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
<?php endwhile; ?>