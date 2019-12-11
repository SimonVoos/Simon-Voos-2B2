<?php get_header(); ?>

<div class="container">
    <h1>404</h1>
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 
    
    the_content();
      
      <?php get_Actus(); ?>
      
?>

    
<?php
  }
}
?>

</div>

<?php get_footer(); ?>