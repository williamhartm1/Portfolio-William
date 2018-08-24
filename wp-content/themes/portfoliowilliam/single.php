<?php get_header(); ?>

<?php if (is_category(array('Projecten', 'projecten'))): //GEEN PROJECT ?>
    <div class="container pb-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col">
                    <h1><?php the_title(); ?></h1>
                </div>
                <!--<div class="col">-->
                <!--    <div class="btn back-btn" onclick="goBack()">Ga terug</div>-->
                <!--    <script>-->
                <!--        function goBack() {-->
                <!--            window.history.back();-->
                <!--        }-->
                <!--    </script>-->
                <!--</div>-->
            </div>
            <div class="row post">
                <div class="col-12 no-padding author">
                    In <?php the_category('&nbsp;/&nbsp;') ?> door
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                        <?php the_author() ?> </a>
                    op <?php the_time('j F Y, G:i'); ?>
                </div>
                <div class="col-12 no-padding">
                    <?php the_post_thumbnail('normal-thumbnail'); ?>
                </div>
                <div class="col-12 no-padding">
                    <p><?php the_content(); ?></p>
                </div>

                <?php if (has_tag()): ?>
                    <div class="col-12 no-padding">
                        <?php the_tags('Tags: ', '&nbsp;/&nbsp;'); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile;
        else:
            echo "Geen post gevonden.";
        endif; ?>
    </div>

<?php else: ?>
    <!--    PROJECT   -->
    <div class="container pb-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-10">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-2">
                    <div class="btn back-btn" onclick="goBack()">Ga terug</div>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </div>
            </div>
            <div class="row ">
                <!--<div class="col-12 author">-->
                <!--    In --><?php //the_category('&nbsp;/&nbsp;') ?><!-- door-->
                <!--    <a href="--><?php //echo get_author_posts_url(get_the_author_meta('ID')) ?><!--">-->
                <!--        --><?php //the_author() ?>
                <!--    </a>-->
                <!--    op --><?php //the_time('j F Y, G:i'); ?>
                <!--</div>-->
                <!--<div class="col-12">-->
                <!--    --><?php //the_post_thumbnail('normal-thumbnail'); ?>
                <!--</div>-->

                <div class="col-12 ">
                    <p><?php the_content(); ?></p>
                </div>

                <?php if (has_tag()): ?>
                    <div class="col-12">
                        <?php the_tags('Tags: ', '&nbsp;/&nbsp;'); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile;
        else:
            echo "Geen post gevonden.";
        endif; ?>
    </div>

<?php endif; ?>

<!-- <div class="container" style="margin-top: 15px;">
	<?php //comments_template(); ?>
</div> -->


<?php get_footer(); ?>
