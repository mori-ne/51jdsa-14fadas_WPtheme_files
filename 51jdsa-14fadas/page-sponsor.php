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
                            <section>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <h2><?php the_title(); ?></h2>
                                <?php endwhile;
                                endif; ?>


                                <div class="sponsor">
                                    <p>
                                        第51回日本歯科麻酔学会総会では各種協賛の募集を行っております。<br>
                                        募集要項は個別にご送付しますので、メールでお問い合わせ下さい。<br>
                                        E-mail：<a href="mailto:nagasaki@51jdsa-14fadas.jp">nagasaki@51jdsa-14fadas.jp</a><br>
                                        募集要項をご覧の上、各フォームよりお申込み下さい。
                                    </p>
                                    <table class="sponsor_table">
                                        <tbody>
                                            <tr>
                                                <th>募集内容</th>
                                                <th>申込フォーム</th>
                                                <th>申込締切日<br>（2023年）</th>
                                            </tr>
                                            <tr>
                                                <td>共催セミナー</td>
                                                <td>
                                                    <a class="sponsor_table_btn" href="https://pro.form-mailer.jp/fms/c383d493270034" target="_blank" rel="noopener noreferrer">お申込みはこちらから</a>
                                                </td>
                                                <td>4月28日(金)</td>
                                            </tr>
                                            <tr>
                                                <td>企業展示</td>
                                                <td>
                                                    <a class="sponsor_table_btn" href="https://pro.form-mailer.jp/fms/843f4e9b270044" target="_blank" rel="noopener noreferrer">お申込みはこちらから</a>

                                                </td>
                                                <td>7月31日(月)</td>
                                            </tr>
                                            <tr>
                                                <td>広告協賛</td>
                                                <td>
                                                    <a class="sponsor_table_btn" href="https://pro.form-mailer.jp/fms/f6e8485c252500" target="_blank" rel="noopener noreferrer">お申込みはこちらから</a>
                                                </td>
                                                <td>4月28日(金)</td>
                                            </tr>
                                            <tr>
                                                <td>バナー広告</td>
                                                <td>
                                                    <a class="sponsor_table_btn" href="https://pro.form-mailer.jp/fms/e337175f252130" target="_blank">お申込みはこちらから</a>
                                                </td>
                                                <td>6月30日(金)</td>
                                            </tr>
                                            <tr>
                                                <td>寄　付</td>
                                                <td>
                                                    <a class="sponsor_table_btn" href="https://pro.form-mailer.jp/fms/a7848244270046" target="_blank" rel="noopener noreferrer">お申込みはこちらから</a>
                                                </td>
                                                <td>会期まで</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </section>
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