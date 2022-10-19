<aside class="sidebar">
    <div class="bunnerarea">
        <a href="http://51jdsa-14fadas.jp/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/51jdsa_banner.jpg" srcset="<?php echo get_template_directory_uri(); ?>/img/51jdsa_banner@2x.jpg" alt="51jdsa" width="260" height="80">
        </a>
    </div>



    <?php wp_nav_menu(array(
        'container_id' => 'global_nav',
        'container_class' => 'global_nav',
        'depth'           => 0,
        'theme_location' => 'globalMenu',
        'container'      => 'nav',
    )); ?>

    <div class="jimukyoku">
        <h2 class="h2en">General meeting <br> secretariat</h2>
        <p>
            Dental Anesthesiology,<br>
            Course of Medical and Dental Sciences, Nagasaki University<br>
            1-7-1, Sakamoto, Nagasaki City, Nagasaki<br>
            TEL:095-819-7714 FAX:095-819-7715<br>
            E-mail:<a href="mailto:nagasaki@51jdsa-14fadas.jp">nagasaki@51jdsa-14fadas.jp</a>
        </p>
    </div>

    <div class="qrarea">
        <h2>QR Code</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/QR_51jdsa-14fadas.jpg" alt="https://51jdsa-14fadas.jp/">
    </div>

    <div class="bunnerarea_bottom">
        <?php dynamic_sidebar('widget-01'); ?>
    </div>
    <!-- <div class="bunnerarea_bottom">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner_260x80px.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner_260x80px.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner_260x80px.jpg" alt="">
        </div>
    </div>
 -->
</aside>