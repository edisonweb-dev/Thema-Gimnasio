<?php 

/*
* Template Name: Contenido Centrado (No sidebar)
*/
get_header(); 

?>


<main class="contenedor pagina seccion no-sidebar">
  <div class="contenido-principal">
    <?php get_template_part("template-parts/paginas") ?>

  </div>

      <?php get_sidebar() ?>

</main>

<?php get_footer(); ?>