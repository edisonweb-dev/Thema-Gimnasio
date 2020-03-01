<?php get_header(); ?>


<main class="contenedor pagina seccion no-sidebar">
  <div class="text-center">

    <?php get_template_part("template-parts/paginas") ?>    

  </div>

  <?php
    gymfitness_lista_clases();
  ?>
      
</main>

<?php get_footer(); ?>