<footer class="site-footer" role="contentinfo">
    <div class="footer-inner">
<!--         <section class="legal">
            <p>&copy; <?php echo date("Y"); ?> i-DAT. All rights reserved.</p>
        </section> -->

        <?php if (!is_main_site()): ?>
            <section class="opsy">
                <a class="logo" href="<?php echo network_home_url(); ?>">
                    An OP-SY project
                </a>
            </section>
        <?php endif; ?>

        <section class="brand">
            <a class="logo" href="http://i-dat.org">
                i-DAT
            </a>
        </section>
    </div>
</footer>
