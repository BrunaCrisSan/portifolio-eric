<?php
// Template Name: Conhecimentos
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="conhecimentos-g">
            <h2 class="perfil-title font-1">CONHECIMENTOS</h2>
            <div class="conhecimentos-img font-1">
                <div class="conhecimento-img-top">
                    <div>
                        <h5>HTML5</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/html.svg" alt="">
                    </div>
                    <div>
                        <h5>CSS</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/css.svg" alt="">
                    </div>
                    <div>
                        <h5>JavaScript</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/javascript.svg" alt="">
                    </div>
                    <div>
                        <h5>Laravel</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/laravel.svg" alt="">
                    </div>

                </div>
                <div class="conhecimento-img-button">
                    <div>
                        <h5>PHP</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/php.svg" alt="">
                    </div>
                    <div>
                        <h5>React</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/react.svg" alt="">
                    </div>
                    <div>
                        <h5>MySQL</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/mysql.svg" alt="">
                    </div>
                    <div>
                        <h5>GiHub</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/github.svg" alt="">
                    </div>

                </div>
            </div>
        </section>


<?php endwhile;
else : endif; ?>

<?php if (!is_page('home')) { ?>
    <section class="footer-conhecimentos">
        <footer class="footer-g">
            <div class="footer-info">
                <div class="container-info">
    
                    <div class="footer_contato">
                        <h4 class="footer-title-contato"><a href="/portfolio/Contato">Contato</a></h4>
                        <ul class="text-info">
                            <li class="text-redes"><span class="tel-img"><img src="<?php echo get_template_directory_uri(); ?>/image/tel.png" alt=""></span>
                                <p>(14) 98136-9999</p>
                            </li>
                            <li class="text-redes"><span class="email-img"><img src="<?php echo get_template_directory_uri(); ?>/image/email.png" alt=""></span>
                                <p>Ericmurakawa@gmail.com</p>
                            </li>
    
                        </ul>
                    </div>
    
                    <div class="footer_redes">
                        <h4 class="footer-title-info">Outras Informações</h4>
                        <ul class="text-info">
                            <li class="text-redes"><a href="https://www.linkedin.com/in/eric-dos-santos-m-436815244/" target="_blank"><span class="linkedin-img"><img src="<?php echo get_template_directory_uri(); ?>/image/linkedin.png" alt="Linkedin"></span>
                                    <span class="footer-linkedin-conhecimentos">Linkedin</span>
                                </a></li>
                            <li class="text-redes"><span class="local-img"><img src="<?php echo get_template_directory_uri(); ?>/image/local.png" alt=""></span>
                                <p>Bauru - SP</p>
                            </li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <div class="copy-footer">
                <div class="container-copy">
                    <p class="copy-text">Portfólio 2023 - Alguns direitos reservados.</p>
                </div>
            </div>
        </footer>

    </section>
<?php } ?>