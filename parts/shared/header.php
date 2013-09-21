<header class="site-header" role="banner">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <nav class="site-nav" role="navigation">
        <ul>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </nav>
</header>
