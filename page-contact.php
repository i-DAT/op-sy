<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
    </header>
    
    <section class="contact-details">
        <img class="map" src="<?php bloginfo('template_directory'); ?>/img/map.png" />

        <div class="details">
            <header>
                <h3>Professor Mike Phillips</h3>
                <h4>Director of i-DAT</h4>
            </header>

            <div class="address">
                <p>School of Art &amp; Media,</p>
                <p>Faculty of Arts,</p>
                <p>Plymouth University,</p>
                <p>Drake Circus,</p>
                <p>Plymouth,</p>
                <p>Devon,</p>
                <p>PL4 8AA</p>
            </div>

            <div class="methods">
                <p><strong>Tel:</strong> +44 (0)1752-586262</p>
                <p><strong>Fax:</strong> +44 (0)1752-232540</p>
                <p><strong>Email:</strong> <a href="mailto:mike.phillips@plymouth.ac.uk">mike.phillips@plymouth.ac.uk</a></p>
                <p><strong>URL:</strong> <a href="http://i-dat.org">i-dat.org</a></p>
            </div>
        </div>
    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>