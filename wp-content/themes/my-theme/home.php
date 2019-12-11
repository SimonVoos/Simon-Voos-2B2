<?php get_header(); ?>


    <h1>Actualité</h1>
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      
?>
    
    
       <section class="section-8">
           <div class="part8">
    
               <h1>Actus</h1>
               
               <div class="block">
  <div class="el">
  <img style="background-size:cover; width:100%; "src="<?php echo $video6['url']; ?>">
    <h3>Ville et agriculture: <br> rapprochement ou distanciation ?</h3>
    <p>Cette année, les 11e rencontres de la Fondation Louis Bonduelle se dérouleront le 12juin...
</p>
       <button><?php the_field('Lire_suite'); ?></button>
  </div>
  <div class="el">
 <img style="background-size:cover; width:100%; "src="<?php echo $video7['url']; ?>">
    <h3>Un rôle dans la transition vers des comportements durables</h3>
    <p>Les activités de la Fondation Louis Bonduelle visent a sensibiliser ses différents publics..
</p>
       <button><?php the_field('Lire_suite'); ?></button>
  </div>
  <div class="el">
   <img style="background-size:cover; width:100%; "src="<?php echo $video8['url']; ?>">
    <h3>Quand la lutte contre le gaspillage alimentaire sert la lutte contre la faim</h3>
    <p>En Outaouais (Québec, Canada), des organismes anti-gaspillage...
</p>
       <button><?php the_field('Lire_suite'); ?></button>
  </div>
    <div class="el">
   <img style="background-size:cover; width:100%; "src="<?php echo $video9['url']; ?>">
    <h3>Légumineuse et légume: quelles différences ?</h3>
    <p>Qu'est qu'une lugumineuse ? <br> Quels sont leurs atouts..
</p>
         <button><?php the_field('Lire_suite'); ?></button>
  </div>
</div>
               
     </div>
    </section>

    
<?php
  }
}
?>
<?php get_footer(); ?>