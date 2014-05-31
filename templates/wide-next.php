<article <?php post_class(); ?>>
	<div class="post-wide">
		<a href="<?php get_permalink($next_post_id); ?>"><?php get_the_post_thumbnail($next_post_id); ?></a>
		<header class="titleBanner">
		   <h2 class="entry-title title"><a href="<?php get_the_permalink($next_post_id); ?>"><?php get_the_title($next_post_id); ?></a></h2>
		</header>
		<div class="articleText">
			<?php get_template_part('templates/entry-meta'); ?>
			<div class="entry-summary">
			  <?php the_excerpt_dynamic(350); ?>
			</div>
		</div>
	</div>
</article>