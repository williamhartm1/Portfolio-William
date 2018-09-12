</div>
<?php include 'contact.php'; ?>

<!--    <div class="style-6">-->
<!--        <div class="iphone__screen">-->
<!--            <a href="#" class="nav__trigger"><span class="nav__icon"></span></a>-->
<!--            <nav class="nav">-->
<!--                <ul class="nav__list">-->
<!--                    <li class="nav__item"><a class="nav__link" href="#">Home</a></li>-->
<!--                    <li class="nav__item"><a class="nav__link" href="#">About Us</a></li>-->
<!--                    <li class="nav__item"><a class="nav__link" href="#">Portfolio</a></li>-->
<!--                    <li class="nav__item"><a class="nav__link" href="#">Blog</a></li>-->
<!--                    <li class="nav__item"><a class="nav__link" href="#">Contact Us</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--            <div class="iphone__content"></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <script>-->
<!--        $('.nav__trigger').on('click', function (e) {-->
<!--            e.preventDefault();-->
<!--            $(this).parent().toggleClass('nav--active');-->
<!--        });-->
<!--    </script>-->


<footer class="lg-sticky row main-menu d-none d-md-block">
    <div class="container">
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
                    'theme_location'  => 'primary',
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

<footer class="sticky row d-xs-block d-sm-block d-md-none">
    <div class="container">
        <nav class="navbar fixed-bottom">
            <!--KEERL-->
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
