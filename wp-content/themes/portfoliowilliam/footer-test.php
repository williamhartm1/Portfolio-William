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
        <nav class="navbar navbar-expand-md fixed-bottom style-6">
            <!-- <a class="navbar-brand" href="<? //php echo home_url(); ?>">
                <img class="logo-img" src="<? //= get_template_directory_uri() . '/images/LOGO-POM-WIT.png'; ?>"
                     alt="logo"/>
            </a> -->
            <!-- <button class="navbar-toggler dropup" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars hamburger_bars dropup"></i>
			</button> -->

			<button class="navbar-toggler dropup nav__trigger" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="nav__icon dropup"></i>
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
<div class="style-6">
    <!-- <div class="iphone__item">#6</div>
    <div class="iphone__power-btn"></div>
    <div class="iphone__left-btn"></div>
    <div class="iphone__details"></div> -->
    <div class="iphone__screen">
      <a href="#" class="nav__trigger"><span class="nav__icon"></span></a>
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item"><a class="nav__link" href="#">Home</a></li>
          <li class="nav__item"><a class="nav__link" href="#">About Us</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Portfolio</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Blog</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Contact Us</a></li>
        </ul>
      </nav>
      <div class="iphone__content"></div>  
    </div>
    <!-- <div class="iphone__home-btn"></div> -->
  </div>
            </div>
        </nav>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
<script>
	 $('.nav__trigger').on('click', function(e){
      e.preventDefault();
      $(this).parent().toggleClass('nav--active');
    });
</script>
<script>
        function showAndHide(col) {
            let x = document.getElementsByClassName("sub" + col);
            let i;
            for (i = 0; i < x.length; i++) {
                let element = x[i];
                if (element.style.display === "none") {
                    element.style.display = null;
                }
                else {
                    element.style.display = "none";
                }
            }
        }
</script>
</html>
