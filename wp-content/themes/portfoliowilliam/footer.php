</div>
<!-- <footer>
	<div class="container">
		<div class="copyrights text-center">
			<? //php dynamic_sidebar( 'fw-1' ) ?>
		</div>
	</div>
</footer> -->
<?php include 'contact.php';?>

<footer class="lg-sticky row main-menu">
    <div class="container container-footer">
        <nav class="navbar navbar-expand-md fixed-bottom">
            <!-- <a class="navbar-brand" href="<? //php echo home_url(); ?>">
                <img class="logo-img" src="<? //= get_template_directory_uri() . '/images/LOGO-POM-WIT.png'; ?>"
                     alt="logo"/>
            </a> -->
            <!-- <button type="button" class="navbar-toggler dropup  float-xs-right" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars hamburger_bars dropup"></i>
			</button> -->
			<button type="button" class="navbar-toggler ml-auto hidden-sm-up float-xs-right m-3" data-toggle="collapse" 
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars hamburger_bars dropup"></i>
			</button>
            <div class="collapse navbar-collapse mr-auto w-100 justify-content-end" id="navbarSupportedContent">
			<?php /* Primary navigation */
				 wp_nav_menu([
					            'menu'            => 'primary',
					            'theme_location'  => 'bottom',
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
				<!-- <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95 nav-item"> -->
					<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Launch demo modal
					</button> -->
					<!-- <a class="li-modal" data-toggle="modal" data-target="#modal">
						CONTACT
					</a>
				</li> -->
            </div>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
