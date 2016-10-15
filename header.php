<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fmd
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="container">
            <div class="row fmd-header">
                <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" style="width: 160px;">
                </div>
                <div class="col-md-3 header-text-content">
                    <div class="input-group">
                        <input type="text" class="form-control fmd-searchbox">
                        <span class="input-group-btn">
					        <button class="btn btn-link fmd-button"><i class="glyphicon glyphicon-search"></i></button>
					     </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <div class="col-md-2 header-text-content"><a href="#" class="fmd-search-text">Nos autres marques</a></div>
                <div class="col-md-2 header-text-content">
					<button class="btn btn-link"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></button>
                	<button class="btn btn-link"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png"></button>
                	<button class="btn btn-link"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></button>
                	
                </div>
                <div class="col-md-1 header-text-content"><button class="btn btn-link pull-right"><a class="fmd-language" href="">FR/ENG</a></button></div>
                <div class="col-md-1 header-text-content"></div>
            </div>
