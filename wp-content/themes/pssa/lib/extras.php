<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

function slide_query($args){
    // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
  	while ( $the_query->have_posts() ) {
  		$the_query->the_post();
  		echo '<div class="item">';
        if ( has_post_thumbnail() ) {
  	       the_post_thumbnail();
        }

        echo '<div class="item-caption">';
          echo '<h1>' . get_the_title() . '</h1>';
                get_template_part('templates/entry-meta');
                echo '<p class="item-body">' . get_the_excerpt() . '</p>';
                echo '<p><a class="btn btn-main" href="' . get_the_permalink() . '">Más Información</a></p>';
        echo '</div>';
      echo '</div>';
  	}
  } else {
  	// no posts found
  }
  /* Restore original Post Data */
  wp_reset_postdata();
}

add_filter('child_slide_query', 'slide_query');
