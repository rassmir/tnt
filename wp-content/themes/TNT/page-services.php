<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <div class="global__wrapper" data-barba="container" data-barba-namespace="data-insights">
        <div class="global__intro-wrapper text-center d-flex align-items-center hidden" data-nmb>
            <div class="global__intro-wrapper-background" style="background-image: url(<?php the_field('fondo_servicios'); ?>);"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-10 offset-lg-3 offset-md-2 offset-1">
                        <div class="global__intro-info">
                            <h1 class="global__title global__split-words">
                                <?php the_title(); ?>
                            </h1>
                            <div class="global__separator center animate-on-load hidden"></div>
                            <div class="global__paragraph animate-on-load hidden">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="data__intro-logo-wrapper">
                <div class="animate-on-load hidden">
                    <!--<img src="source/img/data-intro-logo.gif" alt="" class="data__intro-logo" data-nm-invert>-->
                </div>
            </div>
        </div>

        <div class="data__options-wrapper" data-nmb-lighten>
            <div class="container"><button class="leftButton" id="slideLeft"></button><button class="rightButton" id="slideRight"></button>
                <div class="rowA" id="container">

                    <?php while ( have_rows('slideshow_servicios') ) : the_row(); ?>
                    <div class="col-lg-4 col-sm-12 col-10 offset-sm-0 offset-1 animate-on-load hidden">
                        <a href="#<?php the_sub_field('slug-slider'); ?>" rel="modal:open" class="data__options-item">
                            <div class="data__options-item-top reports">
                                <div class="data__options-item-title">
                                    <?php the_sub_field('slide_titulo'); ?>
                                </div>

                                <div class="data__options-item-info">
                                    <p>
                                    </p>
                                </div>
                            </div>

                            <div class="data__options-item-btn global__btn">
                     <span class="global__btn-label">
                      Ver video
                       </span>
                            </div>
                        </a>
                    </div>
                        <!--MODALES-->
                        <div id="<?php the_sub_field('slug-slider'); ?>" class="modal" style=" text-align: center !important; padding: 15px; height: auto;">
                            <iframe width="720" height="460" src="<?php the_sub_field('slide_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>



    </div>


<? endwhile; ?>

<?php get_footer(); ?>
<script type="text/javascript" >
    const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');

    buttonRight.onclick = function () {
        document.getElementById('container').scrollLeft += 600;
    };
    buttonLeft.onclick = function () {
        document.getElementById('container').scrollLeft -= 600;
    };
</script>
