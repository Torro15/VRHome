<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <?php
            $settings = get_posts([
                'numberposts' => 1,
                'category_name' => 'settings',
                'post_type' => 'post',
            ]);
            foreach ($settings as $post) {
                setup_postdata($post);
                ?>
                <div class="footer__box-item-1">
                    <div class="footer__item-box-top">
                        <img class="footer__logo" src="<?= CFS()->get('footer_logo'); ?>" alt="Logo">
                        <p class="p-text footer__text"><?= CFS()->get('footer_title'); ?></p>
                    </div>
                    <div class="footer__item-box-bottom">
                        <?php
                        if (!empty(CFS()->get('footer_inst_link')['url'])) {
                            ?>
                            <a href="<?= CFS()->get('footer_inst_link')['url'] ?> "
                                target="<?= CFS()->get('footer_inst_link')['target'] ?>"><img class="footer__inst-logo"
                                    src="<?= CFS()->get('footer_inst'); ?>" alt="Inst"></a>
                            <?php
                        }
                        ?>
                        <p class="p-text footer__text"><?= CFS()->get('footer_text'); ?></p>
                    </div>
                </div>
                <div class="footer__box-item-2">
                    <h3 class="h3-title footer-title"><?= CFS()->get('footer_hours_title'); ?></h3>
                    <p class="p-text footer__text"><?= CFS()->get('footer_hours_text'); ?></p>

                </div>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>