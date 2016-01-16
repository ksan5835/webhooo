<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ascent
 */

get_header("woocommerce"); ?>

<div class="row">
    <div class="col-sm-12 col-md-9">
        
        <?php if ( have_posts() ) : ?>
        
        
        <?php woocommerce_content(); ?>
        
        <?php endif; ?>
        
    </div>
    
    <div class="col-sm-12 col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
