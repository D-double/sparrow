<?php
/*
Template Name: contact
*/
?>

<?php get_header() ?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Get In Touch<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
              

            </section> <!-- section end -->

         </div>

         <div id="secondary" class="four columns end">
             <?php get_sidebar("about"); ?>
         </div>

      </div>

   </div> <!-- Content End-->


   <!-- footer
   ================================================== -->
   <?php get_footer(); ?>
   