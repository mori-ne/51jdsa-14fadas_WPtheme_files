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

                    <!-- 記事内容 -->
                    <main class="main">
                        <article class="main_article">

                            <!-- タイトル -->
                            <?php // if (have_posts()) : while (have_posts()) : the_post();  
                            ?>
                            <!-- <h2><?php // the_title(); 
                                        ?></h2> -->
                            <?php // endwhile;
                            // endif;
                            ?>

                            <h2>ご挨拶</h2>

                            <div class="profile">
                                <div class="profile_txt">
                                    <p class="tx_small">
                                        第51回日本歯科麻酔学会総会・学術集会
                                    </p>
                                    <p class="tx_small">
                                        第14回アジア歯科麻酔学会連合学術大会（14th FADAS）
                                    </p>
                                    <br>
                                    <p>
                                        会長<span class="name">鮎瀬　卓郎</span>
                                    </p>
                                </div>
                                <div class="profile_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/takuro_ayuse_cc_profile.jpg" srcset="<?php echo get_template_directory_uri(); ?>/img/takuro_ayuse_cc_profile@2x.jpg" alt="鮎瀬 卓郎" width="160" height="200">
                                </div>
                            </div>

                            <div class="greeting">
                                <p>
                                    来る2023年（令和5年）10月7日（土）・8日（日）の2日間、長崎市に新設されました出島メッセ長崎におきまして、「第51回日本歯科麻酔学会総会・学術集会」ならびに「第14回アジア歯科麻酔学会連合学術大会（14th FADAS）」を開催させていただく運びとなりました。
                                </p>
                                <p>
                                    日本歯科麻酔学会は、2022年に設立50周年を迎え、次の半世紀に国民の期待に応えられるような成果が求められています。2023年の本学会総会のテーマは、「次の50年へ、共感と信頼」としました。歯科麻酔が国民の十分な信頼を得て、全ての患者さんに安心で、安全かつ快適な歯科医療を受けて頂けるように、お手伝い出来る専門医を育てて行く責務があります。また、多職種が連携する、現代の医療環境において、歯科麻酔医が全ての医療スタッフの仲間から共感を得られるのかが鍵になってきます。そのために、医療安全など守るべき領域は、しっかり着実に行い、次世代の高度医療の開発のためには、特定臨床研究やAIを応用した医工連携のプロジェクトを推進して、思い切ったチャレンジが必要になっています。
                                </p>
                                <p>
                                    長崎は、2022年に新幹線が開通し、新しい長崎の始まりになります。西洋医学の発祥の地から、歯科麻酔が将来向かうべき方向を、久しぶりの現場に集える多幸感の中、皆様と議論する場にしたいと思います。会員の皆様のご期待に応えられる学術集会となるよう、学術集会実行委員会の委員と共に、独創的な発想で学会企画を練っております。新型コロナウィルス感染症の感染拡大は、変異株の影響もあり、依然として全世界の社会、経済に歴史的な影響を与えています。歯科麻酔の学術集会も、2020年、2021年には2回連続して現地開催のないWEB開催となりました。2020年に東京夏季オリンピック・パラリンピック、北京冬季オリンピック・パラリンピックも関係者の努力で、完全無観客での開催ではありましたが、大きな感動を人々の記憶に残して成功しました。しかし、人と人との顔を見ながら熱気を感じながらの基本的なコミュニケーションの大切さも再認識させられました。
                                </p>
                                <p>
                                    歯科麻酔学会も、2年のWEB開催の経験を糧に、学術的な意見交換もWEB経由でも実効的に行えること、また各種委員会や会議は経費と時間を最大限節約して、多くの参加者が参集できる利点も確認されました。特に、最新の医療知識や技術を勉強したいと願っても、子育てや介護で都合がつかない医療者や、国内外の若手研究者で出張旅費が準備できない場合など、オンデマンドでの勉強がいかに効率的であるかも分かってきましたが、2023年の学術総会は、25年振りに長崎での開催となるのを機会に、久しぶりに思う存分対面で語り合う場にしたいと思っています。
                                </p>
                                <p>
                                    是非、本学術集会に御参加いただき、次の時代を牽引する歯科麻酔医としての、責任と誇りを持って、最新の医学知識と医療技術を、仲間の元気なエネルギーをともにお持ち帰りいただければと願っております。
                                </p>
                                <p>
                                    参加者の皆様にとって、有意義で発展が期待できる学術集会となるよう、会長、プログラム委員、事務局が一丸となり、多くの魅力的な企画を練って参ります。多くのご参加をお待ちしております。
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