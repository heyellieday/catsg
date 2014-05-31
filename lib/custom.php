<?php
/**
 * Custom functions
 */

function the_excerpt_dynamic($length) { // Outputs an excerpt of variable length (in characters)
global $post;
$text = $post->post_exerpt;
$id = $post->post_id;
$permalink = get_permalink( $id );
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
}
$text = strip_shortcodes( $text ); // optional, recommended
$text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' to keep some formats; optional

$text = substr($text,0,$length)." <h4 class='readMore'><a href='$permalink'>Read More</a></h4>";
echo apply_filters('the_excerpt',$text);
}

function the_excerpt_dynamic_next($length, $nextPost) { // Outputs an excerpt of variable length (in characters)
$text = $nextPost->post_exerpt;
$id = $nextPost->post_id;
$permalink = get_permalink( $id );
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
}
$text = strip_shortcodes( $text ); // optional, recommended
$text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' to keep some formats; optional

$text = substr($text,0,$length)." <h4 class='readMore'><a href='$permalink'>Read More</a></h4>";
echo apply_filters('the_excerpt',$text);
}
