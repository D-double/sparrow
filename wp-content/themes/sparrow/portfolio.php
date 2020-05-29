
<?php
/*
Template Name: Портфолио главная
*/
?>

<?php get_header() ?>


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

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">
            <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
               <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
               <?php endwhile; ?>
               <?php endif; ?>
            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">

                <div id="portfolio-wrapper" class="bgrid-halves cf">

               <?php 
                     $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $portfolio = new WP_Query( array(
                    'post_type' => "portfolio",
                    'posts_per_page'=> 4,
                    'paged'          => $paged,
                    ) );
                ?>
            <?php if( $portfolio->have_posts() ): while( $portfolio->have_posts() ): $portfolio->the_post(); ?>
                   <div class="columns portfolio-item">
                        <div class="item-wrap">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <div class="overlay"></div>
                                <div class="link-icon"><i class="fa fa-link"></i></div>
                            </a>
                            <div class="portfolio-item-meta">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php the_field('type'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                  <!-- Pagination -->
                  <nav class="col full pagination">
                   
                        <?php $big = 999999999; // уникальное число

                           echo paginate_links( array(
                              'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                              'format'  => '?paged=%#%',
                              'current' => max( 1, get_query_var('paged') ),
                              'total'   => $portfolio->max_num_pages
                           ) ); ?>
                  </nav>
                
                </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->


   <!-- footer
   ================================================== -->
   <?php get_footer(); ?>
 