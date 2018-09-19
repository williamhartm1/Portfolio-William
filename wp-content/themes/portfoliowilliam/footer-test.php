</div>
<?php include 'contact.php'; ?>

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

<footer class="sticky row mobile-menu d-xs-block d-sm-block d-md-none">
    <div class="container">
        <div class="custom-mobile-menu">
            <div>
                <a href="#" class="nav__trigger"><span class="nav__icon"></span></a>
                <div class="nav-mobile">
                    
                    <?php
                    wp_nav_menu([
                        'container'  => false,
                        'menu_class' => 'nav__list',
                        'depth'      => 2,
                        'walker'     => new mobile_nav_walker(),
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $('.nav__trigger').on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('nav--active');
    });
</script>

<?php wp_footer(); ?>

</body>

</html>
