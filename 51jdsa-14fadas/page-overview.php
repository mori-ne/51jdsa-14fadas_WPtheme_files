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

                            <div class="general_info">

                                <dl>
                                    <dt>
                                        1．会議名称
                                    </dt>
                                    <dd>
                                        第51回日本歯科麻酔学会総会・学術集会
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        2．会　長
                                    </dt>
                                    <dd>
                                        <span style="font-size: 19px; display:inline-block; margin-bottom: 5px;">
                                            鮎瀬　卓郎
                                        </span>
                                        <div style="font-size: 15px; line-height: 1.4em;">
                                            <p>
                                                長崎大学大学院　医歯薬学総合研究科　医療科学専攻
                                            </p>
                                            <p>
                                                歯科麻酔学分野　主任教授
                                            </p>
                                        </div>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        3．会　期
                                    </dt>
                                    <dd>
                                        2023年（令和5年）10月6日（金）～8日（日）
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>
                                        4．会　場
                                    </dt>
                                    <dd>
                                        <span style="font-size: 19px; display:inline-block; margin-bottom: 5px;">出島メッセ長崎</span>
                                        <div style="font-size: 15px; line-height: 1.4em; margin-top: 3px;">
                                            〒850-0058　長崎県長崎市尾上町4-1<br>
                                            TEL：095-801-0530 / FAX：095-823-0888<br>
                                            URL：<a target="_blank" href="https://dejima-messe.jp">https://dejima-messe.jp</a>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        5．テーマ
                                    </dt>
                                    <dd><span style="font-size: 19px; font-weight: bold;">「次の50年へ、～共感と信頼～」</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        6．参加者
                                    </dt>
                                    <dd>
                                        約1,200名（予定）
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        7． 開催形式
                                    </dt>
                                    <dd>
                                        ハイブリッド開催<br>（現地開催 ＋ LIVE配信 ＋ オンデマンド配信）※予定
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        8．プログラム
                                    </dt>
                                    <dd>
                                        開会式、特別講演、教育講演、久保田康那記念講演<br>
                                        学術委員会指名講演、シンポジウム、認定講習会<br>
                                        学会企画教育講座、地域医療委員会企画<br>
                                        一般演題（口演・ポスター）、閉会式等を予定
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        9．事務局
                                    </dt>
                                    <dd>
                                        <p style="margin-bottom: 10px;">
                                            長崎大学大学院　医歯薬学総合研究科<br>医療科学専攻　歯科麻酔学分野
                                        </p>
                                        <div style="font-size: 15px; line-height: 1.4em; margin-top: 3px;">
                                            〒852-8588　長崎県長崎市坂本1-7-1<br>
                                            TEL：095-819-7714 / FAX：095-819-7715<br>
                                            E-mail：<a href="mailto:nagasaki@51jdsa-14fadas.jp">nagasaki@51jdsa-14fadas.jp</a><br>
                                            URL：<a target="_blank" href="https://51jdsa-14fadas.jp/">https://51jdsa-14fadas.jp</a>
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