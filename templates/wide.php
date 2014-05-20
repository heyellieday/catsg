<article <?php post_class(); ?>>
	<div class="post-wide">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<header class="titleBanner">
		   <h2 class="entry-title title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="articleText">
			<?php get_template_part('templates/entry-meta'); ?>
			<div class="entry-summary">
			  <?php the_excerpt_dynamic(350); ?>
			</div>
		</div>
	</div>
</article>