</div>
<!-- <footer>
	<div class="container">
		<div class="copyrights text-center">
			<? //php dynamic_sidebar( 'fw-1' ) ?>
		</div>
	</div>
</footer> -->

<footer class="lg-sticky row main-menu">
    <div class="container">
<<<<<<< HEAD
        <nav class="navbar navbar-expand-md navbar-fixed-bottom">
=======
        <nav class="navbar navbar-expand-md">
>>>>>>> William
            <!-- <a class="navbar-brand" href="<? //php echo home_url(); ?>">
                <img class="logo-img" src="<? //= get_template_directory_uri() . '/images/LOGO-POM-WIT.png'; ?>"
                     alt="logo"/>
            </a> -->
<<<<<<< HEAD
            <button class="navbar-toggler dropup" type="button" data-toggle="collapse"
=======
            <button class="navbar-toggler" type="button" data-toggle="collapse"
>>>>>>> William
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars hamburger_bars dropup"></i>
            </button>
            <div class="collapse navbar-collapse mr-auto w-100 justify-content-end" id="navbarSupportedContent">
			<? //php /* Primary navigation */
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
            </div>
        </nav>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
