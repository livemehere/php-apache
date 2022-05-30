<div id="head">
    <div id="logo">
        <a href="/www"><img src="/www/img/logo.gif" alt="로고" /></a>
    </div>
    <nav id="top_menu">
        <ul>
            <?php
            session_start();
                if(isset($_SESSION["username"])){
                    echo  '<li>'.$_SESSION["username"].'님 환영합니다</li>
                            <li><a href="/www/login/logout.php">Logout</a></li>
                            '; //TODO: www 제거
                }else{
                    echo '<li><a href="/www/login/login_form.html">Login</a></li>'; //TODO: www 제거
                    echo '<li><a href="/www/login/member_form.html">회원가입</a></li>'; //TODO: www 제거
                }
            ?>
            <li><a href="/www">Home</a></li>
            <li><a href="/www">English</a></li>
            <li><a href="/www">Chinese</a></li>
        </ul>
    </nav>
</div>
<div class="header_shadow"></div>
<nav id="main_menu">
    <ul>
        <li>
            <a href="/www/AboutUs/Introduction.php">그리스신화박물관</a>
            <ul class="sub_menu">
                <li><a href="/www/AboutUs/Introduction.php">박물관소개</a></li>
                <li><a href="/www/AboutUs/GreekMyth.php">그리스신화란</a></li>
                <li><a href="/www/AboutUs/Provideo.php">홍보동영상</a></li>
                <li><a href="/www/AboutUs/Blogger.php">블로거와 함께하는 그리스신화박물관</a></li>
                <li><a href="/www/AboutUs/Pictures.php">사진으로보는 그리스신화박물관</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Exhibition/all.php">전시안내</a>
            <ul class="sub_menu">
                <li><a href="/www/Exhibition/all.php">전체</a></li>
                <li><a href="/www/Exhibition/1.php">창조관</a></li>
                <li><a href="/www/Exhibition/2.php">올리포스관</a></li>
                <li><a href="/www/Exhibition/3.php">신탁관</a></li>
                <li><a href="/www/Exhibition/4.php">영웅관</a></li>
                <li><a href="/www/Exhibition/5.php">휴먼관</a></li>
                <li><a href="/www/Exhibition/6.php">사랑관</a></li>
                <li><a href="/www/Exhibition/7.php">그리스마을</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Experience/all.php">체험하기</a>
            <ul class="sub_menu">
                <li><a href="/www/Experience/all.php">전체</a></li>
                <li><a href="/www/Experience/1.php">그리스의상 체험</a></li>
                <li><a href="/www/Experience/2.php">스탬프북</a></li>
                <li><a href="/www/Experience/3.php">아테네시민권 발급체험</a></li>
                <li><a href="/www/Experience/4.php">가면만들기 체험</a></li>
                <li><a href="/www/Experience/5.php">아트토이 체험</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Tour/intro.php">관람안내</a>
            <ul class="sub_menu">
                <li><a href="/www/Tour/intro.php">관람안내</a></li>
                <li><a href="/www/Tour/nav.php">오시는길</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Community/Notice.php">커뮤니티</a>
            <ul class="sub_menu">
                <li><a href="/www/Community/Notice.php">공지사항</a></li>
                <li><a href="/www/Community/FAQ.php">자주하는 질문</a></li>
                <li><a href="/www/Community/QnA.php">묻고 답하기</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Event/intro.php">이벤트</a>
            <ul class="sub_menu">
                <li><a href="/www/Event/intro.php">이벤트 안내</a></li>
            </ul>
        </li>
        <li>
            <a href="/www/Apply/info.php">취업정보</a>
            <ul class="sub_menu">
                <li><a href="/www/Apply/info.php">채용정보</a></li>
                <li><a href="/www/Apply/recommand.php">추천내용</a></li>
                <li><a href="/www/Apply/generic.php">일반 채용</a></li>
                <li><a href="/www/Apply/gov.php">정부지원일자리</a></li>
                <li><a href="/www/Apply/alba.php">아르바이트</a></li>
            </ul>
        </li>
    </ul>
</nav>
<nav id="quick_menu">
    <ul>
        <li>
            <a href=""><img src="/www/img/main/quick01.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick02.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick03.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick04.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick05.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick06.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick07.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick08.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick09.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/www/img/main/quick10.gif" alt="" /></a>
        </li>
    </ul>
</nav>
