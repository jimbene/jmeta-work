<?php

    $title = '로그인';
    include_once ('./templates/header.php');
?>
    <div class="main main__login">

        <div class="inner">

            <!-- TAB -->
            <ul class="login-tab menu-tab">
                <li><a href="#tabs1" class="active">개인회원</a></li>
                <li><a href="#tabs2">기업회원</a></li>
            </ul>

            <!-- TABS1 -->
            <div id="tabs1" class="tabs user-login">
                <div class="inner section">

                    <h2 class="login-logo">
                        <img src="../images/logo.svg"
                            alt="<?= $mainTitle; ?>" />
                    </h2>

                    <form action="request.php" method="post" id="form">
                        <div>
                            <label for="userName">아이디</label>
                            <input class="input" type="text" name="username" id="userName" placeholder="아이디를 입력해 주세요">
                        </div>
                        <div>
                            <label for="userEmail">비밀번호</label>
                            <input class="input" type="email" name="useremail" id="userEmail" placeholder="비밀번호를 입력해 주세요">
                        </div>
                        <div>
                            <input class="pr-btn" type="submit" value="로그인">
                        </div>
                    </form>

                    <!-- SHORTCUT -->
                    <ul class="user-shortcut">
                        <li><a href="#">회원정보찾기</a></li>
                        <li><a href="#">회원가입하기</a></li>
                    </ul>

                    <!-- SNS LOGIN -->
                    <div class="sns-login">
                        <h3 class="sns-login__title">SNS계정으로 로그인하기</h3>

                        <ul class="sns-login__list">
                            <li><a href="#" class="sns__list--a sns__list--1 ">네이버로그인</a></li>
                            <li><a href="#" class="sns__list--a sns__list--2 ">카카오로그인</a></li>
                            <li><a href="#" class="sns__list--a sns__list--3 ">애플로그인</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- TABS2 -->
            <div id="tabs2" class="tabs comp-login">
                <div class="inner section">

                    <h2 class="login-logo">
                        <img src="../images/logo.svg"
                            alt="<?= $mainTitle; ?>" />
                    </h2>

                    <form action="request.php" method="post" id="form">
                        <div>
                            <label for="userName">아이디</label>
                            <input class="input" type="text" name="username" id="userName" placeholder="아이디를 입력해 주세요">
                        </div>
                        <div>
                            <label for="userEmail">비밀번호</label>
                            <input class="input" type="email" name="useremail" id="userEmail" placeholder="비밀번호를 입력해 주세요">
                        </div>
                        <div>
                            <input class="pr-btn" type="submit" value="로그인">
                        </div>
                    </form>

                    <!-- SHORTCUT -->
                    <ul class="user-shortcut">
                        <li><a href="#">회원정보찾기</a></li>
                        <li><a href="join.php">회원가입하기</a></li>
                    </ul>

                </div>

            </div>
            <!-- //TABS2 -->

        </div>
        <!-- //INNER -->
    </div>
</body>
</html>