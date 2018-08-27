<?php
/*
 * Template Name: Work new
 */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="container container-work">
            <div class="posts">
                <div class="row projecten-row align-items-end">
                    <div class="col-sm-6 col-md-6 no-padding">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="post project-post">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile;
                        else:
                            echo "No posts found.";
                        endif;
                        ?>
                    </div>

                    <?php
                    $post_counter = 1;
                    $first_post = true;
                    global $post;
                    $args = array(
                        'category_name'  => 'work',
                        'order'          => 'name',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
                    $postslist = get_posts($args);

                    for ($i = 0; $i <= 1; $i++):
                        $post = $postslist[$i];
                        setup_postdata($post);
                        ?>
                        <div class="col-12 col-sm-3 no-padding">
                            <div class="align-self-center">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="project-img">
                                        <a href="<?= get_post_permalink(); ?>">
                                            <img src="<?= the_post_thumbnail_url(); ?>" alt="work image">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endfor;

                    echo '</div>';
                    echo '<div class="row projecten-row">';

                    for ($i = 2; $i <= count($postslist); $i++):
                        $post = $postslist[$i];
                        setup_postdata($post);
                        ?>
                        <div class="col-12 col-sm-3 no-padding">
                            <div class="align-self-center">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="project-img">
                                        <a href="<?= get_post_permalink(); ?>">
                                            <img src="<?= the_post_thumbnail_url(); ?>" alt="work image">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endfor;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

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

<?php get_footer(); ?>