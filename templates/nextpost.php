<?php 
$next_post = get_next_post();
$next_post_id = $next_post->ID;
$next_post_title = $next_post ->post_title;
$next_post_permalink = get_permalink($next_post_id);
$next_post_thumbnail = get_the_post_thumbnail($next_post->ID);

$previous_post = get_previous_post();
$previous_post_id = $previous_post->ID;
$previous_post_title = $previous_post ->post_title;
$previous_post_permalink = get_permalink($previous_post->ID);
$previous_post_thumbnail = get_the_post_thumbnail($previous_post->ID);

?>
   <nav class="post-nav">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <ul class="pager">
        	<?php if (!empty( $previous_post )): ?>
          		<li class="previous"><a href="<?php echo $previous_post_permalink ?>"> Previous Post</li></a>
          	<?php endif; ?>
        	<?php if (!empty( $next_post )): ?>
          		<li class="next"><a href="<?php echo $next_post_permalink ?>"> Next Post</li></a>
         	<?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>