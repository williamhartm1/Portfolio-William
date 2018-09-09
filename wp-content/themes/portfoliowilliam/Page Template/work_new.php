<?php
/*
 * Template Name: Work new
 */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="container container-work">
            <div class="posts">
                <div class="row projecten-row align-items-end">
                    <div class="col-sm-6 col-md-6 no-padding">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <div class="post project-post">
                                <h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
                            </div>
						<?php endwhile;
						else:
							echo "No posts found.";
						endif;
						?>
                    </div>
					
					<?php
					global $post;
					$args = array(
						'category_name'  => 'work',
						'order'          => 'name',
						'orderby'        => 'rand',
						'posts_per_page' => '-1',
					);
					$postslist = get_posts($args);
					
					//$temp_postslist = get_posts($args);
					//$postslist = [];
					//
					//for($i = 0; $i <= count($temp_postslist); $i++) {
					//    $post = $temp_postslist[$i];
					//    setup_postdata($post);
					//    if(!has_post_thumbnail() || !get_the_post_thumbnail()) {
					//        unset($temp_postslist[$i]);
					//    }
					//    wp_reset_postdata();
					//}
					//shuffle($temp_postslist);
					//$postslist = $temp_postslist;
					//
					////TODO: sometimes there is only one post in the first row
					
					for($i = 0; $i <= count($postslist); $i++):
						$post = $postslist[$i];
						setup_postdata($post);
						
						if(has_post_thumbnail() && get_the_post_thumbnail()): ?>
                            <div class="col-12 col-sm-3 no-padding">
                                <div class="align-self-center">
                                    <div class="project-img">
                                        <a href="<?= get_post_permalink(); ?>">
                                            <img src="<?= the_post_thumbnail_url(); ?>" alt="work image">
                                        </a>
                                    </div>
                                </div>
                            </div>
							<?php
							if($i == 1):
								//puts a new row in the page after the first 2 posts (post 0 and 1)
								echo '</div>';
								echo '<div class="row projecten-row">';
							endif;
						endif;
						?>
					<?php
					endfor;
					?>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showAndHide(col) {
            let x = document.getElementsByClassName("sub" + col);
            let i;
            for (i = 0; i < x.length; i++) {
                let element = x[i];
                if (element.style.display === "none") {
                    element.style.display = null;
                }
                else {
                    element.style.display = "none";
                }
            }
        }
    </script>

<?php get_footer(); ?>