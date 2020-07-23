<footer id="footer" data-nmb>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-10 offset-1 global__footer-left-column">
                <div class="global__footer-title global__subtitle global__split-words">
                    ¿Que tal <br> si te suscribes?
                </div>

                <div class="global__footer-separator global__separator animate-on-load hidden"></div>

                <div class="animate-on-load hidden">
                    <div class="global__footer-newsletter-subtitle">
                        Nuestro Newsletter para ti
                    </div>

                    <div class="global__footer-newsletter-description">
                        <strong>Suscríbete</strong> <?php echo esc_html( get_option('suscribes')); ?>
                    </div>

                    <form action="#" class="global__footer-form">
                        <div class="global__footer-form-input-wrapper d-flex">
                            <input type="text" placeholder="Ingresa tu correo" class="global__footer-form-input">

                            <input type="submit" class="global__footer-form-submit" value="">
                        </div>
                    </form>
                </div>

                <div class="global__footer-follow-us">
                    <p class="global__footer-follow-us-title animate-on-load hidden">Síguenos</p>
                    <div class="global__footer-follow-us-icons animate-on-load hidden">
                        <a href="<?php echo esc_html( get_option('facebook')); ?>" class="global__footer-follow-us-icon" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>

                        <a href="<?php echo esc_html( get_option('twitter')); ?>" class="global__footer-follow-us-icon" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="<?php echo esc_html( get_option('instagram')); ?>" class="global__footer-follow-us-icon" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="<?php echo esc_html( get_option('youtube')); ?>" class="global__footer-follow-us-icon" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="<?php echo esc_html( get_option('linkedin')); ?>" class="global__footer-follow-us-icon" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-10 offset-xl-2 offset-1">
                <div class="global__footer-contact-title animate-on-load hidden">
                    ¿Y si mejor conversamos?
                </div>

                <div class="global__footer-contact-list">
                    <div class="global__footer-contact-item animate-on-load hidden">
                        <div class="global__footer-contact-item-title">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </div>

                        <a href="https://wa.me/000" class="global__footer-contact-item-content global__underline-link" target="_blank">
                            <?php echo esc_html( get_option('whatsapp')); ?>
                        </a>
                    </div>

                    <div class="global__footer-contact-item animate-on-load hidden">
                        <div class="global__footer-contact-item-title">
                            <i class="fas fa-envelope"></i>

                            <span>¿Alguna duda?</span>
                        </div>

                        <a href="mailto:info@tntagenciadigital.com" class="global__footer-contact-item-content global__underline-link">
                            <?php echo esc_html( get_option('correo')); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="global__footer-find-us animate-on-load">
        <span class="global__footer-find-us-text">Desarrollado por TNT Agencia Digital - Todos los derechos reservados</span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
