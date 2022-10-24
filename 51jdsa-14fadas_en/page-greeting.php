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

                            <?php
                            //  if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>
                            <!-- <h2><?php the_title(); ?></h2> -->
                            <?php
                            //  endwhile;
                            // endif;
                            ?>

                            <h2>Greeting</h2>

                            <!----------------------------------------------------------------------------------------------------------------->
                            <!---------------------------------------------------- 記事内容 ---------------------------------------------------->
                            <!----------------------------------------------------------------------------------------------------------------->

                            <div class="profile">
                                <div class="profile_txt">
                                    <p class="tx_small" style="margin-bottom:5px;">
                                        The 51st Annual Meeting of the<br>Japanese Dental Society of
                                        Anesthesiology
                                    </p>
                                    <p class="tx_small">
                                        The 14th Annual Meeting of the Federation of Asian Dental Anesthesiology
                                        Societies
                                    </p>
                                    Congress Chair<span class="name">Takao Ayuse</span>
                                </div>
                                <div class="profile_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/takuro_ayuse_cc_profile.jpg" srcset="<?php echo get_template_directory_uri(); ?>/img/takuro_ayuse_cc_profile@2x.jpg" alt="Congress Chair, Takuro Ayuse" width="120" height="150">
                                </div>
                            </div>

                            <div class="greeting">
                                <p>
                                    Dear Colleagues,
                                </p>
                                <p>
                                    We will be holding the "Nagasaki City's Newest Exhibition" at the Nagasaki
                                    International Exhibition Hall (Dejima Messe Nagasaki) from Saturday, October 7,
                                    to Sunday, October 8, 2023.
                                </p>
                                <p>
                                    We are pleased to announce that the 51st Annual Meeting of the Japanese Dental
                                    Society of Anesthesiology and the 14th Annual Meeting of the Federation of Asian
                                    Dental Anesthesia Society (FADAS) will be held concurrently.
                                </p>
                                <p>
                                    The Japanese Dental Society of Anesthesiology will celebrate the 50th
                                    anniversary
                                    of its establishment in 2022. The society aims to fulfill the needs and
                                    expectations
                                    of the public in the next half a century. We take our responsibility of
                                    nurturing
                                    specialists who can assist in the safe, secure, trusted, and comfortable
                                    delivery of
                                    dental care to patients seriously. In today's multidisciplinary healthcare
                                    environment, dental anesthesiologists must collaborate with fellow medical
                                    colleagues and other health staff members. To achieve our purposes, we need to
                                    prioritize and ensure medical safety and quality assurance. We must also develop
                                    the
                                    next generation of advanced medical care. Furthermore, we must take on bold
                                    challenges by promoting relevant clinical research, medical-industrial
                                    collaborations, and AI applications.
                                </p>
                                <p>
                                    For the first time, the annual meeting of the FADAS will be held in Nagasaki.
                                    Historically, Nagasaki held close cultural ties with China, Taiwan, and
                                    Southeast
                                    Asia. More recently, the city has continued to build close economic ties with
                                    these
                                    countries. As we are overcoming the coronavirus pandemic, it is a timely
                                    opportunity
                                    to invite overseas clinicians and researchers who share the same aspirations to
                                    present and discuss the latest medical research and ideas. This will also
                                    provide a
                                    valuable opportunity to discuss how we can promote future international
                                    collaborations, and convey <span style="font-weight: bold;">"empathy and
                                        trust"</span> to all patients, and medical and
                                    other healthcare professionals worldwide.
                                </p>
                                <p>
                                    With the operation of the new Shinkansen bullet train line in 2022, a new
                                    chapter
                                    will begin for Nagasaki. As the first city to introduce Western medicine to
                                    Japan,
                                    it seems most appropriate that we meet in Nagasaki to discuss the future
                                    direction
                                    of dental anesthesiology. It will be most exciting to meet together physically
                                    after
                                    a long time. To meet the expectations of our members, we are working together
                                    with
                                    members of the Scientific Meeting Organizing Committee to ensure that the
                                    meeting is
                                    creative and innovative. The spread of the new coronavirus infection, partly due
                                    to
                                    the effects of mutant strains, continues to impact societies and economies
                                    around
                                    the world. The Tokyo Summer Olympics and Paralympics in 2020 and the Beijing
                                    Winter
                                    Olympics and Paralympics in 2021 were successfully held without any spectators,
                                    and
                                    left a great impression in the memory of many due to the efforts of all
                                    concerned.
                                    These events also highlighted the importance and value of meeting face-to-face,
                                    and
                                    the exhilarating feeling that comes with physical interactions.
                                </p>
                                <p>
                                    The Japanese Dental Society of Anesthesiology also confirmed, based on the
                                    experience of holding the meeting online for two years, that it is possible to
                                    effectively exchange academic opinions via the Internet. The advantages of
                                    virtual
                                    meetings are that many participants can come together to attend various
                                    committees
                                    and meetings without traveling, and therefore, are cost-effective and
                                    time-saving.
                                    Importantly, we have learned how efficient on-demand presentations are for
                                    medical
                                    and healthcare professionals who wish to study the latest medical knowledge and
                                    techniques but are unable to meet at a specific time and place due to other
                                    commitments such as parenting responsibilities. Virtual meetings are also
                                    helpful to
                                    young researchers who may not have exuberant funds to spend on travel and
                                    accommodation.
                                </p>
                                <p>
                                    We are looking forward to the 2023 Annual Meeting. It will be the first time the
                                    meeting is held in Nagasaki in the last 25 years. We are excited that we can
                                    meet
                                    face-to-face and interact as much as we want, after a long absence.
                                </p>
                                <p>
                                    We hope that you will attend this meeting and take home with you the latest
                                    medical
                                    knowledge and techniques, as well as enjoy the energetic atmosphere. It will be
                                    a
                                    great meeting that affirms the responsibility and pride of dental
                                    anesthesiologists
                                    who will lead the next generation.
                                </p>
                                <p>
                                    Please make the time to attend this purposeful meeting. We would be honored by
                                    your
                                    presence.
                                    Wishing you prosperity and success.
                                </p>
                            </div>


                            <!----------------------------------------------------------------------------------------------------------------->
                            <!--------------------------------------------- 記事内容ここまで ---------------------------------------------------->
                            <!----------------------------------------------------------------------------------------------------------------->

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