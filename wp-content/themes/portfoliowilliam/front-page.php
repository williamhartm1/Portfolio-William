<?php get_header(); ?>

<div class="container-fp">
    <div class="container">
        <div class="row h-100">
            <div class="col-12 h-100 d-table">
                <div class="d-table-cell align-middle">
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
</div>

<?php get_footer(); ?>
