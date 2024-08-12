<?php
    /*
    Template Name: Главная
    */
get_header(); ?>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h2 class="h2-title booking__title"><?= CFS()->get('booking_title'); ?></h2>
        <?= do_shortcode(CFS()->get('booking_form_shortcode')); ?>
    </div>
</div>
<section class="main"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?= CFS()->get('header_bg'); ?>)">
    <div class="container">
        <h1 class="h1-title header__title"><?= CFS()->get('header_title'); ?></h1>
        <a class="btn header__btn modal-trigger" href="#modal1"><?= CFS()->get('header_button'); ?></a>
        <p class="p-text header__p"><?= CFS()->get('header_info'); ?></p>
    </div>
</section>
<section class="info">
    <div class="container">
        <p class="p-text info__p info__info"><?= CFS()->get('info_text'); ?></p>
        <div class="info__flex">
            <?php
            $loop = CFS()->get('info_cards');
            foreach ($loop as $row) {
                ?>
                <div class="info__flex-item">
                    <div class="info-card-img">
                        <style>
                            .info-card-img {
                                background-color:
                                    <?= $row['info_card_bg'] ?>
                                ;
                            }

                            .info-card-img::after,
                            .info-card-img::before {
                                background-image: url(<?= $row['info_card_img_shadow'] ?>);
                            }
                        </style>
                        <img class="info__img" src="<?= $row['info_card_img'] ?>" alt="VR">
                    </div>
                    <div class="info__flex-item-card-3">
                        <h3 class="h3-title info__title"><?= $row['info_card_title'] ?></h3>
                        <div class="info__list">
                            <?= $row['info_card_text'] ?>
                        </div>
                        <button class="btn info__btn"><?= $row['info_card_button'] ?></button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    </div>
</section>
<?php get_header('settings'); ?>
<?php get_footer(); ?>