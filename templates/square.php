<article <?php post_class(); ?>>
	<div class="post-square hidden-xs hidden-sm">
		<div class="row">
			<div class="col-sm-6 leftColumn">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<header class="titleBanner">
				   <h2 class="entry-title title hidden-xs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				   <h6 class="entry-title title visible-xs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
				</header>
			</div>
			<div class="col-sm-6 rightColumn">
				<div class="articleText">
					<?php get_template_part('templates/entry-meta'); ?>
					<div class="entry-summary visible-lg">
					  <?php the_excerpt_dynamic(600); ?>
					</div>
					<div class="entry-summary hidden-lg">
					  <?php the_excerpt_dynamic(350); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="post-wide visible-xs visible-sm">
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
