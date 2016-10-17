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
                                <span>Produits</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Réalisations</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-10 fmd-banner">
            <div id="wrap">
                <div id="showcase" class="noselect"> <img class="cloud9-item" src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-01.png" alt="portes"> <img class="cloud9-item" src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-02.png" alt="stores"> <img class="cloud9-item" src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-03.png" alt="fenetre"> <img class="cloud9-item" src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-04.png" alt="portes"> <img class="cloud9-item" src="<?php echo get_template_directory_uri(); ?>/images/FMD-update-05.png" alt="stores"></div>
                <p class="title-item-container">
                    <span id="item-title-left">&nbsp;</span>
                    <span id="item-title">&nbsp;</span>
                    <span id="item-title-right">&nbsp;</span>
                </p>
<!--                 <div class="nav" class="noselect">
                    <button id="buttonLeft" class="slider-nav-button"> ← </button>
                    <button id="buttonRight" class="slider-nav-button"> → </button>
                </div> -->
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <?php
get_footer();
