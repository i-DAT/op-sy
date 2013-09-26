<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
    </header>
    
    <section class="projects-list">

        <?php /* Get individual child sub-pages */ ?>
        <?php $children = get_pages(['child_of' => $post->ID]); ?>
        <?php foreach($children as $child): ?>
            <?php $content = $child->post_content; ?>
            <?php $content = apply_filters('the_content', $content); ?>
            <?php $feat_img = wp_get_attachment_url( get_post_thumbnail_id($child->ID) ); ?>

            <div class="project">
                <header class="project-header">
                    <h2><?php echo $child->post_title; ?><a href="<?php echo get_page_link($child->ID); ?>">View project</a></h2>
                </header>

                <img src="<?php echo $feat_img ?>" />
            </div>
        <?php endforeach; ?>

    </section>

</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>