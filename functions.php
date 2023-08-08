<?php

// Funções para Limpar o Header
// Remover ações que adicionam links no cabeçalho
function remove_default_wp_head_actions(){
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'start_post_rel_link', 10);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
}

add_action('init', 'remove_default_wp_head_actions');

// Funções remove comentário
function remove_item_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('get-shortlink');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('updates');
}
add_action('wp_before_admin_bar_render', 'remove_item_admin_bar');

//desativar alguns itens na barra de administração
function remove_admin_bar_links(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('new-content');      // Remove the 'add new' button
	$wp_admin_bar->remove_menu('comments');         // Remove the comments bubble
	$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

//CSS Externo para wordpress
function custom_admin_bar_style(){
	// Substitua 'caminho-do-arquivo.css' pelo caminho absoluto do seu arquivo CSS externo.
	wp_enqueue_style('custom-admin-bar-style', get_template_directory_uri() . '/scss/_custom-admin.scss', array(), '1.0');
}
add_action('admin_enqueue_scripts', 'custom_admin_bar_style');


//Crie itens personalizados do painel de administração do WordPress
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets(){
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'DASHBOARD', 'custom_dashboard_help');
}
function custom_dashboard_help(){
	// LINHA COM CABEÇALHO
	echo '
	<div class="default-container">
	<h2>PRINCIPAIS ATALHOS</h2>
	<hr>
	<p>Aqui estão os principais acessos para você editar suas páginas. Alterar textos, imagens e videos. </p>
		</div>';

	// COLUNAS COM ATALHOS	
	echo '<div class="icon-container"> 
	
  	<div class="column">
	<a href="/portfolio/wp-admin/edit.php?post_type=page" class="edit-pages">Editar páginas</a>
	</div>
		<div class="column "><a href="/portfolio/wp-admin/post-new.php?post_type=page" class="add">Adicionar novas páginas</a></div>
		<div class="column"><a href="/portfolio/wp-admin/edit.php" class="edit-posts">Ver Todos os Posts</a></div>
		<div class="column"><a href="/portfolio/wp-admin/post-new.php" class="add">Adicionar novos posts</a></div>
		<div class<div class="column"><a href="/portfolio/wp-admin/edit.php?post_type=acf-field-group" class="edit-products">ACF custom</a></div>
		<div class="column"><a href="/wp-admin/post-new.php?post_type=page" class="add">Adicionar novos produtos</a></div>
		<div class="column"><a href="/wp-admin/edit.php?post_type=shop_order" class="edit-orders">pedidos</a></div>
		<div class="column"><a href="/portfolio/wp-admin/index.php" class="edit-menu">Navegação</a></div>
  	</div>';

	// LINHA COM CABEÇALHO
	echo '<div class="default-container"><h2>VIDEO TUTORIAIS</h2><hr></div>';
	// COLUNAS COM VÍDEOS	
	echo '<div class="video-container">
  
  	<div class="video-column">
	<iframe width="100%" height="315" src="https://www..." title="Woocomemrce pricing rules" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Woocommerce pricing rules
	</div>
  
	<div class="video-column"><iframe width="100%" height="315" src="https://www..."  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Orders CSV export</div>
	
	<div class="video-column"><iframe width="100%" height="315" src="https://www..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Block visibility options</div>
	  
	<div class="video-column"><iframe width="100%" height="315" src="https://www..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Reusable blocks management</div>

</div>';

	// COLUNA COM FORMULÁRIO DE CONTATO	
	echo '<div class="default-container">
	<h2>CONTATOS</h2><hr>
	<p>Telefone: (14) 8888 8888 | email@email.com</p>
		</div>';
	echo do_shortcode('<div class="default-container">
	<button class="button-style"><a href="/portfolio/Contato">Contato</a></button> 
	</div>');
}

//Style personalizados do painel de admin do wordpress
// Adicionar painel personalizado com estilos
add_action('admin_head', 'custom_dashboard');
function custom_dashboard(){

	echo '<style>
 @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap");

/* Tornar o painel de largura total */
#wpbody-content #dashboard-widgets #postbox-container-1 {
    width: 100%;
}

/* Remover borda padrão da coluna do painel */
.postbox {
border: none;
}

/* Personalizar colunas */
.icon-container p { /* regular text */
	font-size: 16px;
	text-align: center;
}  
hr { /* divisor */
  height: 3px;
  background: #ebebeb;
  border: none;
  outline: none;
  width:20%;
  margin:1em auto;
  position: relative;
}
iframe {
margin-bottom: 1em;
}
.icon-container { /* personalizar colunas de atalho de ícone. Adicione ou remova 1fr para adicionar ou remover colunas */
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr; / * four columns */
  padding: 20px;
  text-align: center;
  font-family: "Poppins", sans-serif;;
}
.video-container {  /* personalizar colunas de vídeo */
  display: grid;
  grid-template-columns: 1fr 1fr ; /*duas colunas*/
  padding: 20px;
  text-align: center;
  font-family: "Ubuntu", sans-serif;
}
.default-container {  /* personalize contêineres de cabeçalho e formulário de contato */
  display: grid;
  grid-template-columns: 1fr ; /* uma coluna */
  padding: 20px 20px 0px 20px;
  text-align: center;
  font-family: "Poppins", sans-serif;
}
.column, .video-column {
 box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

@media (max-width: 520px) { /* para telas de até 520px. Modifica todos os tipos de contêiner */
  .icon-container, .video-container, .default-container {
    grid-template-columns: none;
	padding: 0px;
  }
}
@media (min-width: 521px) and (max-width: 767px) { /* para telas entre 521 e 775px. Modifica apenas colunas de atalho de ícone */
  .icon-container {
    grid-template-columns: 1fr 1fr;
	padding: 0px;
  }
}
@media (min-width: 768px) and (max-width: 990px) { /* para telas entre 786 e 990px. Modifica apenas colunas de atalho de ícone */
  .icon-container {
    grid-template-columns: 1fr 1fr 1fr;
	padding: 0px;
  }
}
    .column, .video-column { /* personalizar colunas de atalho de ícone */
      background: #fff; 
	  color: #000;
	  padding: 30px; 
	  transition: background-color 0.5s ease;
	  text-transform: uppercase;
	  font-family: "Ubuntu", sans-serif;
	  font-size: 16px;
	  text-align: center;
	  text-decoration: none;
	  margin: 3%;
    } 
	.column:hover, .video-column:hover {  /* personalize o atalho do ícone e o estilo de foco da coluna de vídeo */
	background: #f9f9f9;
	}
	  .video-column { /* personalizar colunas de vídeo */
	  	padding: 10px 10px 20px 10px; 
    } 
		.column a, .video-column a { /* link colors */
			color: #000 !important;
			text-decoration: none;
	}
	
	/* PERSONALIZAÇÃO DE ÍCONE DE ATALHO. Ele usa Dashicons, veja aqui https://developer.wordpress.org/resource/dashicons/#menu-alt */
	
	.edit-pages:before { /* Edita páginas */
	font-family: "dashicons"; 
	content: "\f105";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	.edit-posts:before { /* Edita posts */
	font-family: "dashicons"; 
	content: "\f109";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	.add:before { /* Add icon */
	font-family: "dashicons"; 
	content: "\f132";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	.edit-menu:before { /* Navigation icon */
	font-family: "dashicons"; 
	content: "\f329";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	.edit-orders:before { /* Orders icon */
	font-family: "dashicons"; 
	content: "\f163";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	.edit-products:before { /* Products icon */
	font-family: "dashicons"; 
	content: "\f535";
	font-size: 34px;
	margin-right: 7px;
	display: block;
	color: #F56692;
	}
	}
  </style>';
}


// Substitua o logotipo do Wordpress por um logotipo personalizado
function rebranding_wordpress_logo(){
	global $wp_admin_bar;
	//os códigos a seguir são para remover o submenu
	$wp_admin_bar->remove_menu('about');
	$wp_admin_bar->remove_menu('documentation');
	$wp_admin_bar->remove_menu('support-forums');
	$wp_admin_bar->remove_menu('feedback');
	$wp_admin_bar->remove_menu('wporg');


	//e isso é para mudar o logotipo do wordpress
	$wp_admin_bar->add_menu(array(
		'id'    => 'wp-logo',
		'title' => '<img src="' . get_template_directory_uri() . './image/logoo.png"  />',
		'href'  => 'http://localhost/portfolio/',
		'meta'  => array(
			'title' => __('Link Home'),
		),
	));

	//e isso é para adicionar um novo submenu.
	$wp_admin_bar->add_menu(array(
		'parent' => 'wp-logo',
		'href'  => __('http://localhost/portfolio/'),
	));
}
add_action('wp_before_admin_bar_render', 'rebranding_wordpress_logo');


// Habilitar Menus
add_theme_support('menus');


// Registrar Menu
function register_my_menu(){
	register_nav_menu('menu-principal', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

function my_custom_sizes(){
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');


// Página login trocando logo wordpress 
function bloginfo_login_logo(){ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/image/logoo.png);
			height: 100px;
			width: 100px;
			background-size: 100px 100px;
			border: 4px solid #ffffff;
			border-radius: 50%;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

		}
	</style>
<?php }

add_action('login_enqueue_scripts', 'bloginfo_login_logo');


// Link logo page site
add_filter('login_headerurl', 'bloginfo_login_logo_link');
function bloginfo_login_logo_link(){
	return home_url();
}


// Personalizar também o título e link da página de login
function bloginfo_login_logo_url(){
	return home_url(); // A url da logo vai ser o endereço da página inicial do site
}
add_filter('login_headerurl', 'bloginfo_login_logo_url');

function bloginfo_login_logo_url_title(){
	return 'Nome do seu site e informações adicionais';
}
add_filter('login_headertitle', 'bloginfo_login_logo_url_title');


// Personalizar background geral página de login
function bloginfo_login_css(){
	wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style.css');
}
add_action('login_enqueue_scripts', 'bloginfo_login_css');


// Personalizar background plano de fundo de login
function bloginfo_login_planofundo(){
	$bgImageUrl = get_stylesheet_directory_uri() . '/image/img-background.jpg';
?>
	<style type="text/css">
		body {
			background-image: url('<?php echo $bgImageUrl; ?>') !important;
			background-size: cover !important;
			background-position: center center !important;
		}
	</style>
<?php
}

add_action('login_enqueue_scripts', 'bloginfo_login_planofundo');


//Função modifica link footer wordpress
function modifica_admin_footer(){
	echo '<span id="footer-thankyou">Desenvolvido por: <a href="http://www.yourwebsite.com" target="_blank" rel="noopener noreferrer">D3Desenvolvedores do Brasil</a>.</span>';
}
add_filter('admin_footer_text', 'modifica_admin_footer');
?>