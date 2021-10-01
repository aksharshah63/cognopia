<?php

add_action( 'wp_enqueue_scripts', 'pearl_child_enqueue_parent_styles' );

function pearl_child_enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_site_url().'/wp-content/themes/pearl-child/style.css',array(),rand(1,99));
	wp_enqueue_style( 'developer-style', get_site_url().'/wp-content/themes/pearl-child/assets/css/developer.css',array(),rand(1,99));
	wp_enqueue_script( 'cookie-js', get_site_url().'/wp-content/themes/pearl-child/assets/js/jquery.cookie.js',array(),1.1);
	wp_enqueue_script( 'jquery-validate-min-js', get_site_url().'/wp-content/themes/pearl-child/assets/js/jquery.validate.min.js',array(),1.19);
}

add_action( 'wp_ajax_get_post1', 'get_post_fun1' );
add_action( 'wp_ajax_nopriv_get_post1', 'get_post_fun1' );

function get_post_fun1(){
	$get_cat1 = $_POST['post_cat1'];
	$cid = get_cat_ID( $get_cat1 );
	
	$wpb_all_query = new WP_Query(array('cat' => $cid, 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));

    if ($wpb_all_query->have_posts()) :
		while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>     
				<div class="block four testing">
		                    <div class="block-content">
		                        <img loading="lazy" item="featured-image" src="<?= the_post_thumbnail_url($post->ID, array(500, 800)); ?>">
		                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                        <p><?php the_excerpt(); ?></p>
		                        <div class="post-btn"><a href="<?php the_permalink(); ?>" class="btn btn-primary cm-read-btn">Continue Reading</a></div>
		                    </div>
		        </div>
		<?php
    	endwhile; 
	endif;

	if($get_cat=='show_all')
	{
		$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
			if ($wpb_all_query->have_posts()) :
				while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>     
						<div class="block four testing">
									<div class="block-content">
										<img loading="lazy" item="featured-image" src="<?= the_post_thumbnail_url($post->ID, array(500, 800)); ?>">
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<p><?php the_excerpt(); ?></p>
										<div class="post-btn"><a href="<?php the_permalink(); ?>" class="btn btn-primary cm-read-btn">Continue Reading</a></div>
									</div>
						</div>
				<?php
				endwhile; 
				endif;
	}
	die();
}

function wpb_expand_shortcode() { 
	$result = '<button class="sidebar-cta-expand arrow_btn" aria-label="Read more"><i class="fa fa-arrow-down"></i></button>';
	return $result;
	} 
	add_shortcode('expand', 'wpb_expand_shortcode'); 

function wpb_close_shortcode() {
	$result1 = '<button id="sidebar-collapse--14688" class="sidebar-collapse close_btn" aria-label="Close sidebar"><i class="fa fa-times"></i></button>';

	return $result1;
}
add_shortcode('close', 'wpb_close_shortcode'); 

add_action( 'admin_enqueue_scripts', 'my_admin_style');

function my_admin_style() {
  wp_enqueue_style( 'gutenberg-style', get_stylesheet_directory_uri() . '/assets/admin/css/gutenberg/style.css',false,1.1);
}
?>