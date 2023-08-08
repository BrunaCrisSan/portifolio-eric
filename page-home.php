<?php
// Template Name: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $experiencias = get_page_by_path('experiencias'); ?>

        <section class="banner-top">
            <div class="ellipse-foto">
                <div class="ellipse"></div>
                <div class="banner-foto"><img src="<?php echo get_template_directory_uri(); ?>/image/fotoamor.jpeg" alt=""></div>
            </div>
            <div class="banner-texto font-1">
                <h1><?php the_field('nome_sobrenome'); ?></h1>
                <h2><?php the_field('title_portfolio'); ?><br><?php the_field('subtitle_portfolio'); ?></h2>
                <p><?php the_field('texto_banner_portfolio'); ?></p>
                <button class="btn-g font-1">
                    <h4>Download CV</h4>
                    <a class="circle" href="<?php echo get_template_directory_uri() . '/pdfs/curriculo-eric-murakawa.pdf'; ?>">
                        <img class="download" src="<?php echo get_template_directory_uri(); ?>/image/download.svg" alt="">
                    </a>

                </button>
            </div>
        </section>
        <section class="perfil-g">
            <h2 class="perfil-title font-1"><?php the_field('title_perfil'); ?></h2>
            <div class="text-perfil">
                <div class="perfil-text-left font-1">
                    <p><span class="bol"><?php the_field('qualidades_perfil'); ?></span></p>
                    <p><span class="bol"><?php the_field('qualidades_perfil1'); ?></span></p>
                    <p><span class="bol"><?php the_field('qualidades_perfil2'); ?></span></p>
                    <p><span class="bol"><?php the_field('qualidades_perfil3'); ?></span></p>
                </div>
                <div class="perfil-text-right font-1">
                    <p><span class="bol"><?php the_field('qualidades_perfil4'); ?></span></p>
                    <p><span class="bol"><?php the_field('qualidades_perfil5'); ?></span></p>
                    <p><span class="bol"><?php the_field('qualidades_perfil6'); ?></span></p>
                </div>
        </section>

<?php endwhile;
else : endif; ?>

<?php include(TEMPLATEPATH . "./page-conhecimentos.php"); ?>
<?php include(TEMPLATEPATH . "./inc/conteudo.php"); ?>



<?php get_footer(); ?>