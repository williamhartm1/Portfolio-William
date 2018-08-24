<?php get_header(); ?>

<div class="row">
    <section class="mainImg">
        <!-- <h1>Lorem ipsum.</h1> -->
    </section>
</div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="feature">
                    <?php dynamic_sidebar('hw-1') ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <?php dynamic_sidebar('hw-2') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
