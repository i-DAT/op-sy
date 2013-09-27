<header class="site-header <?php echo strtolower(get_bloginfo('name')); ?>" role="banner">
    <div class="header-inner">
    	<a href="<?php echo home_url(); ?>">
            <h1><?php the_title(); ?></h1>
        </a>
        <nav class="site-nav" role="navigation">
            <ul>
                <?php wp_list_pages(array('title_li' => '', 'depth' => 1)); ?>
            </ul>
        </nav>
    </div>
</header>
