<?php
/* Template Name: Contact pagina */
?>

<?php get_header(); ?>

	<div class="row">
		<div class="container">

			<div class="posts">
				<div class="row">
					<div class="col-sm-12 col-md-6">
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
					<div class="col-sm-12 col-md-6">
						<?= do_shortcode('[ninja_form id=1]') ?>

                    </div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>