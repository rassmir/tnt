<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <div class="global__wrapper" data-barba="container" data-barba-namespace="carreras">
        <div class="global__intro-wrapper text-center d-flex align-items-center hidden" data-nmb>
            <div class="global__intro-wrapper-background" style="background-image: url('<?php echo get_template_directory_uri();?>/img/careers-intro.jpg');"></div>
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

        <div class="filters-module__wrapper careers__wrapper" data-nmb-lighten>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 col-10 offset-sm-0 offset-1">
                        <div class="filters-module__sidebar-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="filters-module__sidebar-container">

                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-btn global__btn" data-categoria="All">Todos</a>
                                            <a href="#" class="filters-module__sidebar-btn global__btn" data-categoria="Otros">Otros</a>
                                        </div>

                                        <div class="animate-on-load hidden">
                                            <div class="global__separator"></div>
                                        </div>

                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="diseño grafico">
                                                Diseño gráfico Publicitario                  </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="filmaker">
                                                Filmaker                   </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="estrategia digital">
                                                Estrategia digital                   </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="programacion web">
                                                Programación Web Front / Back                   </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="ventas">
                                                Ventas              </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="cm">
                                                CM                   </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-categoria="seo-sem">
                                                SEO / SEM                   </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-9 col-12 offset-xl-1 offset-0">
                        <div class="filters-module__list">
                            <div class="row">
                                <div class="col-sm-12 col-10 offset-sm-0 offset-1">
                                    <div class="filters-module__header-wrapper animate-on-load hidden">
                                        <div class="filters-module__header-current-category animate-on-load hidden">
                                            <span>Todos los empleos</span>

                                            <span class="filters-module__header-line" data-nmb></span>
                                        </div>

                                        <div class="filters-module__header-right-text hidden">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-10 offset-sm-0 offset-1">
                                    <div class="row">

                                        <?php if( have_rows('programacion_carreras') ):
                                        while ( have_rows('programacion_carreras') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="programacion web" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>

                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_programacion_carreras'); ?>
                                                </div>

                                                <!--                                                <div class="global__career-module-type">-->
                                                <!--                                               <span class="global__career-module-type-text">-->
                                                <!--                                               Full Time-->
                                                <!--                                               </span>-->
                                                <!--                                                </div>-->

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_programacion_carreras'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_programacion_carreras'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>

                                        <?php if( have_rows('diseno_grafico') ):
                                        while ( have_rows('diseno_grafico') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="diseño grafico" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>

                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_diseño_carrera'); ?>
                                                </div>

<!--                                                <div class="global__career-module-type">-->
<!--                                               <span class="global__career-module-type-text">-->
<!--                                               Full Time-->
<!--                                               </span>-->
<!--                                                </div>-->

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_diseño_carrera'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_diseño_carrera'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>

                                        <?php if( have_rows('fil_maker') ):
                                        while ( have_rows('fil_maker') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="filmaker" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>

                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_filmaker'); ?>
                                                </div>

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_filmaker'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_filmaker'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>

                                        <?php if( have_rows('ventas_carreras') ):
                                        while ( have_rows('ventas_carreras') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="ventas" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>
                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_ventas_carreras'); ?>
                                                </div>

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_ventas_carreras'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_ventas_carreras'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php if( have_rows('cm_carreras') ):
                                         while ( have_rows('cm_carreras') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="cm" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>
                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_cm_carreras'); ?>
                                                </div>

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_cm_carreras'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_cm_carreras'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>

                                        <?php if( have_rows('estrategia_digital') ):
                                        while ( have_rows('estrategia_digital') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="estrategia digital" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>
                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_estrategia_diseño'); ?>
                                                </div>

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_estrategia_diseño'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_estrategia_diseño'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>

                                        <?php if( have_rows('seo_carreras') ):
                                            while ( have_rows('seo_carreras') ) : the_row();?>
                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="#" class="global__career-module green" data-categoria="seo-sem" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>

                                                <div class="global__career-module-title">
                                                    <?php the_sub_field('titulo_seo_carreras'); ?>
                                                </div>

                                                <div class="team__info-option-description global__paragraph">
                                                    <?php the_sub_field('contenido_seo_carreras'); ?>
                                                </div>
                                                <span class="global__career-module-type-link">
<!--                                               Me interesa! <img src="--><?php //echo get_template_directory_uri();?><!--/img/arrow-white.svg" alt="" class="global__arrow">-->
                                                    <?php the_sub_field('correo_seo_carreras'); ?>
                                                </span>
                                                <div class="filters-module__sidebar-btn global__btn"><a href="#">¿Te interesa?</a></div>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>


                                        <div class="col-12 col-md-6 animate-on-load hidden grow">
                                            <a href="../vacante/practicante-community-manager/index.html" class="global__career-module green" data-categoria="Mercadotecnia y Comunicación" data-color="#000" data-nmb>
                                                <div class="global__career-module-label">
                                                    Buscamos
                                                </div>

                                                <div class="global__career-module-title">
                                                    Practicante Community Manager                      </div>

                                                <div class="global__career-module-type">
                        <span class="global__career-module-type-text">
                          Full Time                        </span>

                                                    <span class="global__career-module-type-link">
                          Soy la persona indicada <img src="<?php echo get_template_directory_uri();?>/img/arrow-white.svg" alt="" class="global__arrow">
                        </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<?php endwhile; ?>

<?php get_footer(); ?>
