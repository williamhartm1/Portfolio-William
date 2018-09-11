<?php get_header(); ?>

	<div class="row">
		<div class="container">
			<div class="row">
				<div class="posts">
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
			</div>
		</div>
	</div>

<?php get_footer(); ?>
