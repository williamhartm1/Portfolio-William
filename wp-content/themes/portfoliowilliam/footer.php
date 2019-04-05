</div>
<?php include 'contact.php';?>

<footer class="lg-sticky row main-menu">
    <div class="container container-footer">
        <nav class="navbar navbar-expand-md fixed-bottom">
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
            </div>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
