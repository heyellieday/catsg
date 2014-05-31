<?php
/*
Template Name: Beginning
*/
?>

<?php $args = array(
	'posts_per_page'   => 100,
	'offset'           => 0,
	'category'         => '',
	'orderby'          => 'post_date',
	'order'            => 'ASC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true ); ?>

<?php 
	$posts_array = get_posts( $args );
	global $wp_query;
 ?> 

<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endforeach; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <ul class="pager">
          <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
          <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
        </ul>
      </div>
    </div>
  </nav>
<?php endif; ?>
