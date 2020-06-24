<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <div class="global__wrapper" data-barba="container" data-barba-namespace="proyectos">
        <div class="global__intro-wrapper text-center d-flex align-items-center hidden" data-nmb>
            <div class="global__intro-wrapper-background" style="background-image: url(<?php the_field('fondo_proyectos'); ?>);"></div>

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

        <div class="filters-module__wrapper projects__wrapper" data-nmb-lighten>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-12 col-10 offset-sm-0 offset-1">
                        <div class="filters-module__sidebar-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="filters-module__sidebar-container">

                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link active" data-tipo="all">Todos</a>
                                        </div>

                                        <div class="animate-on-load hidden">
                                            <div class="global__separator"></div>
                                        </div>

                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-tipo="ecommerce">
                                                E-COMMERCE          </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-tipo="industrial">
                                                INDUSTRIAL                  </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-tipo="pymes">
                                                PYMES                   </a>
                                        </div>
                                        <div class="animate-on-load hidden">
                                            <a href="#" class="filters-module__sidebar-link" data-tipo="distribuidoras">
                                                DISTRIBUIDORAS                    </a>
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
                                            <span>Nuestros Proyectos</span>

                                            <span class="filters-module__header-line" data-nmb-white></span>
                                        </div>

                                        <div class="filters-module__header-right-text hidden">
                                            <!-- Cursbitur sagittis -->
                                        </div>
                                    </div>
                                </div>
                                <?php if( have_rows('filtro_ecommerce') ): ?>
                                <?php  while ( have_rows('filtro_ecommerce') ) : the_row(); ?>
                                <div class="col-sm-12 col-10 offset-sm-0 offset-1">
                                    <div class="projects__item-wrapper animate-on-load hidden" data-tipo="ecommerce">
                                        <div class="projects__item-info">
                                            <div class="projects__item-location">
                                                <?php echo get_sub_field('filtro_pais')?>
                                            </div>

                                            <div class="projects__item-name">
                                                <?php echo get_sub_field('filtro_nombre_proyecto')?>
                                            </div>

                                            <div class="global__separator"></div>

                                            <div class="projects__item-type">
                                                <span class="projects__item-type-label">Tipo de proyecto</span>
                                                <strong>
                                                    <?php echo get_sub_field('filtro_proyecto')?>
                                                </strong>
                                            </div>

                                        </div>

                                        <div class="projects__item-image">
                                            <div class="w3-content w3-display-container">
                                                <?php $images = get_sub_field('filtro_galeria_repetear');
                                                  if( $images ): ?>
                                                <?php foreach( $images as $image ): ?>
                                                <img class="<?php echo get_sub_field('slug-ecommerce')?>" src="<?php echo $image['url']; ?>" style="width:100%">

                                                      <script>
                                                          function showDivs(n) {
                                                              var i;
                                                              var x = document.getElementsByClassName("<?php echo get_sub_field('slug-ecommerce')?>");
                                                              if (n > x.length) {slideIndex = 1}
                                                              if (n < 1) {slideIndex = x.length}
                                                              for (i = 0; i < x.length; i++) {
                                                                  x[i].style.display = "none";
                                                              }
                                                              x[slideIndex-1].style.display = "block";
                                                          }
                                                          var slideIndex = 1;
                                                          showDivs(slideIndex);

                                                          function plusDivs(n) {
                                                              showDivs(slideIndex += n);
                                                          }
                                                      </script>
                                                  <?php endforeach; ?>
                                                      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                                      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                                  <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                     endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endwhile; ?>
<?php get_footer(); ?>
