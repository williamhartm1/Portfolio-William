<?php
/*
 * Plugin Name: POM custom gallery that uses Magnific popup
 * Description: Custom gallery that replaces the default Wordpress gallery
 * Author: Ruben
 * Version: 1.0
 */


/* Register the Magnific popup scripts */
function pom_custom_gallery_plugin_register_js()
{
	/* Magnific popup:  http://dimsemenov.com/plugins/magnific-popup/documentation.html */
	wp_register_script('jquery_magnific_popup', '/wp-content/plugins/custom_gallery_POM/js/jquery.magnific-popup.min.js', 'jquery');
	wp_enqueue_script('jquery_magnific_popup');
	
	/* Magnific popup custom */
	wp_register_script('jquery_magnific_popup_custom', '/wp-content/plugins/custom_gallery_POM/js/magnific-popup-custom.js', 'jquery');
	wp_enqueue_script('jquery_magnific_popup_custom');
}


/* Register the custom CSS for Magnific Popup */
function pom_custom_gallery_plugin_register_css()
{
	/* Custom style CSS */
	wp_register_style('magnific-popup_css', '/wp-content/plugins/custom_gallery_POM/css/magnific-popup.css');
	wp_enqueue_style('magnific-popup_css');
}

add_action('wp_head', 'pom_custom_gallery_plugin_register_js');
add_action('wp_head', 'pom_custom_gallery_plugin_register_css');

remove_shortcode('gallery');
add_shortcode('gallery', 'pom_custom_gallery');

function pom_custom_gallery($atts)
{
	
	global $post;
	$pid     = $post->ID;
	$gallery = "";
	$orderby = 'asc';
	$id = $pid;
	
	if(empty($pid)) {
		$pid = $post['ID'];
	}
	
	if(!empty($atts['ids'])) {
		$atts['orderby'] = 'post__in';
		$atts['include'] = $atts['ids'];
	}
	
	extract(shortcode_atts(array('orderby' => 'menu_order ASC, ID ASC', 'include' => '', 'id' => $pid,
	                             'itemtag' => 'dl', 'icontag' => 'dt', 'captiontag' => 'dd', 'columns' => 3,
	                             'size'    => 'large', 'link' => 'file'), $atts));
	
	$args = array('post_type' => 'attachment', 'post_status' => 'inherit', 'post_mime_type' => 'image',
	              'orderby'   => $orderby);
	
	if(!empty($include)) {
		$args['include'] = $include;
	} else {
		$args['post_parent'] = $id;
		$args['numberposts'] = - 1;
	}
	
	if($args['include'] == "") {
		$args['orderby'] = 'date';
		$args['order']   = 'asc';
	}
	
	$images = get_posts($args);
	
	$gallery .= '<div class="post-images">';
	$gallery .= '<div class="row">';
	
	foreach($images as $image) {
		//print_r($image); /*see available fields*/
		
		$link  = wp_get_attachment_url($image->ID);
		$image = wp_get_attachment_image($image->ID, "medium-thumbnail");
		
		$gallery .= '<a class="col-4 col-md-2 align-self-center post-img" href=' . $link . '>' . $image . '</a>';
		
	}
	
	$gallery .= '</div>';
	$gallery .= '</div>';
	
	return $gallery;
}

?>