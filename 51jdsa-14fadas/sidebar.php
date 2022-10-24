<aside class="sidebar">
    <div class="bunnerarea">
        <a href="/en">
            <img src="<?php echo get_template_directory_uri(); ?>/img/14fadas_banner.jpg" srcset="<?php echo get_template_directory_uri(); ?>/img/14fadas_banner@2x.jpg" alt="14fadas" width="260" height="80">
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
        <h2>総会事務局</h2>
        <p>
            長崎大学生命医科学域<br>
            医療科学専攻 歯科麻酔学<br>
            〒852-8501 長崎県長崎市坂本1-7-1<br>
            TEL：095-819-7714<br>
            FAX：095-819-7715<br>
            E-mail：<a href="mailto:nagasaki@51jdsa-14fadas.jp">nagasaki@51jdsa-14fadas.jp</a>
        </p>
    </div>

    <div class="qrarea">
        <h2>ホームページQRコード</h2>
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