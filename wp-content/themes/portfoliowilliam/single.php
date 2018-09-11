<?php get_header(); ?>

<?php if (is_category(array('Projecten', 'projecten'))): //GEEN PROJECT ?>
<?php else: ?>
    <!--    PROJECT   -->
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-10">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-2">
                    <div class="btn back-btn mt-4" onclick="goBack()">Ga terug</div>
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
