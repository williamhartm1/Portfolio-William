<?php
/*
 * Template Name: Skills & Experience
 */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="container container-work">
            <div class="posts">
                <div class="row">
                    <div class="col-sm-12 col-md-8 no-padding">
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
				</div>
			</div>
			<div class="row">
				<?php
					global $post;
					$args      = array(
						'category_name'  => 'skills&experience',
						'order'          => 'DESC',
						'orderby'        => 'date',
						'posts_per_page' => '-1',
					);
					$postslist = get_posts($args);
					foreach($postslist as $post):
						setup_postdata($post);
						?>
						<div class="col-12 col-sm-6 no-padding">
							<div class="post">
								<div class="row">
									<div class="col">
										<h2 class="sub-title"><?php the_title(); ?></h2>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div><?php the_content(); ?></div>
									</div>
								</div>
							</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
				</div>
            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>