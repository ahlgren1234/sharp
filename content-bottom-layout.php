<?php
/*
Template Name: Bottom Content Layout
*/
?>

<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

    <section class="row title_bar"> 
        <div class="container">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
            </div> <!-- .col-md-6 -->
            <div class="col-md-6">
                <div class="sub-nav">
                    <ul>
                        <?php 
                        $args = array(
                            'child_of'      => get_top_parent(),
                            'title_li'      => ''
                        );
                        ?>

                        <?php wp_list_pages( $args ); ?>
                    </ul>
                </div> <!-- .sub-nav -->
            </div> <!-- .col-md-6 -->
        </div> <!-- .container -->
    </section> <!-- .row .title_bar -->

    <section class="row page"> 
        <div class="container">
            <div class="col-md-8">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div> <!-- .post-thumbnail -->
                
                <?php the_content(); ?>

            </div> <!-- .col-md-8 -->
            <div class="col-md-4"> 
                <?php if( is_active_sidebar( 'sidebar' ) ) : ?>
                    <?php dynamic_sidebar( sidebar ); ?>
                <?php  endif; ?>
            </div> <!-- .col-md-4 -->
        </div> <!-- .container -->
    </section> <!-- .row .page -->

   <?php if( is_active_sidebar( 'bottom' ) ) : ?>
        <?php dynamic_sidebar( 'bottom' ) ?>
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>