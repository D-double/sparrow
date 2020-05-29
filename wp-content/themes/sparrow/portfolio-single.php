<?php

/*
Template Name: Портфолио single
Template Post Type: portfolio
*/

 get_header() ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">
          <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">
                  <h1><?php the_title(); ?></h1>

                  <div class="entry-description">
                    <?php the_content(); ?>
                  </div>

                  <ul class="portfolio-meta-list">
						   <li><span>Date: </span><?php the_field('date'); ?></li>
						   <li><span>Client </span><?php the_field('client'); ?></li>
						   <li><span>Skills: </span><?php the_field('skills'); ?></li>
				      </ul>

                  <a class="button" href="<?php the_field('link'); ?>">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

               <div class="entry-media">
                    <?php the_post_thumbnail(); ?>
               </div>

               <div class="entry-excerpt"></div>

            </div> <!-- primary end-->

         </section> <!-- end section -->
         <?php endwhile; ?>
         <?php endif; ?>

         <!-- <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul> -->
<ul class="post-nav cf">
   <li class="prev"><?php previous_post_link('%link','<strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate'); ?></li>
   <li class="next"><?php next_post_link('%link','<strong>Next Entry</strong> Morbi Elit Consequat Ipsum'); ?></li>
</ul>

      </div>

   </div> <!-- content End-->



   <!-- footer
   ================================================== -->
   <?php get_footer(); ?>