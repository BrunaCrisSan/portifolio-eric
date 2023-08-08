<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Desenvolvedor, front end, back end, full stack">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Final Wordpress Header -->
</head>

<body>

    <header class="nav-header">
        <div class="nav-header__div">
            <nav class="nav__g">
                <div class="menuMobile font-1">
                    <i id="openMenu">menu</i>
                    <i id="closeMenu">X</i>
                    <div id="linksMenu">
                        <a href="/portfolio/experiencias">Experiências</a>
                        <a href="/portfolio/Conhecimentos">Conhecimentos</a>
                        <a href="/portfolio/Contato">Contato</a>
                    </div>
                </div>
                <ul class="nav__ul font-1">
                    <a class="logo-portfolio" href="/portfolio/">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/loogo.png" alt="Meuportfolio">
                    </a>

                    <li class="nav__item"><span class="bol"></span><a href="/portfolio/Conhecimentos">CONHECIMENTOS</a></li>
                    <li class="nav__item"><span class="bol"></span><a href="/portfolio/experiencias">EXPERIÊNCIAS</a></li>
                    <li class="nav__item"><span class="bol"></span><a href="/portfolio/Contato">CONTATO</a></li>
                </ul>
            </nav>
        </div>
    </header>