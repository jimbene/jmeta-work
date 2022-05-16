<?php

    $title = '개인회원가입';
    include_once ('../templates/header.php');
?>

    <div class="main main__form">
        <div class="inner">

            <!-- JOIN ORDER -->
            <div class="main__terms-order flex">
                <span>정보입력</span>
                <img src="../../images/icon/order2.png" alt="2.회원정보입력">
            </div>

            <!-- FORM INPUT -->
            <div class="main__form--input">
                <div class="inner">
                    
                    <form action="request.php" method="post" id="infoForm">

                        <!-- LOGIN INFO -->
                        <div class="form-info section-24">
                            <h2 class="form-info__title">로그인정보</h2>

                            <div class="form-info__section">
                                <label for="userId">아이디<span class="nsy">*</span></label>
                                <div class="flex">
                                    <input type="email" name="" id="userId" class="input" placeholder="이메일형식에 맞게 작성해주세요">
                                    <button class="btn">중복확인</button>
                                </div>
                            </div>

                            <div class="form-info__section">
                                <label for="userId">비밀번호<span class="nsy">*</span></label>
                                <input type="password" name="" id="userPw" class="input" placeholder="5~20자 영문,숫자,특수문자 조합">
                            </div>

                            <div class="form-info__section">
                                <label for="userId">비밀번호확인<span class="nsy">*</span></label>
                                <input type="password" 
                                       name="" 
                                       id="userPw" 
                                       class="input" 
                                       placeholder="5~20자 영문,숫자,특수문자 조합">
                            </div>
                        </div>

                        <!-- USER INFO -->
                        <div class="form-info section-24">

                            <h2 class="form-info__title">회원정보</h2>

                            <div class="form-info__section">
                                <label for="userName">이름<span class="nsy">*</span></label>
                                    <input type="text"
                                           name="" 
                                           id="userName" 
                                           class="input" 
                                           placeholder="본명을 입력해 주세요">
                            </div>

                            <div class="form-info__section">
                                <label for="userName">연락처<span class="nsy">*</span></label>
                                    <input type="tel"
                                           name="" 
                                           id="userTel" 
                                           class="input" 
                                           placeholder="숫자만 입력 (예 : 01012345678)">
                            </div>

                            <div class="form-info__section">
                                <label for="userName">별명</label>
                                    <input type="text"
                                           name="" 
                                           id="userNick" 
                                           class="input" 
                                           placeholder="별명을 입력해 주세요">
                            </div>

                            <div class="form-info__section">
                                <label for="userId">생년월일<span class="nsy">*</span></label>
                                <div class="flex">
                                    <select class="input--select">
                                        <option value="#">성별</option>
                                        <option value="#">남자</option>
                                        <option value="#">여자</option>
                                    </select>
                                    <input type="email" name="" id="userId" class="input" placeholder="이메일형식에 맞게 작성해주세요">
                                </div>
                            </div>

                            <div class="form-info__section">
                                <label for="userAdr">주소<span class="nsy">*</span></label>
                                <div class="flex">
                                    <select class="input--select">
                                        <option value="#">시/도</option>
                                    </select>
                                    <select class="input--select">
                                        <option value="#">시/군/구</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- //FORM INFO -->

                        <input type="submit" class="pr-btn--bottom" value="완료">

                    </form>

                    <div class="btm-disc">
                        <span>가입 이후 마이페이지-회원정보 메뉴에서 수정할 수 있습니다.</span>
                    </div>
                </div>

            </div>
            <!-- //main__form--input -->

        </div>

    </div>

</body>
</html>