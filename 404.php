<?php get_header(); ?>

<div class="container">
    <div class="row title_bar"> 
        <div class="col-md-12">
            <h1>Ooppss..</h1>   
        </div> <!-- .col-md-12 -->
    </div> <!-- .row -->
    <div class="row">
        <div class="col-md-6"> 
            <img src="<?php bloginfo( 'template_url' ); ?>/img/404.jpg" alt="404 image" class="error404image">
        </div> <!-- .col-md-6 -->
        <div class="col-md-6"> 
            <h2>We can't seem to find the page you're looking for.</h2>
            <p>It's easy to get lost. But, choose another page in the menu, or contact us so we can start looking for that missing page.</p>
        </div> <!-- .col-md-6 -->
    </div> <!-- .row -->
</div> <!-- .container --> 

<?php get_footer(); ?>