<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

        <?php get_header(); ?>

        <div class="contents_wrap">
            <div class="contents">
                <div class="inner">

                    <?php get_sidebar(); ?>

                    <main class="main">
                        <article class="main_article">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <h2><?php the_title(); ?></h2>
                            <?php endwhile;
                            endif; ?>

                            <div class="access_info">
                                <h3>出島メッセ長崎</h3>
                                <p>
                                    〒850-0058　長崎県長崎市尾上町4-1<br>
                                    TEL：095-801-0530/ FAX：095-823-0888<br>
                                    URL：<a href="https://dejima-messe.jp">https://dejima-messe.jp</a>
                                    <br>
                                    <br>
                                    <br>
                                <div style="background: #f5f5f5; padding: 30px 0; border-radius: 6px;">
                                    <p style="text-align: center; font-size: 15px; margin-bottom: 5px;">
                                        会場の詳細は下記URLよりご確認ください。
                                    </p>
                                    <a target="_blank" href="https://dejima-messe.jp" class="access_btn">出島メッセ長崎</a>
                                </div>
                                </p>
                            </div>

                        </article>
                    </main>

                </div>
            </div>
        </div>

        <!-- <div class="contents_bottom_wrap">
            <div class="contents_bottom"></div>
        </div> -->

        <!-- 無限横スクロール -->
        <div class="slider">
        </div>

        <?php get_footer(); ?>
    </div>

    <div id="pagetop">
        <a href="">TOP</a>
    </div>


    <script>
        $(function() {
            var pagetop = $('#pagetop');
            // ボタン非表示
            pagetop.hide();
            // 100px スクロールしたらボタン表示
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    pagetop.fadeIn();
                } else {
                    pagetop.fadeOut();
                }
            });
            pagetop.click(function() {
                $('body, html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>

</body>

</html>