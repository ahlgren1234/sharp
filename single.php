<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

    <section class="row title_bar"> 
        <div class="container">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
            </div> <!-- .col-md-12 -->
        </div> <!-- .container -->
    </section> <!-- .row .title_bar -->

    <section class="row page"> 
        <div class="container">
            <div class="col-md-8">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div> <!-- .post-thumbnail -->
                <div class="meta">
                    Posted on 
                    <?php the_time( 'F j, Y g:i a' ); ?>
                     by 
                     <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                </div> <!-- .meta -->
                <?php the_content(); ?>

                <?php comments_template(); ?>

            </div> <!-- .col-md-8 -->
            <div class="col-md-4"> 
                <?php if( is_active_sidebar( 'sidebar' ) ) : ?>
                    <?php dynamic_sidebar( sidebar ); ?>
                <?php  endif; ?>
            </div> <!-- .col-md-4 -->
        </div> <!-- .container -->
    </section> <!-- .row .page -->

<?php endwhile; ?>

<?php get_footer(); ?>