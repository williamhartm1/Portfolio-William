<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-8">
                <div class="posts">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="post">
                            <div class="post <?php if ( has_post_thumbnail() ) { ?>
                        has-thumbnail
                            <?php } ?>">
                                <div class="post-thumbnail">
									<?php the_post_thumbnail( 'small-thumbnail' ); ?>
                                </div>
                                <h2 class="title>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
                                <div class="author">
                                    <!--In  <?php the_category( '&nbsp;/&nbsp;' ) ?> by
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
                                    <?php the_author() ?> </a>
                                on --><?php the_time( 'j F Y, G:i' ); ?></div>

                                <p><?php the_excerpt(); ?></p>

                                <div class="tags">
									<?php the_tags( 'Tags: ', '&nbsp;/&nbsp;' ); ?>
                                </div>

                                <div class="btn"><a href="<?php the_permalink(); ?>">Lees meer</a></div>
                            </div>
                        </div>
					<?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-md-4">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
