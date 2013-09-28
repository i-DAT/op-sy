    
    <?php wp_footer(); ?>
    <?php if (WP_DEBUG): ?>
    <script>var config = { 'env': 'development' };</script>
    <script src="<?php echo get_template_directory_uri(); ?>/components/requirejs/require.js" data-main="<?php echo get_template_directory_uri(); ?>/js/main"></script>
    <?php else: ?>
    <script>var config = { 'env': 'production' };</script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
    <?php endif; ?>
	</body>
</html>