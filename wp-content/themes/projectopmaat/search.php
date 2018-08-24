<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <h1>Zoekresultaten voor: <i><?php the_search_query(); ?></i></h1>
                <br/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="container posts">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
                        <div class="row post">
							<?php if ( has_post_thumbnail() ): ?>
                                <div class="col-md-12">
                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                    </h2>
                                </div>
                                <div class="col-md-2 order-md-12 post-thumbnail">
									<?php the_post_thumbnail( 'small-thumbnail' ); ?>
                                </div>
                                <div class="col-md-10 order-md-1">
                                    <div class="text-content">
										<?php the_excerpt(); ?>
                                    </div>
                                    <div class="author">
                                        Geplaatst <!-- door
									<a style="font-weight: bold"
									   href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
										<?php the_author() ?> </a> -->
                                        op <?php the_time( 'j F Y' ); ?>
                                    </div>
                                    <div class="btn"><a href="<?php the_permalink(); ?>">Lees meer</a></div>
                                </div>
							<?php else: ?>
                                <div class="col-md-12">
                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                    </h2>
                                    <div class="text-content">
										<?php the_excerpt(); ?>
                                    </div>
                                    <div class="author">
                                        Geplaatst <!-- door
									<a style="font-weight: bold"
									   href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
										<?php the_author() ?> </a> -->
                                        op <?php the_time( 'j F Y' ); ?>
                                    </div>
                                    <div class="btn"><a href="<?php the_permalink(); ?>">Lees meer</a></div>
                                </div>
							<?php endif; ?>
                        </div>
					<?php
					endwhile;
				else:
					echo "<p style='margin-top: 10px; min-height: 150px'> Geen zoekresultaten gevonden voor <b class='search_res'>" . esc_html( get_search_query( false ) ) . "</b></p>";
				endif;
				?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
