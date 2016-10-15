<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fmd
 */

get_header(); ?>
    <div class="row fmd-body">
        <div class="col-md-1 fmd-menu">
            <div class="sidebar-wrapper margin-top-30">
                <nav>
                    <ul>
                        <li>
                            <a href="#"><span >Accueil</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Réalisations</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Particuliers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Artisans</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Blog</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-10 fmd-banner">
            <div class="wrapper-carousel-3d">
                <div data-carousel-3d=""> <img src="<?php echo get_template_directory_uri(); ?>/images/left.png" data-carousel-3d-left=""> <img src="<?php echo get_template_directory_uri(); ?>/images/right.png" data-carousel-3d-right="">
                    <ul data-carousel-3d-children="">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-01.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-02.png"></li>
                        <li selected=""><img src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-03.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-04.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-05.png"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <?php
get_footer();
