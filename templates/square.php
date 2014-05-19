<article <?php post_class(); ?>>
	<div class="post-square">
		<div class="row">
			<div class="col-xs-6 leftColumn">
				<?php the_post_thumbnail(); ?>
				<header class="titleBanner">
				   <h2 class="entry-title title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</header>
			</div>
			<div class="col-xs-6 rightColumn">
				<div class="articleText">
					<?php get_template_part('templates/entry-meta'); ?>
					<div class="entry-summary">
					  <?php the_excerpt(); ?>
					</div>
				</div>
			</div>
	</div>
</article>