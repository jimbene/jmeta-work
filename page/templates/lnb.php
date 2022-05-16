<?php
    $userName = "아람킴";
    $userAge = "26";
    $userZender = "여";
?>
<div class="lnb">
    <div class="inner">

        <div class="lnb__top">

            <!-- LNB LOGO -->
            <div class="lnb-logo section">
                <a class="logo"
                    href="#">
                    <img src="./images/logo.svg"
                    alt="<?= $title; ?>" />
                </a>

                <button class="close-btn sy-icon">닫기</button>
            </div>

            <!-- USER -->  
            <div class="user-info section">

                
                <!-- USER INFO -->
                <div class="user-info__left">
                    
                    <div class="user-img">
                        <img src="../images/icon/pf-none.png" alt="<?= $userName ?>">
                    </div>

                    <div class="user-info--text">
                        <span class="user-name"><?= $userName ?></span>
                        <span class="user-age"><?= $userZender ?></span>
                        <span class="user-age"><?= $userAge ?></span>
                    </div>

                </div>

                <div class="user-info__right">
                    <a href="#">회원정보</a>
                </div>
            </div>

        </div>

        <ul class="lnb__li">

            <li class="li-deps1-1 deps">
                <a href="#">채용공고</a>
            </li>
            <ul>
                <li class="li-deps2">
                    <a href="#">지역별 공고</a>
                </li>
                <li class="li-deps2">
                    <a href="#">직종별 공고</a>
                </li>
            </ul>

            <li class="li-deps1-2 deps">
                <a href="#">맞춤공고</a>
            </li>

            <li class="li-deps1-3 deps">
                <a href="#">관심공고</a>
            </li>

            <li class="li-deps1-4 deps">
                <a href="#">마이페이지</a>
            </li>
            <ul>
                <li class="li-deps2">
                    <a href="#">회원정보 수정</a>
                </li>
                <li class="li-deps2">
                    <a href="#">입사지원 현황</a>
                </li>
                <li class="li-deps2">
                    <a href="#">공지사항</a>    
                </li>
                <li class="li-deps2">
                    <a href="#">환경설정</a>
                </li>
            </ul>
            
        </ul>

    </div>
</div>