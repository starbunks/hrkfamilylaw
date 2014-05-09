<?php
/**
 * Theme's Functions and Definitions
 *
 *
 * @file           functions-custom.php
 * @filesource     wp-content/themes/shell-lite/includes/functions-custom.php
 */
?>
<?php


function create_attorney_posttype() {
	
	$labels = array(
			'name'               => ( 'Attorneys'),
			'singular_name'      => ( 'Attorney'),
			'add_new'            => ( 'Add New Attorney' ),
			'add_new_item'       => ( 'Add New Attorney' ),
			'edit_item'          => ( 'Edit Attorney' ),
			'new_item'           => ( 'New Attorneys' ),
			'all_items'          => ( 'All Attorneys' ),
			'view_item'          => ( 'View Attorneys' ),
			'search_items'       => ( 'Search Attorneys' ),
			'not_found'          => ( 'No Attorneys found' ),
			'not_found_in_trash' => ( 'No Attorneys found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Attorneys');
	
	$args = array(
		'labels'        		=> $labels,
		'description'   		=> 'Holds our Attorneys and Attorney specific data',
		'public'        		=> true,
		'exclude_from_search' 	=> true,
		'publicly_queryable' 	=> true,
		'supports'      		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'taxonomies' => array('category'),
		'has_archive'   		=> true,
	);
	
	register_post_type( 'attorney', $args );	

}

add_action( 'init', 'create_attorney_posttype' );
	
function get_attorney_posttype() {
	
	$args = array( 	'numberposts' => '4', 
					'orderby' => 'post_date', 
					// 'order' => 'DESC', 
					'order' => 'ASC', 
					'post_type' => 'attorney',
					'post_status' => 'publish',
					// 'attachment' =>true, 
					);

    $recent_posts = wp_get_recent_posts( $args );

	foreach( $recent_posts as $recent ){

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
		$a_custom_values = get_post_custom_values('bio_link', $recent["ID"]);
		
		echo '<div class="col-sm-4">';
		echo '<img src="'. $image[0] . '" width="80%" style="margin: 0 auto 12px auto;" />';
		echo '<h2>' . $recent["post_title"] . '</h2>';
		echo '<p>' . $recent["post_content"];
		echo '<a class="bioTeaser" href="' . $a_custom_values[0] . '">MORE</a></p>';
		
		echo '</div>';
		
	}
}


/**
 * Used to display Headline Here
 * 4 main posts
 */
function shell_list_posts_homepage() {

	$args = array( 	'numberposts' => '4', 
					'orderby' => 'post_date', 
					'order' => 'DESC', 
					'post_type' => 'post',
					'post_status' => 'publish' );

    $recent_posts = wp_get_recent_posts( $args );
	
	// Used to echo '<div class="row">'
	$row_count = 0;
	// Used to echo '<div class="row">' when there are less then 4 posts
	$last_value = count($recent_posts);

	foreach( $recent_posts as $recent )
	{
		// print_r($recent);
		if ( ($row_count == 0) || ($row_count == 2) ) {
			echo '<div class="row">';
        }
		echo '<div class="col-sm-6">';
		echo '<h2>' . $recent["post_title"] . '</h2>';
		echo '<p>' . esc_attr($recent["post_excerpt"]) .  '</p>';
		echo '<a class="btn btn-primary pull-left" href="' . $recent["guid"] . '">More</a>';
		echo '</div>';
		
		$row_count++;	
		if ( ($row_count == 2) || ($row_count == 4) || ($row_count == $last_value) ) {
			echo '</div>';
        }
	
	}
	
} // end shell_list_posts_homepage

/**
 * Used for the footer
 * 4 recents posts
 * @see https://codex.wordpress.org/Function_Reference/wp_get_recent_posts
 */
function shell_recent_posts_homepage() {

	$args = array( 	'numberposts' => '4', 
					'orderby' => 'post_date', 
					'order' => 'DESC', 
					'post_type' => 'post',
					'post_status' => 'publish' );

    $recent_posts = wp_get_recent_posts( $args );

	foreach( $recent_posts as $recent ){
		// echo '<li><a href="' . get_permalink($recent["ID"]) . 
		// '" title="Look '.esc_attr($recent["post_title"]).'" >' .   
		// $recent["post_title"].'</a> </li> ';
		echo '<div class="clearfix"><div class="marker"></div><div class="linkItem"><a href="' . 
		get_permalink($recent["ID"]) . '" title="Look ' .
		esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></div></div>';
	}		

			
} // end shell_list_posts_homepage

/**
 * Contact Us - excerpt
 * 
 */
function shell_contact_us_homepage() {
	$o_page = get_page_by_path('contact-us');
	// echo 'contact us id [' . $o_page->ID . ']';
	// print_r($o_page);
	echo '<h2>' . $o_page->post_title . '</h2>';
	$o_post_custom_values = get_post_custom_values('excerpt', $o_page->ID);
	echo '<p>' . $o_post_custom_values[0] . '</p>';
}

/**
 * Authors
 * 
 */
function shell_authors_homepage() {
	$args = array(
	    'orderby'       => 'name', 
	    'order'         => 'ASC', 
	    'number'        => 3,
	    'optioncount'   => false, 
	    'exclude_admin' => true, 
	    'show_fullname' => false,
	    'hide_empty'    => true,
	    'echo'          => true,
	    'feed'          => "more stuff");
	
}
?>
