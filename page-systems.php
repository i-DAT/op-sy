<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
    </header>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>

    <section class="systems-list">
        <div class="system">
            <header class="system-header">
                <h3>Arch-OS</h3>
                <img src="http://placekitten.com/1050/400"/>
            </header>
            <div class="description">
                <p>Arch-OS represents an evolution in intelligent architecture, interactive art and ubiquitous computing. An ‘Operating System’ for contemporary architecture (Arch-OS, ’software for buildings’) has been developed to manifest the life of a building and provide artists, engineers and scientists with a unique environment for developing transdisciplinary work and new public art.</p>
                <p>The Arch-OS experience combines a rich mix of the physical and virtual by incorporating the technology of ’smart’ buildings into new dynamic virtual architectures.</p>
            </div>
        </div>

        <div class="system">
            <header class="system-header">
                <h3>i-500</h3>
                <img src="http://placekitten.com/1050/400"/>
            </header>
            <div class="description">
                <p>Arch-OS represents an evolution in intelligent architecture, interactive art and ubiquitous computing. An ‘Operating System’ for contemporary architecture (Arch-OS, ’software for buildings’) has been developed to manifest the life of a building and provide artists, engineers and scientists with a unique environment for developing transdisciplinary work and new public art.</p>
                <p>The Arch-OS experience combines a rich mix of the physical and virtual by incorporating the technology of ’smart’ buildings into new dynamic virtual architectures.</p>
            </div>
        </div>
    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>