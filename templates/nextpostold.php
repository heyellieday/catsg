<?php $next_post = get_next_post();
$next_post_id = $next_post->ID;
$next_post_title = $next_post ->post_title;
$next_post_permalink = get_the_permalink($next_post->ID);
$next_post_thumbnail = get_the_post_thumbnail($next_post->ID);
if (!empty( $next_post )): ?>
  <?php $templateNext = get_post_meta( $next_post_id, '_wp_post_template', true ); ?>
	<div class="row">
	  <div class="col-sm-8 col-sm-offset-2 <?php echo $templateNext?>">
	  	<?php if ($templateNext == "single-square.php") { ?>
	  	<article <?php post_class(); ?>>
			<div class="post-square hidden-xs hidden-sm">
				<div class="row">
					<div class="col-sm-6 leftColumn">
						<a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_thumbnail; ?></a>
						<header class="titleBanner">
						   <h2 class="entry-title title hidden-xs"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h2>
						   <h6 class="entry-title title visible-xs"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h6>
						</header>
					</div>
					<div class="col-sm-6 rightColumn">
						<div class="articleText">
							<?php get_template_part('templates/entry-meta'); ?>
							<div class="entry-summary visible-lg">
							  <?php the_excerpt_dynamic_next(600, $next_post); ?>
							</div>
							<div class="entry-summary hidden-lg">
							  <?php the_excerpt_dynamic_next(350, $next_post); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="post-wide visible-xs visible-sm">
				<a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_thumbnail; ?></a>
				<header class="titleBanner">
				   <h2 class="entry-title title"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h2>
				</header>
				<div class="articleText">
					<?php get_template_part('templates/entry-meta'); ?>
					<div class="entry-summary">
					  <?php the_excerpt_dynamic_next(350, $next_post); ?>
					</div>
				</div>
			</div>
		</article> 	
	  	 
	  	 <?php

	  	} elseif ($templateNext == "single-wide.php") { ?>

	  	<article <?php post_class(); ?>>
			<div class="post-wide">
				<a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_thumbnail; ?></a>
				<header class="titleBanner">
				   <h2 class="entry-title title"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h2>
				</header>
				<div class="articleText">
					<?php get_template_part('templates/entry-meta'); ?>
					<div class="entry-summary">
					  <?php the_excerpt_dynamic_next(350, $next_post); ?>
					</div>
				</div>
			</div>
		</article>

	  	
	  	<?php

	  	} elseif ($templateNext == "single-tall.php") { ?> 
	  		<article <?php post_class(); ?>>
				<div class="post-tall hidden-xs hidden-sm">
					<div class="row">
						<div class="col-sm-6 leftColumn">
							<div class="articleText">
								<?php get_template_part('templates/entry-meta'); ?>
								<div class="entry-summary visible-lg">
								  <?php the_excerpt_dynamic_next(1000, $next_post); ?>
								</div>
								<div class="entry-summary hidden-lg">
								  <?php the_excerpt_dynamic_next(600, $next_post); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 rightColumn">
							<a href="<?php echo $next_post_permalink;?>"><?php echo $next_post_thumbnail; ?></a>
							<header class="titleBanner">
							   <h2 class="entry-title title"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h2>
							</header>
						</div>
					</div>
				</div>
				<div class="post-wide visible-xs visible-sm">
					<a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_thumbnail; ?></a>
					<header class="titleBanner">
					   <h2 class="entry-title title"><a href="<?php echo $next_post_permalink; ?>"><?php echo $next_post_title; ?></a></h2>
					</header>
					<div class="articleText">
						<?php get_template_part('templates/entry-meta'); ?>
						<div class="entry-summary">
						  <?php the_excerpt_dynamic_next(450, $next_post); ?>
						</div>
					</div>
				</div>
			</article>

	  	<?php

	  	} else { 

	  		get_template_part('templates/default');

	  	} ?>
	</div>
	</div>
<?php endif; ?>