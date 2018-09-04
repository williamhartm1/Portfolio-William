</div>
<!-- <footer>
	<div class="container">
		<div class="copyrights text-center">
			<? //php dynamic_sidebar( 'fw-1' ) ?>
		</div>
	</div>
</footer> -->

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<!-- <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				
			</div> -->
			<div class="modal-body">
			<div class="row">
			<?php
					global $post;
					$args      = array(
						'category_name'  => 'contact',
						'order'          => 'DESC',
						'orderby'        => 'date',
						'posts_per_page' => '-1',
					);
					$postslist = get_posts($args);
					foreach($postslist as $post):
						setup_postdata($post);
						?>
						<div class="col-12 col-sm-12 no-padding">
							<div class="post">
								<div class="row">
									<div class="col col-sm-10">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="col col-sm-2">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div><?php the_content(); ?></div>
									</div>
								</div>
							</div>
						</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>

		</div>
	</div>
</div>
<!-- end modal -->

<footer class="lg-sticky row main-menu">
    <div class="container">
        <nav class="navbar navbar-expand-md fixed-bottom">
            <!-- <a class="navbar-brand" href="<? //php echo home_url(); ?>">
                <img class="logo-img" src="<? //= get_template_directory_uri() . '/images/LOGO-POM-WIT.png'; ?>"
                     alt="logo"/>
            </a> -->
            <button class="navbar-toggler dropup" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars hamburger_bars dropup"></i>
            </button>
            <div class="collapse navbar-collapse mr-auto w-100 justify-content-end" id="navbarSupportedContent">
			<?php /* Primary navigation */
				 wp_nav_menu([
					            'menu'            => 'primary',
					            'theme_location'  => 'top',
					            'container'       => false,
					            'container_id'    => 'navbarSupportedContent',
					            'container_class' => 'collapse navbar-collapse',
					            'menu_id'         => false,
					            'menu_class'      => 'navbar-nav main-nav',
					            'depth'           => 2,
					            'fallback_cb'     => 'bs4navwalker::fallback',
					            'walker'          => new bs4navwalker(),
				            ]);
				?>
                <!-- <div class="d-md-none my-lg-0 searchform mobilesf">
					<? //php get_search_form(); ?>
                </div>  -->
				<li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95 nav-item">
					<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Launch demo modal
					</button> -->
					<a class="li-modal" data-toggle="modal" data-target="#modal">
						CONTACT
					</a>
				</li>
            </div>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
<script>
	$('#modal').on('show.bs.modal', function () {
		$('.container').addClass('blur');
	})

	$('#modal').on('hide.bs.modal', function () {
		$('.container').removeClass('blur');
	})
</script>
</html>
