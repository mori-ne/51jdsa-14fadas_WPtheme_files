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

                                    <p><?php the_content(); ?></p>

                            <?php endwhile;
                            endif; ?>

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