<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
    </header>
    
    <section class="projects-list">
         <div class="project">
            <header class="project-header">
                <h3><a href="#">Arch-OS</a></h3>
                <img src="http://placekitten.com/1050/400"/>
            </header>

            <div class="description">
                <p>Arch-OS represents an evolution in intelligent architecture, interactive art and ubiquitous computing. An ‘Operating System’ for contemporary architecture (Arch-OS, ’software for buildings’) has been developed to manifest the life of a building and provide artists, engineers and scientists with a unique environment for developing transdisciplinary work and new public art.</p>
                <p>The Arch-OS experience combines a rich mix of the physical and virtual by incorporating the technology of ’smart’ buildings into new dynamic virtual architectures.</p>
                <a href="#">View project</a>
            </div>
        </div>

         <div class="project">
            <header class="project-header">
                <h3><a href="#">Arch-OS</a></h3>
                <img src="http://placekitten.com/1050/400"/>
            </header>

            <div class="description">
                <p>Arch-OS represents an evolution in intelligent architecture, interactive art and ubiquitous computing. An ‘Operating System’ for contemporary architecture (Arch-OS, ’software for buildings’) has been developed to manifest the life of a building and provide artists, engineers and scientists with a unique environment for developing transdisciplinary work and new public art.</p>
                <p>The Arch-OS experience combines a rich mix of the physical and virtual by incorporating the technology of ’smart’ buildings into new dynamic virtual architectures.</p>
                <a href="#">View project</a>
            </div>
        </div>
    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>