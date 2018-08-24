<?php get_header(); ?>


<!-- <div class="row">
    <div class="container">
        <div class="posts">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post">

                    <p><?php the_content(); ?></p>
                </div>
			<?php endwhile;
			else:
				echo "No posts found.";
			endif;
			?>
        </div>
    </div>
</div> -->

<div class="video-background">
    <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer(); ?>
