<?php
/*
 * Template Name: Gallerij template
 */
?>


<?php get_header(); ?>


<div class="row">
    <div class="container">
        <div class="posts">
			<?php if (have_posts()) : while (have_posts()) :
			the_post(); ?>


            <div class="post">
				<?php
				$content = preg_replace('/(<img [^>]*>)/', '', get_the_content());
				$content = apply_filters('the_content', $content);
				?>
                <p><?= $content; ?></p>

                <div class="gallery">
                    <div class="row">
						<?php
						/* TODO: galerij maken !
						 * 1 grote image die aanpast als je op volgende klikt
						 * kleine images er onder
						*/

						preg_match_all('/< *img[^>]*src *= *["\']?([^"\']*)/i', get_the_content(), $sources);
						preg_match_all('/(<img [^>]*>)/', get_the_content(), $images);
						$counter = 0;
						for ($i = 0; isset($images[1]) && $i < count($images[1]); $i ++) :
							if ($counter % 6 == 0) {
								echo "</div>";
								echo "<div class='row'>";
							}
							?>
                            <a class="col-4 col-md-2 align-self-center project-img" href="<?= $sources[1][$i]; ?>">
								<?= $images[1][$i]; ?>
                            </a>

							<?php $counter ++;
						endfor; ?>

                        <!--<p>--><?php //the_content();
						?><!--</p>-->
                    </div>
                </div>
				<?php
				endwhile;
				else:
					echo "No posts found.";
				endif;
				?>
            </div>
        </div>
    </div>

	<?php get_footer(); ?>
