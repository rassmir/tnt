<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
<div class="global__wrapper" data-barba="container" data-barba-namespace="inicio">
    <div class="home__intro-cover d-flex" data-nmb data-header-trigger>
        <div class="home__intro-background hidden">
            <div style="position: fixed; z-index: -99; width: 100%; height: 100%;">
                <video preload="" tabindex="-1" style="" src="<?php the_field('video_inicio'); ?>" height="100%" autoplay muted loop></video>

                <svg width="442" height="101" viewBox="0 0 442 101" fill="none" xmlns="http://www.w3.org/2000/svg" class="home__intro-background-outline hidden">
                    <style type="text/css">
                        .st0{fill:none;stroke:#FFFFFF;stroke-width:5;stroke-miterlimit:10;}
                    </style>
                    <g>
                        <path class="st0" d="M18.2,84.9V18.1h38.6c4.7,0,9.1,0.8,13,2.4c4,1.6,7.4,3.8,10.3,6.7c2.9,2.9,5.1,6.3,6.7,10.3
		c1.6,4,2.4,8.4,2.4,13.3c0,4.8-0.8,9.3-2.4,13.5c-1.6,4.2-3.9,7.8-6.7,10.8c-2.9,3-6.3,5.4-10.3,7.2c-4,1.7-8.3,2.6-13,2.6H18.2z
		 M56.9,73.2c3,0,5.8-0.6,8.3-1.7c2.5-1.1,4.7-2.6,6.6-4.5c1.9-1.9,3.3-4.2,4.4-6.9c1-2.7,1.6-5.6,1.6-8.7c0-3.1-0.5-6-1.6-8.7
		c-1-2.7-2.5-4.9-4.4-6.8c-1.9-1.9-4.1-3.4-6.6-4.5c-2.5-1.1-5.3-1.6-8.3-1.6H29.8v43.4H56.9z"/>
                        <path class="st0" d="M99.5,84.9V18.1h11.7v66.7H99.5z"/>
                        <path class="st0" d="M153.9,84.9c-4.7,0-8.9-0.9-12.9-2.6c-3.9-1.7-7.4-4.1-10.3-7.2c-2.9-3-5.2-6.6-6.8-10.8
		c-1.6-4.2-2.4-8.7-2.4-13.5c0-4.9,0.8-9.4,2.4-13.4c1.6-4,3.9-7.5,6.8-10.3c2.9-2.8,6.3-5,10.3-6.6c3.9-1.6,8.2-2.3,12.9-2.3H190
		v11.7h-36.2c-3,0-5.8,0.5-8.3,1.6c-2.5,1.1-4.7,2.6-6.6,4.5c-1.8,1.9-3.3,4.2-4.3,6.8c-1,2.6-1.6,5.5-1.6,8.7c0,3.1,0.5,6,1.6,8.7
		c1,2.7,2.5,5,4.3,6.9c1.8,1.9,4,3.4,6.6,4.5c2.5,1.1,5.3,1.7,8.3,1.7h28.5V55.9h-30.1V46h41.8v38.8H153.9z"/>
                        <path class="st0" d="M205.5,84.9V18.1h11.7v66.7H205.5z"/>
                        <path class="st0" d="M250.8,84.9V29.8h-25.3V18.1h62.3v11.7h-25.3v55.1H250.8z"/>
                        <path class="st0" d="M352.5,84.9l-10-16.8h-31.6l5.5-9.5h20.5l-14.9-25l-30.3,51.2h-13.3L316.8,21c0.7-1.2,1.5-2.1,2.4-2.8
		c0.9-0.7,2-1,3.3-1c1.3,0,2.4,0.3,3.3,1c0.9,0.7,1.7,1.6,2.3,2.8l38.5,63.9H352.5z"/>
                        <path class="st0" d="M373.7,84.9V18.1h11.7v55.1h44.9v11.7H373.7z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="container d-flex align-items-end">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-11">
                    <div class="home__intro-block-info">
                        <h1 class="global__title global__split-words">
                            <?php the_title(); ?>
                        </h1>

                        <div class="home__intro-animate-elements">
                            <div class="global__separator animate-on-load hidden" data-nmb-white></div>

                            <p class="global__paragraph animate-on-load hidden">
                                <?php the_content(); ?>
                            </p>

                            <div class="home__intro-arrow-container animate-on-load hidden ">
                                <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="home__intro-arrow global__animate-intro-arrow global__arrow down" data-nm-invert>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                    <div class="home__intro-foresight hidden">
                        <h1 class="home__intro-foresight-title">
                            DIGITAL
                        </h1>

                        <p class="home__intro-foresight-subtitle global__paragraph">

                        </p>

                        <p class="home__intro-foresight-description global__paragraph">
                            Tenemos la enorme MISIÓN de DIGITALIZAR
                        </p>

                        <div class="home__intro-foresight-separator" data-nmb-white></div>

                        <p class="home__intro-foresight-description global__paragraph">
                            a 1 millón
                            de emprendedores.
                            De esta forma contribuimos con la VISIÓN de llegar a tener
                            una latinoamérica llena de emprendedores digitales.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home__stadistics-wrapper hidden" data-nmb-lighten>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="home__stadistic-item-wrapper hidden">
                        <div class="home__stadistic-item">
                            <div class="home__stadistic-number" data-count="<?php the_field('titulo_pais'); ?>">3</div>
                            <div class="home__stadistic-label">países</div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="home__stadistic-item-wrapper hidden">
                        <div class="home__stadistic-item">
                            <div class="home__stadistic-number" data-count="<?php the_field('titulo_proyecto'); ?>" data-plus>0</div>
                            <div class="home__stadistic-label">proyectos</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="home__stadistic-item-wrapper hidden">
                        <div class="home__stadistic-item">
                            <div class="home__stadistic-number" data-count="<?php the_field('titulo_anios'); ?>">0</div>
                            <div class="home__stadistic-label">años de experiencia</div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="home__stadistic-item-wrapper hidden">
                        <div class="home__stadistic-item">
                            <div class="home__stadistic-number" data-count="<?php the_field('titulo_miembros'); ?>" data-plus>0</div>
                            <div class="home__stadistic-label">Clientes satisfechos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home__projects-wrapper hidden" data-nmb>
        <div class="home__projects-bg-image" style="background-image: url(<?php the_field('imagen_proyectos'); ?>);"></div>

        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-8 col-11">
                    <div class="home__projects-info" data-nmc>
                        <div class="row">
                            <div class="col-lg-8 col-10 offset-lg-2 offset-sm-0 offset-1">

                                <h3 class="global__label home__projects-label animate-on-load hidden">Lo que hacemos</h3>

                                <h2 class="global__subtitle global__split-words">
                                    <?php the_field('titulo_proyectos'); ?>
                                </h2>

                                <div class="global__separator animate-on-load hidden" data-nmb-white></div>
                                <?php the_field('contenido_proyectos'); ?>
                                <div class="global__paragraph animate-on-load hidden">

                                </div>

                                <div class="animate-on-load hidden">
                                    <a href="#" class="global__btn">
                                        <span class="global__btn-label">Conocer más</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home__anticrisis-service-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-4 col-md-5 col-9 offset-sm-0 offset-1">
                    <div class="global__section-header d-flex align-items-center hidden">
                        <div class="global__section-title">

                        </div>

                        <div class="global__section-title-separator global__separator white"></div>

                    </div>

                    <h2 class="global__subtitle global__split-words">
                        <?php the_field('titulo_servicios'); ?>
                    </h2>

                    <div class="home__anticrisis-service-cta animate-on-load hidden">
                        <a href="#" class="global__btn white open-popup">
                            <span class="global__btn-label">¡Estoy interesado!</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-5 col-sm-12 offset-xl-0 offset-md-1 offset-sm-0">
                    <div class="home__anticrisis-service-info">

                        <iframe width="560" height="315" src="<?php the_field('url_proyectos'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home__expertise-wrapper" data-nmb-lighten="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-9 offset-sm-0 offset-1 home__expertise-header progress-line">
                    <div class="global__section-header d-flex align-items-center">
                        <div class="global__section-title">
                            Experiencia
                        </div>

                        <div class="global__section-title-separator global__separator" data-nmb-white=""></div>

                        <div class="global__section-subtitle global__label">
                            Nuestros servicios
                        </div>
                    </div>

                    <h2 style = "font-size: 45px;" class="global__subtitle global__split-words">
                        <div class="global__word-wrapper">
                            <span><?php the_field('titulo_principal_nosotros'); ?></span>
                        </div>
                </div>
            </div>
        </div>

        <div class="home__expertise-options progress-line">
            <div class="container">
                <div class="row">
                <?php
                $inicioGrupo=get_field('inicio_grupo_contenido');
                    if ($inicioGrupo): ?>
                    <div class="col-lg-3 col-md-8 col-sm-10 offset-lg-1 offset-md-2 offset-sm-1 home__expertise-option-wrapper progress-line">
                        <div class="home__expertise-option">
                                <div class="home__expertise-option-title">
                                    <?php echo $inicioGrupo['titulo_propuesta'] ?>
                                </div>
                                <div class="home__expertise-option-subtitle">
                                    <?php echo $inicioGrupo['subtitulo_propuesta'] ?>
                                </div>
                                <div class="home__expertise-option-description global__paragraph">
                                    <?php echo $inicioGrupo['contenido_propuesta'] ?>
                                </div>
                                <a href="#" class="global__arrow-link">
                                    <span class="global__underline-link">Conoce más</span>
                                    <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="global__arrow-link-arrow global__arrow">
                                </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8 col-sm-10 offset-lg-1 offset-md-2 offset-sm-1 home__expertise-option-wrapper progress-line">
                        <div class="home__expertise-option">
                            <div class="home__expertise-option-title">
                                <?php echo $inicioGrupo['titulo_valor'] ?>
                            </div>

                            <div class="home__expertise-option-subtitle">
                                <?php echo $inicioGrupo['subtitulo_valor'] ?>
                            </div>

                            <div class="home__expertise-option-description global__paragraph">
                                <?php echo $inicioGrupo['contenido_valor'] ?>
                            </div>

                            <a href="#" class="global__arrow-link">
                                <span class="global__underline-link">conoce más</span>

                                <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="global__arrow-link-arrow global__arrow">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8 col-sm-10 offset-lg-1 offset-md-2 offset-sm-1 home__expertise-option-wrapper progress-line">
                        <div class="home__expertise-option">
                            <div class="home__expertise-option-title">
                                <?php echo $inicioGrupo['titulo_conversion'] ?>
                            </div>

                            <div class="home__expertise-option-subtitle">
                                <?php echo $inicioGrupo['subtitulo_conversion'] ?>
                            </div>

                            <div class="home__expertise-option-description global__paragraph">
                                <?php echo $inicioGrupo['contenido_conversion'] ?>
                            </div>

                            <a href="#" class="global__arrow-link">
                                <span class="global__underline-link">Conoce más</span>
                                <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="global__arrow-link-arrow global__arrow">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<? endwhile; ?>
<?php get_footer(); ?>
