<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <title>TNT Agencia Digital</title>
    <meta name="description" content="" />
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico"/>
    <?php wp_head(); ?>
</head>
<body data-theme="light" data-barba="wrapper">

<div class="global__loader-wrapper">
    <div class="global__loader-top-line"></div>

    <div class="global__loader-overlay white" data-nmb-gray></div>
    <div class="global__loader-overlay black" data-nmb>
        <!-- <div class="global__loader"></div> -->

        <div class="global__loader-info">


        </div>
    </div>
</div>

<div class="global__menu-overlay d-flex align-items-center" data-nmb>
    <img src="<?php echo get_template_directory_uri();?>/img/close-menu.svg" alt="" class="global__menu-overlay-close" data-nm-invert>

    <div class="global__menu-overlay-trigger hidden d-flex flex-column justify-content-center" data-nmb-lighten>
        <img src="<?php echo get_template_directory_uri();?>/img/open-menu.svg" alt="">

    </div>

    <div class="container global__menu-overlay-header">
        <div class="row">
            <div class="col-4 offset-lg-1 offset-0">
                <div class="global__menu-logo-wrapper">
                    <a href="<?php echo esc_url( '/' )?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-main.png" >
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12">
                <img src="<?php echo get_template_directory_uri();?>/img/arrow-black.svg" alt="" class="global__menu-left-arrow global__arrow left" data-nm-invert>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="global__menu-category">
                    <div class="global__menu-category-label animate-on-load hidden">
                        Lo que ofrecemos

                        <div class="global__menu-category-line" data-nmb-white></div>
                    </div>

                    <div class="global__menu-category-list">
<!--                        <a href="index.html" class="global__title global__menu-category-section animate-on-load hidden current">-->
<!--                            INICIO            </a>-->
<!--                        <a href="exp.html" class="global__title global__menu-category-section animate-on-load hidden ">-->
<!--                            PERICIA       </a>-->
<!--                        <a href="proyectos.html" class="global__title global__menu-category-section animate-on-load hidden ">-->
<!--                            PROYECTOS           </a>-->
                        <?php

                        $args = array(
                            'theme_location' => 'menu-principal1',
                            'container' => false,
                            'echo' =>false,
                            'items_wrap'      => '%3$s',
                            'depth'           => 0,
                        );
                        echo strip_tags(wp_nav_menu( $args ), '<a>' );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="global__menu-category">
                    <div class="global__menu-category-label animate-on-load hidden">
                        Conoce la agencia

                        <div class="global__menu-category-line" data-nmb-white></div>
                    </div>

                    <div class="global__menu-category-list">
<!--                        <a href="equipo.html" class="global__title global__menu-category-section animate-on-load hidden">-->
<!--                            EQUIPO         </a>-->
<!--                        <a href="#" class="global__title global__menu-category-section animate-on-load hidden ">-->
<!--                        </a>-->
<!--                        <a href="services.html" class="global__title global__menu-category-section animate-on-load hidden ">-->
<!--                            SERVICIOS-->
<!--                        </a>-->
<!--                        <a href="carreras.html" class="global__title global__menu-category-section animate-on-load hidden ">-->
<!--                            CARRERAS-->
<!--                        </a>-->
                        <?php

                        $args = array(
                            'theme_location' => 'menu-principal2',
                            'container' => false,
                            'echo' =>false,
                            'items_wrap'      => '%3$s',
                            'depth'           => 0,
                        );
                        echo strip_tags(wp_nav_menu( $args ), '<a>' );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>  <div class="global__header-wrapper">


    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <div class="global__header-logo-wrapper">
                    <a href="<?php esc_url( '/' )?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-main.png" alt="">
                    </a>
                </div>

                <div class="global__header-options ml-auto d-flex align-items-center">
                    <!-- <a href="#footer" class="global__header-contact scroll-target">Get in touch</a> -->

                    <!-- <div class="global__header-lang">
                    </div> -->
                    <div class="global__header-night-mode">
                        <div class="global__header-night-mode-label">

                        </div>
                        <!-- <div class="global__header-night-mode-switch">
                           <input type="checkbox" id="toggle" />
                           <label for="toggle" class="toggle-box">
                             <span>O</span>
                             <span>I</span>
                           </label>
                         </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

