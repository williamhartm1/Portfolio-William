<?php get_header(); ?>


<!-- <div class="row">
    <div class="container">
        <div class="posts">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post">

                    <p><?php the_content(); ?></p>
                </div>
			<?php endwhile;
			else:
				echo "No posts found.";
			endif;
			?>
        </div>
    </div>
</div> -->

<!-- <div class="video-background">
    <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/WjuyR23sCrw?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=WjuyR23sCrw" frameborder="0" allowfullscreen></iframe>
            <iframe src="https://giphy.com/embed/9GIEZnPsCkbbfzf4Ym" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/9GIEZnPsCkbbfzf4Ym">via GIPHY</a></p>
    </div>
</div> -->

<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <!-- <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg"> -->
        <source src="/Applications/XAMPP/xamppfiles/htdocs/William/wp-content/themes/portfoliowilliam/eigenzinnig-web.webm" type="video/webm">
        <source src="/Applications/XAMPP/xamppfiles/htdocs/William/wp-content/themes/portfoliowilliam/eigenzinnig-web.mp4" type="video/mp4">
        <source src="/Applications/XAMPP/xamppfiles/htdocs/William/wp-content/themes/portfoliowilliam/eigenzinnig-web.ogv" type="video/ogg">
        
    </video>
</div>

<?php get_footer(); ?>
