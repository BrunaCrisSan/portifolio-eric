<?php
// Template Name: Contato
get_header();
?>

<section class="contato-g">
    <div class="container-contato">
        <div class="card">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/image/code.png" alt="">
            </div>
            <div class="right font-1">
                <h2>Meu Contato</h2>
                <div class="contact">
                    <div class="form-container">
                        <form class="form">
                            <div class="username">
                                <input type="text" placeholder="Seu nome">
                            </div>
                            <div class="useremail">
                                <input type="email" placeholder="Seu e-mail" required>
                            </div>
                            <div class="usermessage">
                                <textarea placeholder="Escreva a mensagem" required></textarea>
                            </div>
                            <div class="usersubmit">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                    <div class="address">
                        <div class="email">
                            <h4>Contato</h4>
                            <p>ericmurakawa@gmail.com</p>
                            <p>(14) 98136-6884</p>
                        </div>
                        <div class="location">
                            <h4>Localizado</h4>
                            <p>Bauru/SP,<br>Brasil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php if (!is_page('home')) { ?>
    <div class="call">
        <?php get_footer(); ?>
    </div>
<?php } ?>