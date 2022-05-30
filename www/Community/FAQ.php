<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/tm-custom.css">
    <link rel="stylesheet" type="text/css" href="../css/community.css">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>
        <section id="slider">
            <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>자주하는 질문<span>HOME>커뮤니티><b>자주하는 질문</b></span></h3>
                <div id="faqListBody">

                    <?php
                    for($i =0; $i<10; $i++){
                        echo '
                               <dl class="faqList">
                                    <dt><img src="http://www.greekmythology.co.kr/default/Bd/skin/basic_faq/img/icon_question.gif"
                                            alt="question"> 관람은 언제 할 수 있나요?</dt>
                                    <dd>
                                        <dl class="faq_a">
                                            <dt><img src="http://www.greekmythology.co.kr/default/Bd/skin/basic_faq/img/icon_answer.gif"
                                                    alt="answer"></dt>
                                            <dd class="jn_answer">오전&nbsp;9시부터&nbsp;오후&nbsp;6시까지&nbsp;관람이&nbsp;가능합니다.<br>
                                            </dd>
                                        </dl>
                                    </dd>
                                </dl>
                            ';
                    }
                    ?>

                </div>
                <!-- 페이지 버튼 -->
                <div class="page-nation">
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/prebtn.gif" alt="이전"
                        align="absmiddle">
                    <span style="padding:0 5px 0 3px;"><strong>1</strong> </span>
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/nextbtn.gif" alt="다음"
                        align="absmiddle">
                </div>
                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
    </div>
</body>


</body>

</html>