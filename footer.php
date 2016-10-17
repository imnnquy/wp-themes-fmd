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
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.reflection.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cloud9carousel.js"></script>
    <script>
    $(function() {
        var showcase = $("#showcase")

        showcase.Cloud9Carousel({
            yPos: 42,
            yRadius: 48,
            buttonLeft: $("#item-title-left"),
            buttonRight: $("#item-title-right"),
            autoPlay: true,
            bringToFront: true,
            onRendered: showcaseUpdated,
            onLoaded: function() {
                showcase.css('visibility', 'visible')
                showcase.css('display', 'none')
                showcase.fadeIn(1500)
            }
        })

        function showcaseUpdated(showcase) {
            var title = $('#item-title').html(
                $(showcase.nearestItem()).attr('alt')
            )

            var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
            title.css('opacity', 0.5 + (0.5 * c))

            var leftTitle = $('#item-title-left').html(
                $(showcase.items[(showcase.nearestIndex() + showcase.items.length - 1) % showcase.items.length]).attr('alt')
            )

            var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
            title.css('opacity', 0.5 + (0.5 * c))

            var leftTitle = $('#item-title-right').html(
                $(showcase.items[(showcase.nearestIndex() + 1) % showcase.items.length]).attr('alt')
            )

            var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
            title.css('opacity', 0.5 + (0.5 * c))
        }

        // Simulate physical button click effect
        $('.slider-nav-button').click(function(e) {
            var b = $(e.target).addClass('down')
            setTimeout(function() {
                b.removeClass('down')
            }, 80)
        })

        $(document).keydown(function(e) {
            //
            // More codes: http://www.javascripter.net/faq/keycodes.htm
            //
            switch (e.keyCode) {
                /* left arrow */
                case 37:
                    $('#item-title-left').click()
                    break

                    /* right arrow */
                case 39:
                    $('#item-title-right').click()
            }
        })
    })
    </script>
    </body>

    </html>
