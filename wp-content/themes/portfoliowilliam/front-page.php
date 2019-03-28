<?php get_header(); ?>

<div class="container-fp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-blocks">
                    <div class="text-block-left">
                        <?php dynamic_sidebar('txt-block-left') ?>
                    </div>
                    <div class="text-block-right">
                        <?php dynamic_sidebar('txt-block-right') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
