<?php
/*
Template Name: about
*/
?>

<?php get_header() ?>

<!-- Page Title
   ================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1>About Us<span>.</span></h1>

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
                <div class="row">

                    <div id="team-wrapper" class="bgrid-halves cf">

                        <?php 
                     $team = new WP_Query( array(
                     'post_type' => "about",
                     'posts_per_page'=> -1,
                     ) );
                  ?>
                        <?php if( $team->have_posts() ): while( $team->have_posts() ): $team->the_post(); ?>

                        <div class="column member">
                            <?php the_post_thumbnail(); ?>
                            <div class"member-name">
                                <h5><?php the_title(); ?></h5>
                                <span><?php the_field('job'); ?></span>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>


                    </div> <!-- Team wrapper End -->

                </div> <!-- row End -->

            </section> <!-- section end -->

        </div> <!-- primary end -->

        <div id="secondary" class="four columns end">

            <?php get_sidebar("about"); ?>

        </div> <!-- secondary End-->

    </div> <!-- page-content End-->

</div> <!-- Content End-->


<!-- footer
   ================================================== -->
<?php get_footer(); ?>