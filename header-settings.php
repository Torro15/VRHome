<!-- Общие настройки  -->
<section class="price">
    <div class="container">
        <h2 class="h2-title price__title"><?= CFS()->get('price_title'); ?></h2>
        <?= do_shortcode(CFS()->get('price_shortcode')); ?>
        <p class="p-text add-info"><?= CFS()->get('price_info'); ?></p>
    </div>
</section>
<section class="discount">
    <div class="container">
        <h2 class="h2-title discount__title"><?= CFS()->get('discount_title'); ?></h2>
        <?php
        $loop = CFS()->get('discount_box');
        foreach ($loop as $row) {
            ?>
            <div class="discount__item discount__item-2 for-slidedown"
                style="background-color:<?= $row['discount_box_сolor'] ?>">
                <div class="discount__item-info-2">
                    <h2 class="h2-title discount__item-title"><?= $row['discount_box_title'] ?></h2>
                    <p class="p-text discount__text"><?= $row['discount_box_text'] ?></p>
                </div>
                <p class="p-text add-info"><?= $row['discount_box_info'] ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<section class="booking">
    <div class="container">
        <div class="booking__flex for-slidedown-left">
            <div class="booking__flex-left">
                <h2 class="h2-title booking__title"><?= CFS()->get('booking_title'); ?></h2>
                <?= do_shortcode(CFS()->get('booking_form_shortcode')); ?>
            </div>
            <img class="booking__img" src="<?= CFS()->get('booking_img'); ?>" alt="Booking robot">
        </div>
    </div>
</section>
<section class="rating">
    <div class="container">
        <h2 class="h2-title rating__title"><?= get_category(9, ARRAY_A)['name']; ?></h2>
        <div class="rating__flex">
            <?php
            $posts = get_posts([
                'numberposts' => -1,
                'category_name' => 'rating',
                'orderby' => 'array',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppres_filter' => true
            ]);
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <div class="rating__flex-item-1">
                    <?php
                    if (!empty(CFS()->get('rating_link')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('rating_link')['url'] ?>"
                            target="<?= CFS()->get('rating_link')['target'] ?>"><img class="rating__img-yandex"
                                src="<?= CFS()->get('rating_img') ?>" alt="rating"></a>
                        <?php
                    }
                    if (!empty(CFS()->get('rating_link')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('rating_link')['url'] ?>" target="<?= CFS()->get('rating_link')['target'] ?>"
                            class="btn rating__btn"><?= CFS()->get('rating_btn') ?></a>

                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
</section>
<section class="popular">
    <div class="container">
        <h2 class="h2-title popular__title"><?= CFS()->get('popular_title'); ?></h2>
        <div class="popular__box">
            <?php
            $loop = CFS()->get('popular_box');
            foreach ($loop as $row) {
                ?>
                <div class="popular__box-item">
                    <a href="<?php the_permalink(); ?>"><img class="popular-img" src="<?= $row['popular_img'] ?>"
                            alt="The Game"></a>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="popular__box-btn">
            <?php
            $loop = CFS()->get('popular_btn_box');
            foreach ($loop as $row) {
                ?>
                <div class="popular__box-btn-item popular__box-btn-item-1">
                    <a href="<?php the_permalink(); ?>" class="btn popular__btn"><?= $row['popular_btn'] ?></a>
                </div>
                <?php
            }
            ?>
        </div>
        <p class="p-text popular__text for-slidedown"><?= CFS()->get('popular_info'); ?></p>
    </div>
</section>
<section class="questions">
    <div class="container">
        <h2 class="h2-title questions__title"><?= get_category(5, ARRAY_A)['name']; ?></h2>
        <div class="questions__grid">
            <?php
            $posts = get_posts([
                'numberposts' => -1,
                'category_name' => 'questions',
                'orderby' => 'array',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppres_filter' => true
            ]);
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <div class="grid__questions-item grid__questions-item-4">
                    <div class="grid__questions-item-info">
                        <h3 class="h3-title questions-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>

</section>
<section class="contacts">
    <div class="container">
        <h2 class="h2-title contacts__title"><?= get_category(10, ARRAY_A)['name']; ?></h2>
        <div class="contacts__box">
            <?php
            $posts = get_posts([
                'numberposts' => 1,
                'category_name' => 'contacts',
                'post_type' => 'post',
            ]);
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <?php
                $loop = CFS()->get('contacts_box');
                foreach ($loop as $row) {
                    ?>
                    <div class="contacts__box-item contacts__box-item-2">
                        <h3 class="h3-title contacts-title-2"><?= $row['contacts_box_title'] ?></h3>
                        <p class="p-text add-info add-info-2"><?= $row['contacts_box_info-1'] ?></p>
                        <div class="contacts__box-address">
                            <div class="icon-map">
                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                            </div>
                            <div class="contacts__box-address-info-2">
                                <p class="p-text contacts__text"><?= $row['contacts_box_address'] ?></p>
                                <p class="p-text add-info add-info-1-1"><?= $row['contacts_box_info-2'] ?></p>
                            </div>
                        </div>
                        <div class="contacts__box-phone">
                            <p class="p-text contacts__phone-number"><?= $row['contacts_box_phone'] ?></p>
                        </div>
                        <div class="icon-phone">
                            <a href="tel:<?= $row['contacts_box_phone'] ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>