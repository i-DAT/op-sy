<?php
/*
Template Name: Project Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">

    <section class="project">
        <header class="page-header">
            <h2><?php the_title(); ?></h2>
            <?php $feat_img = wp_get_attachment_url( get_post_thumbnail_id($child->ID) ); ?>
            <img src="<?php echo $feat_img; ?>" />
        </header>

        <div class="description">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>