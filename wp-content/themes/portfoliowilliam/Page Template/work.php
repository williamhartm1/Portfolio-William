<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="container container-work">
            <div class="posts">
                <div class="row projecten-row">
                    <div class="col-sm-12 col-md-6">
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
                    <div class="col no-padding">
						<?php
						$post_counter = 1;
						$first_post   = true;
						global $post;
						$args      = array(
							'category_name'  => 'work',
							'order'          => 'name',
							'orderby'        => 'date',
							'posts_per_page' => -1,
						);
						$postslist = get_posts($args);
						foreach($postslist

						as $post):
						setup_postdata($post);
						if($first_post === true): ?>
                        <div class="align-self-center">
							<?php if(has_post_thumbnail()): ?>
                                <div class="project-img">
                                    <a href="<?= get_post_permalink(); ?>">
                                        <img src="<?= the_post_thumbnail_url(); ?>" alt="work image">
                                    </a>
                                </div>
							<?php endif; ?>
                        </div>
						<?php $first_post = false; ?>
                    </div>
					<?php else: ?>
                        <div class="col-12 col-sm-3 align-self-center no-padding">
							<?php if(has_post_thumbnail()): ?>
                                <div class="project-img">
                                    <a href="<?= get_post_permalink(); ?>">
                                        <img src="<?= the_post_thumbnail_url(); ?>" alt="work image">
                                    </a>
                                </div>
							<?php endif; ?>
                        </div>
						<?php
						$post_counter++;
					endif;
					if($post_counter % 4 == 0 && ($post_counter < (count($postslist) - 1))) {
						echo "</div>";
						echo "<div class='row projecten-row'>";
					}
					endforeach;
					wp_reset_postdata();
					?>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>