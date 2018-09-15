<!DOCTYPE html>
<html class="html-body">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

</head>
<body class="body-home">

<div class="container-fluid no-padding">

<div class="fullscreen-bg">
    <video loop muted autoplay poster="<?=get_template_directory_uri() . '/video/eigenzinnig-web.jpg'?>" class="fullscreen-bg__video">
        <!-- <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg"> -->
        <source src="<?=get_template_directory_uri() . '/video/eigenzinnig-web.webm'?>" type="video/webm">
        <source src="<?=get_template_directory_uri() . '/video/eigenzinnig-web.mp4'?>" type="video/mp4">
        <source src="<?=get_template_directory_uri() . '/video/eigenzinnig-web.ogv'?>" type="video/ogg">
    </video>
</div>

<?php get_footer(); ?>
