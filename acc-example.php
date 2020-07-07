<?php
/**
 * To Display Recent Posts in WordPress.
 */

// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=3' );

// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink

echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';

// Display the Post Excerpt
echo '<p>' . the_excerpt(__('(more…)')) . '</p>';

// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
