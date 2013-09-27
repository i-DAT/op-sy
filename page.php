<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main" class="main" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>

    <section class="os-gallery">

        <div class="os eco-os">
            <h3>Eco-OS</h3>
            <a href="http://eco-os.<?php echo str_replace('http://', '', network_home_url())?>" class="icon"></a>
        </div>

        <div class="os arch-os">
            <h3>Arch-OS</h3>
            <a href="http://arch-os.<?php echo str_replace('http://', '', network_home_url())?>" class="icon"></a>
        </div>

        <div class="os bio-os">
            <h3>Bio-OS</h3>
            <a href="http://bio-os.<?php echo str_replace('http://', '', network_home_url())?>" class="icon"></a>
        </div>

        <div class="os dome-os">
            <h3>Dome-OS</h3>
            <a href="http://dome-os.<?php echo str_replace('http://', '', network_home_url())?>" class="icon"></a>
        </div>

        <div class="os s-os">
            <h3>S-OS</h3>
            <a href="http://s-os.<?php echo str_replace('http://', '', network_home_url())?>" class="icon"></a>
        </div>

    </section>
</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>