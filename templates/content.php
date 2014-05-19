<?php $template = get_post_meta( $post->ID, '_wp_post_template', true ); ?>
<div class="row">
  <div class="col-sm-8 col-sm-offset-2 <?php echo $template?>">
  	<?php if ($template == "single-square.php") { 
  	 	
  	 	get_template_part('templates/square');

  	} elseif ($template == "single-wide.php") { 

  		get_template_part('templates/wide');

  	} elseif ($template == "single-tall.php") { 

  		get_template_part('templates/tall');

  	} else { 

  		get_template_part('templates/default');

  	} ?>
</div>
</div>

