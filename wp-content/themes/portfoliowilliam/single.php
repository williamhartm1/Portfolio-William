<?php get_header(); ?>

<?php if (is_category(array('Projecten', 'projecten'))): //GEEN PROJECT ?>
<?php else: ?>
    <!--    PROJECT   -->
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row workpage-top">
                <div class="col-9">
                    <h1 class="workpage-title"><?php the_title(); ?></h1>
                </div>
                <div class="col-3">
                    <div class="btn back-btn workpage-top" onclick="goBack()">Ga terug</div>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-12 no-padding workpage-img">
                    <p><?php the_content(); ?></p>
                </div>
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
