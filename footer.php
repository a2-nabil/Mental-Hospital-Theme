<?php 
/* footer area */
?>
<section id="footer_area">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-4'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-icons">
                        <a href="#"></a>
                        <a class="ms-2" href="#"></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-copy">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_theme_mod('a2n_copyright_section_logo') ?>" alt="Footer-logo" />
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <p class="desc-text copy-text">
                        <?php echo get_theme_mod('a2n_copyright_section') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>
<?php wp_footer(); ?>
</body>

</html>