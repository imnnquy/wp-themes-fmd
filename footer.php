<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fmd
 */

?>
    <div class="row fmd-footer">
    	<div class="col-md-1"></div>
    	<div class="col-md-7">
    		<hr>
    	</div>
    	<div class="col-md-4"></div>
    </div>
    <?php wp_footer(); ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-resize.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/carousel-3d.js"></script>
    </body>

    </html>
