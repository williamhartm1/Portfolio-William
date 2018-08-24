<?php
/* Template Name: Home pagina */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="container">

            <div class="posts">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="post">
                                <p><?php the_content(); ?></p>
                            </div>
						<?php endwhile;
						else:
							echo "No posts found.";
						endif;
						?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="feature">
                            <div class="project-img">
								<?php the_post_thumbnail(); ?>
                                <div class="item-overlay top">
                                    <div class="caption">
                                        <span class="border">
                                        <!--<a href="--><? //= home_url(); ?><!--">Bekijk onze projecten</a>-->
                                            <a href="<?= home_url() . '/projecten/'; ?>">Bekijk onze projecten</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>