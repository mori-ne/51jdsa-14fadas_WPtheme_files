<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- キャッシュ無効化 -->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- インデックスしない -->
    <meta name="robots" content="noindex" />

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

                            <div class="general_info_en">
                                <dl>
                                    <dt>
                                        1．The 14th Annual Meeting of the Federation of Asian Dental Anesthesia
                                        Society
                                        (FADAS)
                                    </dt>
                                    <dd>
                                        *It will be held concurrently with the 51st Annual Meeting of the Japanese
                                        Dental Society of Anesthesiology.
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        2．Congress Chair
                                    </dt>
                                    <dd>
                                        <span style="font-size: 20px; display: inline-block; margin-bottom: 4px;">
                                            Takao Ayuse
                                        </span>
                                        <div style="font-size: 14px; line-height: 1.4em;">
                                            <p>
                                                Chief Professor, Department of Dental Anesthesiology,
                                                Medical and Dental Sciences, Graduate School of Biomedical Sciences,
                                                Nagasaki University
                                            </p>
                                        </div>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        3．Dates
                                    </dt>
                                    <dd>
                                        October 6(Fri.) to 7(Sat.), 2023
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        4．Venue
                                    </dt>
                                    <dd>
                                        <span style="font-size: 20px;">
                                            Dejima Messe Nagasaki
                                        </span>
                                        <br>
                                        <span style="font-size: 15px;">
                                            (Nagasaki International Exhibition Hall)
                                        </span>
                                        </span>
                                        <div style="font-size: 14px; line-height: 1.4em; margin-top: 5px;">
                                            4-1 Onouemachi, Nagasaki #850-0058<br>
                                            TEL：(81) 95-801-0530 / FAX：(81) 95-823-0888<br>
                                            URL：<a target="_blank" href="https://dejima-messe.jp/en">https://dejima-messe.jp/en</a>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        5．Congress Theme
                                    </dt>
                                    <dd>
                                        <span style="font-size: 19px;">To the Next Decades</span>
                                        <span style="font-weight: bold;">"Empathy and Trust"</span>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        6．Program
                                    </dt>
                                    <dd>
                                        Opening Ceremony, Academic Forum, Poster Presentation
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        7．Secretariat
                                    </dt>
                                    <dd>
                                        Department of Dental Anesthesiology, Medical and Dental Sciences,
                                        Graduate School of Biomedical Sciences, Nagasaki University

                                        <div style="font-size: 14px; line-height: 1.4em; margin-top: 5px;">
                                            1-7-1 Sakamoto, Nagasaki, #852-8588<br>
                                            TEL：(81) 95-819-7714 / FAX：(81) 95-819-7715<br>
                                            E-mail：
                                            <a href="mailto:nagasaki@51jdsa-14fadas.jp">
                                                nagasaki@51jdsa-14fadas.jp</a>
                                            <br>
                                            URL：<a target="_blank" href="https://51jdsa-14fadas.jp">
                                                https://51jdsa-14fadas.jp</a>
                                        </div>
                                    </dd>
                                </dl>
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