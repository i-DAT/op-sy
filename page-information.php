<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
    </header>
    
    <section class="information">
        <section class="about">
            <p>The i-DAT Operating Systems project is managed by the <a href="http://i-dat.org">Institute of Digital Art &amp; Technology</a>, and produced by members of the Centre for Media Art &amp; Design Research, in collaboration with members of the School of Computing &amp; Mathematics, Plymouth University.</p>
        </section>

        <section class="partners">
            <h3>Project partners</h3>
            
            <ul>
                <li>
                    <p class="name">Appledore Arts</p>        
                    <p><a href="http://www.appledorearts.org/">http://www.appledorearts.org</a></p>
                </li>

                <li>
                    <p class="name">Artsource</p>        
                    <p><a href="http://www.artsource.net.au">http://www.artsource.net.au</a></p>
                </li>
            </ul>
        </section>

        <section class="team">
            <h3>Operating Systems development team</h3>

            <ul>
                <li>
                    <p><span class="name">Martin Beck</span>, <span class="title">Researcher in Evolutionary Computation Techniques, Artificial Life, and Collective Intelligence</span></p>        
                    <p><a href="mailto:m.beck@plymouth.ac.uk">m.beck@plymouth.ac.uk</a></p>
                </li>

                <li>
                    <p><span class="name">Dr Guido Bugmann</span>, <span class="title">Reader in Intelligent Systems</span></p>        
                    <p><a href="mailto:g.bugmann@plymouth.ac.uk">g.bugmann@plymouth.ac.uk</a></p>
                </li>
            </ul>
        </section>

        <section class="support">
            <h3>Support</h3>
            <p>i-DAT’s Operating Systems have been developed with financial support from:</p>
        </section>
    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>