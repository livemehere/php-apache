<div id="head">
    <div id="logo">
        <a href="/"><img src="/img/logo.gif" alt="로고" /></a>
    </div>
    <nav id="top_menu">
        <ul>
            <?php
            session_start();
                if(isset($_SESSION["username"])){
                    echo  '<li>'.$_SESSION["username"].'님 환영합니다</li>
                            <li><a href="/login/logout.php">Logout</a></li>
                            ';
                }else{
                    echo '<li><a href="/login/login_form.html">Login</a></li>';
                    echo '<li><a href="/login/member_form.html">회원가입</a></li>';
                }
            ?>
            <li><a href="/">Home</a></li>
            <li><a href="/">English</a></li>
            <li><a href="/">Chinese</a></li>
        </ul>
    </nav>
</div>
<div class="header_shadow"></div>
<nav id="main_menu">
    <ul>
        <li>
            <a href="/AboutUs/Introduction.php">그리스신화박물관</a>
            <ul class="sub_menu">
                <li><a href="/AboutUs/Introduction.php">박물관소개</a></li>
                <li><a href="/AboutUs/GreekMyth.php">그리스신화란</a></li>
                <li><a href="/AboutUs/Provideo.php">홍보동영상</a></li>
                <li><a href="/AboutUs/Blogger.php">블로거와 함께하는 그리스신화박물관</a></li>
                <li><a href="/AboutUs/Pictures.php">사진으로보는 그리스신화박물관</a></li>
            </ul>
        </li>
        <li>
            <a href="/Exhibition/all.php">전시안내</a>
            <ul class="sub_menu">
                <li><a href="/Exhibition/all.php">전체</a></li>
                <li><a href="/Exhibition/1.php">창조관</a></li>
                <li><a href="/Exhibition/2.php">올리포스관</a></li>
                <li><a href="/Exhibition/3.php">신탁관</a></li>
                <li><a href="/Exhibition/4.php">영웅관</a></li>
                <li><a href="/Exhibition/5.php">휴먼관</a></li>
                <li><a href="/Exhibition/6.php">사랑관</a></li>
                <li><a href="/Exhibition/7.php">그리스마을</a></li>
            </ul>
        </li>
        <li>
            <a href="/Experience/all.php">체험하기</a>
            <ul class="sub_menu">
                <li><a href="/Experience/all.php">전체</a></li>
                <li><a href="/Experience/1.php">그리스의상 체험</a></li>
                <li><a href="/Experience/2.php">스탬프북</a></li>
                <li><a href="/Experience/3.php">아테네시민권 발급체험</a></li>
                <li><a href="/Experience/4.php">가면만들기 체험</a></li>
                <li><a href="/Experience/5.php">아트토이 체험</a></li>
            </ul>
        </li>
        <li>
            <a href="/Tour/intro.php">관람안내</a>
            <ul class="sub_menu">
                <li><a href="/Tour/intro.php">관람안내</a></li>
                <li><a href="/Tour/nav.php">오시는길</a></li>
            </ul>
        </li>
        <li>
            <a href="/Community/Notice.php">커뮤니티</a>
            <ul class="sub_menu">
                <li><a href="/Community/Notice.php">공지사항</a></li>
                <li><a href="/Community/FAQ.php">자주하는 질문</a></li>
                <li><a href="/Community/QnA.php">묻고 답하기</a></li>
            </ul>
        </li>
        <li>
            <a href="/Event/intro.php">이벤트</a>
            <ul class="sub_menu">
                <li><a href="/Event/intro.php">이벤트 안내</a></li>
            </ul>
        </li>
        <li>
            <a href="/Apply/info.php">취업정보</a>
            <ul class="sub_menu">
                <li><a href="/Apply/info.php">채용정보</a></li>
                <li><a href="/Apply/recommand.php">추천내용</a></li>
                <li><a href="/Apply/generic.php">일반 채용</a></li>
                <li><a href="/Apply/gov.php">정부지원일자리</a></li>
                <li><a href="/Apply/alba.php">아르바이트</a></li>
            </ul>
        </li>
    </ul>
</nav>
<nav id="quick_menu">
    <ul>
        <li>
            <a href=""><img src="/img/main/quick01.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick02.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick03.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick04.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick05.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick06.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick07.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick08.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick09.gif" alt="" /></a>
        </li>
        <li>
            <a href=""><img src="/img/main/quick10.gif" alt="" /></a>
        </li>
    </ul>
</nav>
