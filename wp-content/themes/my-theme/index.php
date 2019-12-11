<?php get_header(); ?>


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
      
      
      
       $video1 = get_field('video1');
       $video2 = get_field('video2');
       $video3 = get_field('video3');
       $video4 = get_field('video4');
       $video5 = get_field('video5');
      
       $video6 = get_field('video5');
       $video7 = get_field('video5');
       $video8 = get_field('video5');
       $video9 = get_field('video5');
      
      
      
?>
<section class="section-1">
     <div class="part1">
  <p><?php the_field('base_line'); ?></p>
         <h1><?php the_field('titre_marron'); ?></h1>
         <h2><?php the_field('titre_vert'); ?></h2>
         <button><?php the_field('lien_dinscription'); ?></button>
</div> 
    </section>   
    
<section class="section-2">
       <div class="part2">
         <h1><?php the_field('titre_presentation'); ?></h1>
      <p><?php the_field('texte_presentation'); ?></p>
           </div> 
    </section> 
    
<section class="section-3">
 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bandeau.jpg" alt="" style="background-size: cover;
    width: 100%;">
    </section> 

    
    <section class="section-4">
         <div class="part4">
  <h1>Au programme</h1>
             <div class="gauche">
 <h2>Les végetaux dans la chaine <br>alimantaire</h2>
             <p> <span> <?php the_field('champ_time1'); ?> </span> <?php the_field('champ1'); ?></p>
             <p> <span> <?php the_field('champ_time2'); ?> </span> <?php the_field('champ2'); ?></p>
             <p> <span> <?php the_field('champ_time3'); ?> </span> <?php the_field('champ3'); ?></p>
             <p> <span> <?php the_field('champ_time4'); ?> </span> <?php the_field('champ4'); ?></p>
             <p> <span> <?php the_field('champ_time5'); ?> </span> <?php the_field('champ5'); ?></p>
                 </div>
             <div class="droite">
<h2>les activités de la fondation</h2>
             <p> <span> <?php the_field('champ_time6'); ?> </span> <?php the_field('champ6'); ?></p>
             <p> <span> <?php the_field('champ_time7'); ?> </span> <?php the_field('champ7'); ?></p>
             <p> <span> <?php the_field('champ_time8'); ?> </span> <?php the_field('champ8'); ?></p>
             <p> <span> <?php the_field('champ_time9'); ?> </span> <?php the_field('champ9'); ?></p>
                 </div>
               <button>S'inscrire aux rencontres</button>
        </div>
    </section> 
    
    <section class="section-5">
         <div class="part5">
             
              <h1><?php the_field('orateur_titre'); ?></h1>
             <h2><?php the_field('orateur_sstitre'); ?></h2>
             
             <div class="parent1">
             <div class="roundedImage">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona3.jpg" alt="" style="background-image:cover;">
                 <p><?php the_field('nom_orateur_1'); ?></p>
                 <span><?php the_field('desc_orateur_1'); ?></span>
                 <button><?php the_field('button_orateur_1'); ?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona4.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom_orateur_2'); ?></p>
                 <span><?php the_field('desc_orateur_2'); ?></span>
                 <button><?php the_field('button_orateur_2'); ?></button>
</div>
             <div class="roundedImage">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona-1.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom_orateur_3'); ?></p>
                 <span><?php the_field('desc_orateur_3'); ?></span>
                 <button><?php the_field('button_orateur_3'); ?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona3.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom_orateur_4'); ?></p>
                 <span><?php the_field('desc_orateur_4'); ?></span>
                 <button><?php the_field('button_orateur_4'); ?></button>
</div>
                 <div class="centrer1">
                             <div class="roundedImage">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona4.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom_orateur_5'); ?></p>
                 <span><?php the_field('desc_orateur_5'); ?></span>
                 <button><?php the_field('button_orateur_5'); ?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona-1.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom_orateur_6'); ?></p>
                 <span><?php the_field('desc_orateur_6'); ?></span>
                 <button><?php the_field('button_orateur_6'); ?></button>
</div>
                 </div>
    </div>
             
          </div>
    </section>
    
    
    
    
    
    
    
    <section class="section-6">
        <div class="container">
         <div class="part6">
                 <h1><?php the_field('titre_information'); ?> </h1>
                   <img style="background-size: cover;
    width: 100%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/lieu.png">
             <div class="CarreVert">
             <h2> <img style="background-size: cover;
    width: 30%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/repere.png"><?php the_field('texte_1'); ?></h2>
              <h2> <img style="background-size: cover;
    width: 30%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/horloge.png"><?php the_field('texte_2'); ?></h2>
              <h2> <img style="background-size: cover;
    width: 30%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/couvert.png"><?php the_field('texte_3'); ?></h2>
                 </div>
             
    </div></div>
    </section>
    
    
    
    
    
    
    
    
    <section class="section-7">
           <div class="part7">
    
               <h1>Vidéos</h1>
               
             <div class="parent">
<div class="div1"> <img style="background-size:cover; width:100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/black.jpg"><p><?php the_field('titrev1'); ?></p><span><?php the_field('sstitrev1'); ?></span> </div>
                 
<div class="div2"> <img style="background-size:cover; width:100%; "src="<?php echo $video1['url']; ?>"><p><?php the_field('titrev2'); ?></p><span><?php the_field('sstitrev2'); ?></span> </div>
                 
<div class="div3">
    <img style="background-size:cover; width:100%; "src="<?php echo $video2['url']; ?>">
                 </div>
                 
<div class="div4"> 
    <p><?php the_field('titrev3'); ?></p> 
    <span><?php the_field('sstitrev3'); ?></span> 
                 </div>
                 
<div class="div5"> 
    <img style="background-size:cover; width:100%; "src="<?php echo $video3['url']; ?>">
                 </div>
                 
<div class="div6"> 
    <p><?php the_field('titrev4'); ?></p>
    <span><?php the_field('sstitrev4'); ?></span>
                 </div>
                 
<div class="div7"> 
   <img style="background-size:cover; width:100%; "src="<?php echo $video4['url']; ?>">
                 </div>
                 
<div class="div8"> 
    <p><?php the_field('titrev5'); ?></p>
    <span><?php the_field('sstitrev5'); ?></span> 
                 </div>
                 
<div class="div9">
    <img style="background-size:cover; width:100%; "src="<?php echo $video5['url']; ?>">
                 </div>
                 
<div class="div10"> 
    <p><?php the_field('titrev6'); ?></p>
    <span><?php the_field('sstitrev1'); ?></span>
                 </div>
</div> 
               
     </div>
    </section>
    
    
    
    

    
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
    

    
    
     <section class="section-9">
           <div class="part9">
    
               <div class="block">
                <div class="el">
   <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/lepotager.jpg">
</p>
  </div>
               
          <div class="el">
   <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/lepotager.jpg">
</p>
  </div>
    </div>
    </div>
    </section>
    
    
    
    
    
<?php
  }
}
?>


<?php get_footer(); ?>