    
    <?php wp_footer(); ?>
    <?php if (WP_DEBUG): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/components/requirejs/require.js" data-main="<?php echo get_template_directory_uri(); ?>/js/main"></script>
    <?php else: ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
    <?php endif; ?>
	</body>
</html>