<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

</head>
<body>

<div class="container-fluid no-padding">

    <div class="style-6">
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


<nav class="navbar navbar-expand-md fixed-bottom">
            ja en nu? :P eem wat code checkena alle tijd, de rest van de classes wordt gegenereerd door de bs4navwalker ... kan je de css niet aanpassen? Welke css de geleende van die codepen
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
								'menu_class'      => 'navbar-nav main-nav', //ul classes
					            'depth'           => 2,
					            'fallback_cb'     => 'bs4navwalker::fallback',
					            'walker'          => new bs4navwalker(),
				            ]);
				?>
            </div>
        </nav>

           <div class="iphone__content"></div>
       </div>
    </div>
    
    <script>
        $('.nav__trigger').on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('nav--active');
        });
    </script>

    <!-- <div class="bg-ani">
	  <div class="outerCircle"></div>
	  <div class="innerCircle"></div>
	  <div class="icon"></div>
	</div> -->