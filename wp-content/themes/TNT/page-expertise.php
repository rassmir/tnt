<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
<div class="global__wrapper" data-barba="container" data-barba-namespace="expertise">
    <div class="global__intro-wrapper text-center d-flex align-items-center hidden" data-nmb>
        <div class="global__intro-wrapper-background" style="background-image: url(<?php the_field('fondo_pericia'); ?>);"></div>
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
            <img src="source/img/arrow-black.svg" alt="" class="global__animate-intro-arrow global__arrow down" data-nm-invert>
        </div>
    </div>

    <div class="home__articles-wrapper hidden" data-nmb-lighten>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home__articles-title global__subtitle text-center global__split-words">
                        NUESTRO EQUIPO
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-8 col-10 offset-lg-0 offset-md-2 offset-1">
                    <div class="home__articles-item hidden">
                        <div class="home__articles-item-meta">
                            <div class="home__articles-item-source">

                            </div>
                        </div>

                        <div class="home__articles-item-title global__paragraph">
                            <?php the_field('titulo_pericia_presencia'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-8 col-10 offset-xl-1 offset-lg-0 offset-md-2 offset-1">
                    <div class="home__articles-item hidden">
                        <div class="home__articles-item-meta">
                            <div class="home__articles-item-source">

                            </div>
                        </div>

                        <div class="home__articles-item-title global__paragraph">
                            <?php the_field('titulo_pericia_equipo'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-8 col-10 offset-xl-1 offset-lg-0 offset-md-2 offset-1">
                    <div class="home__articles-item hidden last">
                        <div class="home__articles-item-meta">
                            <div class="home__articles-item-source">

                            </div>
                        </div>

                        <div class="home__articles-item-title global__paragraph">
                            <?php the_field('titulo_pericia_apertura'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services__details-wrapper d-flex" data-nmb="">
        <div class="container">
            <div class="row">
                <?php
                $periciaGrupo=get_field('pericia_nuestros_servicios');
                $pericia_filtro_titulo=$periciaGrupo['pericia_filtro_titulo'];
                $pericia_filtro_cate1=$periciaGrupo['pericia_filtro_categoria_1'];
                $pericia_filtro_cate2=$periciaGrupo['pericia_filtro_categoria_2'];
                $pericia_filtro_cate3=$periciaGrupo['pericia_filtro_categoria_3'];

                $pericia_filtro_titulo2=$periciaGrupo['pericia_filtro_titulo2'];
                $pericia_filtro2_cate1=$periciaGrupo['pericia_filtro2_categoria_1'];
                $pericia_filtro2_cate2=$periciaGrupo['pericia_filtro2_categoria_2'];
                $pericia_filtro2_cate3=$periciaGrupo['pericia_filtro2_categoria_3'];
                ?>
                <?php if( have_rows('pericia_nuestros_servicios') ) :
                    while( have_rows('pericia_nuestros_servicios') ): the_row(); ?>

                 <div class="col-lg-3 col-12">
                     <div class="services__details-sidebar">
                        <div class="services__details-sidebar-container">
                            <div class="global__section-header d-flex align-items-center animate-on-load">
                                <div class="global__section-title">
                                    Servicios
                                </div>

                                <div class="global__section-title-separator global__separator"></div>
                            </div>

                                    <div class="services__details-sidebar-title active animate-on-load" data-service="foresight-your-project">
                                        <?php echo $pericia_filtro_titulo; ?>
                                    </div>

                                    <div class="services__details-sidebar-title animate-on-load" data-service="revitalize-your-project">
                                        <?php echo $pericia_filtro_titulo2; ?>
                                    </div>
                        </div>
                    </div>
                   </div>

                  <div class="col-lg-8 col-12 offset-lg-1 offset-0">
                    <div class="service__item-wrapper first active" data-service="foresight-your-project">
                        <div class="service__details-info">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <div class="service__details-info-title global__subtitle global__split-words" style="margin-bottom: 20px;"><div class="global__word-wrapper"><span>Visualice</span></div><div class="global__word-wrapper"><span>su </span></div><div class="global__word-wrapper"><span>proyecto</span></div></div>
                                </div>

                                <div class="col-9">
                                    <div class="service__details-info-description global__paragraph animate-on-load">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service__details-info-steps">


                            <div class="service__details-step-group animate-on-load first" data-group="<?php echo $pericia_filtro_cate1; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater_1') ) : ?>
                                    <?php while( have_rows('contenido_repeater_1') ) : the_row(); ?>
                                    <div class="test col-md-9 col-sm-10 col-9">
                                        <div class="service__details-step-item first" data-step="<?php echo get_sub_field('numero_contenido_repeater_1'); ?>">
                                            <div class="service__details-step-title">
                                                   <?php echo get_sub_field('titulo_contenido_repeater_1'); ?>
                                            </div>
                                            <div class="service__details-step-info">
                                                <div class="service__details-step-info-icon" data-step-info="Identificamos los competidores de la zona y exploramos proyectos construidos, en construcción y en planeación. Estudiamos el mejor uso de un predio, evaluamos las oportunidades de inversión. Producto recomendado para expertos en el medio.">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                </div>

                                                <span class="service__details-step-info-title"><?php echo get_sub_field('descripcion_contenido_repeater_1'); ?></span>
                                            </div>

                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="service__details-step-group animate-on-load" data-group="<?php echo $pericia_filtro_cate2; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater_2') ) : ?>
                                        <?php while( have_rows('contenido_repeater_2') ) : the_row(); ?>
                                    <div class="test col-md-9 col-sm-10 col-9">
                                        <div class="service__details-step-item" data-step="<?php echo get_sub_field('numero2_contenido_repeater_1'); ?>">
                                            <div class="service__details-step-title">
                                                <?php echo get_sub_field('titulo_contenido_repeater_2'); ?>
                                            </div>

                                            <div class="service__details-step-info">
                                                <div class="service__details-step-info-icon" data-step-info="Desarrollamos la estrategia comercial y de marketing para asegurar el éxito del proyecto desde antes de su lanzamiento al público hasta lograr el 100% de las ventas.">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                </div>

                                                <span class="service__details-step-info-title">
                                                <?php echo get_sub_field('descripcion_contenido_repeater_2'); ?>
                                               </span>
                                            </div>
                                        </div>
                                    </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="service__details-step-group animate-on-load" data-group="<?php echo $pericia_filtro_cate3; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater_3') ) : ?>
                                        <?php while( have_rows('contenido_repeater_3') ) : the_row(); ?>
                                            <div class="test col-md-9 col-sm-10 col-9">
                                                <div class="service__details-step-item" data-step="<?php echo get_sub_field('numero3_contenido_repeater_1'); ?>">
                                                    <div class="service__details-step-title">
                                                        <?php echo get_sub_field('titulo_contenido_repeater_3'); ?>
                                                    </div>

                                                    <div class="service__details-step-info">
                                                        <div class="service__details-step-info-icon" data-step-info="Desarrollamos la estrategia comercial y de marketing para asegurar el éxito del proyecto desde antes de su lanzamiento al público hasta lograr el 100% de las ventas.">
                                                            <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                        </div>

                                                        <span class="service__details-step-info-title">
                                                <?php echo get_sub_field('descripcion_contenido_repeater_3'); ?>
                                               </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="service__steps-title animate-on-load">

                            </div>

                            <div class="animate-on-load">
                                <a href="#/" class="global__btn">
                                    <span class="global__btn-label">Me interesa</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="service__item-wrapper" data-service="revitalize-your-project">
                        <div class="service__details-info">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <div class="service__details-info-title global__subtitle global__split-words" style="margin-bottom: 20px;">
                                        <div class="global__word-wrapper"><span>Visualice</span></div>
                                        <div class="global__word-wrapper"><span>Su</span></div>
                                        <div class="global__word-wrapper"><span>Proyecto</span></div></div>
                                </div>
                            </div>
                        </div>

                        <div class="service__details-info-steps">
                            <div class="service__steps-title animate-on-load">

                            </div>

                            <div class="service__details-step-group animate-on-load first" data-group="<?php echo $pericia_filtro2_cate1; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater2_1') ) : ?>
                                        <?php while( have_rows('contenido_repeater2_1') ) : the_row(); ?><br>
                                    <div class="test col-md-9 col-sm-10 col-9">
                                        <div class="service__details-step-item first" data-step="<?php echo get_sub_field('numero_contenido_repeater2_1'); ?>">
                                            <div class="service__details-step-title">
                                                <?php echo get_sub_field('titulo_contenido_repeater2_1'); ?>
                                            </div>

                                            <div class="service__details-step-info">
                                                <div class="service__details-step-info-icon" data-step-info="Puntualizamos las debilidades y áreas de oportunidad de un proyecto cuyo resultado comercial no ha cumplido las expectativas prospectadas. Analizamos y evaluamos el posicionamiento, producto nuclear, ampliado, entre otras variables para la comercialización exitosa. Producto recomendado para proyectos que necesitan de un diagnóstico, actualización y evaluación de su relación con la oferta y demanda del mercado.">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                </div>

                                                <span class="service__details-step-info-title">
                                                    <?php echo get_sub_field('descripcion_contenido_repeater2_1'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="service__details-step-group animate-on-load" data-group="<?php echo $pericia_filtro2_cate2; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater2_2') ) : ?>
                                        <?php while( have_rows('contenido_repeater2_2') ) : the_row(); ?>
                                    <div class="test col-md-9 col-sm-10 col-9">
                                        <div class="service__details-step-item" data-step="<?php echo get_sub_field('numero2_contenido_repeater2_1'); ?>">
                                            <div class="service__details-step-title">
                                                <?php echo get_sub_field('titulo_contenido_repeater2_2'); ?>
                                            </div>
                                            <div class="service__details-step-info">
                                                <div class="service__details-step-info-icon" data-step-info="Desarrollamos la estrategia comercial y de marketing para asegurar el éxito del proyecto tomando como insumo las recomendaciones del Diagnóstico Comercial para incrementar las ventas.">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                </div>
                                                <span class="service__details-step-info-title">
                                                    <?php echo get_sub_field('descripcion_contenido_repeater2_2'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="service__details-step-group animate-on-load" data-group="<?php echo $pericia_filtro2_cate3; ?>">
                                <div class="row d-flex justify-content-center">
                                    <?php if( have_rows('contenido_repeater2_3') ) : ?>
                                        <?php while( have_rows('contenido_repeater2_3') ) : the_row(); ?>
                                            <div class="test col-md-9 col-sm-10 col-9">
                                                <div class="service__details-step-item" data-step="<?php echo get_sub_field('numero3_contenido_repeater2_1'); ?>">
                                                    <div class="service__details-step-title">
                                                        <?php echo get_sub_field('titulo_contenido_repeater3_3'); ?>
                                                    </div>
                                                    <div class="service__details-step-info">
                                                        <div class="service__details-step-info-icon" data-step-info="Desarrollamos la estrategia comercial y de marketing para asegurar el éxito del proyecto tomando como insumo las recomendaciones del Diagnóstico Comercial para incrementar las ventas.">
                                                            <img src="<?php echo get_template_directory_uri();?>/img/service-info-icon.svg" alt="">
                                                        </div>
                                                        <span class="service__details-step-info-title">
                                                    <?php echo get_sub_field('descripcion_contenido_repeater3_3'); ?>
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="animate-on-load">
                                <a href="#/" class="global__btn">
                                    <span class="global__btn-label">Me interesa</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <? endwhile; ?>
<?php get_footer(); ?>
<!--<script type='text/javascript'defer src='https://unpkg.com/@barba/core?ver=5.4.1.1590595645'></script>-->
<!--<script src="--><?php //echo get_template_directory_uri().'/js/libs/slick.min.js'?><!--"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri().'/js/libs/jquery.selectric.min.js'?><!--"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri().'/js/main2d2e.js'?><!--"></script>-->
