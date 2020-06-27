<?php get_header(); ?>
<style>
    .team__intro-image { background-image: url(<?php the_field('equipo_imagen_fondo'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; padding-bottom: 40%; -webkit-transition: all 0s ease, background 0.3s ease, color 0.3s ease, opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1), -webkit-transform 1s cubic-bezier(0.645, 0.045, 0.355, 1); transition: all 0s ease, background 0.3s ease, color 0.3s ease, opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1), -webkit-transform 1s cubic-bezier(0.645, 0.045, 0.355, 1); -o-transition: all 0s ease, background 0.3s ease, color 0.3s ease, opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1), transform 1s cubic-bezier(0.645, 0.045, 0.355, 1); transition: all 0s ease, background 0.3s ease, color 0.3s ease, opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1), transform 1s cubic-bezier(0.645, 0.045, 0.355, 1); transition: all 0s ease, background 0.3s ease, color 0.3s ease, opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1), transform 1s cubic-bezier(0.645, 0.045, 0.355, 1), -webkit-transform 1s cubic-bezier(0.645, 0.045, 0.355, 1); }
    .team__intro-image.hidden { opacity: 0; -webkit-transform: translateY(30px); -ms-transform: translateY(30px); transform: translateY(30px); }

    .team__intro-image .team__intro-image-hover { background-image: url(<?php the_field('equipo_imagen_fondo'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat; position: absolute; width: 100%; height: 100%; top: 0; left: 0; opacity: 0; -webkit-transition: opacity .2s ease; -o-transition: opacity .2s ease; transition: opacity .2s ease; }
    .team__intro-image .team__intro-image-hover:hover { opacity: 1; }
</style>
<?php while (have_posts()): the_post(); ?>
    <div class="global__wrapper" data-barba="container" data-barba-namespace="equipo">
        <div class="global__intro-wrapper text-center d-flex align-items-center hidden" data-nmb>
            <div class="global__intro-wrapper-background" style="background-image: url(<?php the_field('fondo_equipo'); ?>);"></div>
            <!--<video id="videoBG" poster="poster.JPG" autoplay muted loop>
              <source src="source/footage.mp4" type="video/mp4">
            </video>-->

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

            <div class="global__intro-arrow animate-on-load hidden">
                <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="global__animate-intro-arrow global__arrow down" data-nm-invert>
            </div>
        </div>

        <div class="team__intro-image hidden">
            <div class="team__intro-image-hover"></div>
        </div>

        <div class="team__info-options" data-nmb-lighten>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-10 offset-lg-1 offset-md-0 offset-1">
                        <div class="animate-on-load hidden">
                            <div class="team__info-option">
                                <h2 class="team__info-option-title global__subtitle"><?php the_field('titulo_inspira'); ?></h2>
                                <div class="team__info-option-description global__paragraph">
                                    <?php the_field('contenido_inspira'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-10 offset-md-0 offset-1">
                        <div class="animate-on-load hidden">
                            <div class="team__info-option">
                                <h2 class="team__info-option-title global__subtitle"><?php the_field('titulo_somos'); ?></h2>
                                <div class="team__info-option-description global__paragraph">
                                    <?php the_field('contenido_somos'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-5 col-md-6 col-10 offset-lg-1 offset-1 offset-md-0">
                        <div class="animate-on-load hidden">
                            <div class="team__info-option">
                                <h2 class="team__info-option-title global__subtitle"><?php the_field('titulo_mision'); ?></h2>
                                <div class="team__info-option-description global__paragraph">
                                    <?php the_field('contenido_mision'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-10 offset-md-0 offset-1">
                        <div class="animate-on-load hidden">
                            <div class="team__info-option">
                                <h2 class="team__info-option-title global__subtitle"><?php the_field('titulo_cultura'); ?></h2>
                                <div class="team__info-option-description global__paragraph">
                                    <?php the_field('contenido_cultura'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="team__director-wrapper hidden" data-nmb-lighten>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-9 col-lg-11 col-md-12 col-10">
                        <div class="team__director-card hidden">
                            <div class="team__director-image" style="background-image: url(<?php the_field('imagen_equipo_ceo'); ?>);">
                                <div class="team__director-image"></div>
                            </div>

                            <div class="team__director-info" data-nmb>
                                <p class="team__director-job animate-on-load hidden"></p>
                                <h3 class="team__director-name animate-on-load hidden"><?php the_field('titulo_ceo'); ?></h3>
                                <div class="team__director-bio global__paragraph animate-on-load hidden">
                                    <?php the_field('descripcion_ceo'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__list-wrapper" style="
background: #dcdcdc;
">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="team__list-title global__subtitle global__split-words" style="margin-bottom: 20px; margin-top: 20px;">
                            Socios co-fundadores
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <?php if( have_rows('cofundadores_equipo') ): ?>
                      <?php  while ( have_rows('cofundadores_equipo') ) : the_row(); ?>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-10">
                        <div class="team__list-item animate-on-load hidden">
                            <div class="team__list-item-image" style="background-image: url(<?php the_sub_field('imagen_1_cofundadores'); ?>)">
                                <div class="team__list-item-gif" style="background-image: url(<?php the_sub_field('imagen_2_cofundadores'); ?>)"></div>
                            </div>
                            <h3 class="team__list-item-name">
                                <?php the_sub_field('nombre_cofundadores'); ?>
                            </h3>
                            <a href="" class="team__list-item-mail">
                                <?php the_sub_field('email_cofundadores'); ?>
                            </a>
                            <p class="team__list-item-area"></p>
                        </div>
                    </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <div class="team__beliefs-wrapper hidden" data-nmb-lighten>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="team__beliefs-title global__subtitle global__split-words">
                            Nuestras creencias
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="1">
                                <?php the_field('creencia_1_equipo'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-xl-1 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="2">
                                <?php the_field('creencia_2_equipo'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-xl-1 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="3">
                                <?php the_field('creencia_3_equipo'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="4">
                                <?php the_field('creencia_4_equipo'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-xl-1 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="5">
                                <?php the_field('creencia_5_equipo'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 offset-xl-1 offset-md-0 offset-2 d-flex">
                        <div class="team__belief-item animate-on-load hidden">
                            <p class="team__belief-item-description" data-number="6">
                                <?php the_field('creencia_6_equipo'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
