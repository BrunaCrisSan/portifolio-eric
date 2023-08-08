<?php
// Template Name: Experiências 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . "./inc/conteudo.php"); ?>    

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>