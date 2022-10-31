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

                            <div class="links_info">
                                <ul>
                                    <li>
                                        <p>
                                            日本歯科麻酔学会
                                        </p>
                                        <a target="_blank" href="http://kokuhoken.net/jdsa/">一般社団法人　日本歯科麻酔学会</a>
                                    </li>
                                    <li>
                                        <p>
                                            長崎大学大学院 医歯薬学総合研究科 医療科学専攻 歯科麻酔学分野
                                        </p>
                                        <a target="_blank" href="https://www.de.nagasaki-u.ac.jp/education/dept_cp.html">教育研究活動：研究分野（【臨床系】歯科麻酔学）｜長崎大学
                                            歯学部 (nagasaki-u.ac.jp)</a>
                                    </li>
                                    <li>
                                        <p>
                                            長崎コンベンション協会
                                        </p>
                                        <a target="_blank" href="https://www.nagasaki-visit.or.jp/">長崎国際観光コンベンション協会
                                            (nagasaki-visit.or.jp)</a>
                                    </li>
                                    <li>
                                        <p>
                                            長崎市公式観光サイト
                                        </p>
                                        <a target="_blank" href="https://www.at-nagasaki.jp/">https://www.at-nagasaki.jp/</a>
                                    </li>
                                </ul>
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