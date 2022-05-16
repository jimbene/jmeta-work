<?php

    $title = '개인회원가입';
    include_once ('../templates/header.php');
?>

    <div class="main main__terms">

        <!-- JOIN ORDER -->
        <div class="main__terms-order flex">
            <span>이용약관</span>
            <img src="../../images/icon/order1.png" alt="1.이용약관">
        </div>

        <!-- TERMS CONTENT -->
        <div class="main__terms-con section">

            <div class="agree-all flex-sb">

                <h3>모두 동의합니다</h3>
                <input type="checkbox" name="agree" id="agreeAll">
                <label for="agreeAll"></label>

            </div>

            <ul class="agree-box">

                <li class="flex-sb">

                    <div class="items-left">
                        <h3>이용약관 동의<span class="nsy">(필수)</span></h3>
                    </div>

                    <div class="items-right">
                        <a href="#">내용보기</a>
                        <input type="checkbox" name="agree" id="agree-1" class="agree">
                        <label for="agree-1"></label>
                    </div>

                </li>

                <li class="flex-sb">

                    <div class="items-left">
                        <h3>개인정보 수집 및 이용 동의<span class="nsy">(필수)</span></h3>
                    </div>

                    <div class="items-right">
                        <a href="#">내용보기</a>
                        <input type="checkbox" name="agree" id="agree-2" class="agree">
                        <label for="agree-2"></label>
                    </div>

                </li>

                <li class="flex-sb">
                    <div class="items-left">
                        <h3>위치기반 서비스 이용 동의<span class="sel">(선택)</span></h3>
                    </div>
                    <div class="items-right">
                        <a href="#">내용보기</a>
                        <input type="checkbox" name="agree" id="agree-3" class="agree">
                        <label for="agree-3"></label>
                    </div>
                </li>

                <li class="flex-sb">
                    <div class="items-left">
                        <h3>마케팅 수신 동의<span class="sel">(선택)</span></h3>
                    </div>
                    <div class="items-right">
                        <a href="#">내용보기</a>
                        <input type="checkbox" name="agree" id="agree-4" class="agree">
                        <label for="agree-4"></label>
                    </div>
                </li>

                <li class="flex-sb">
                    <label for="agree-1">
                        <h3>PUSH 알림 수신 동의<span class="sel">(선택)</span></h3>
                    </label>
                    <div class="items-right">
                        <a href="#">내용보기</a>
                        <input type="checkbox" name="agree" id="agree-5" class="agree">
                        <label for="agree-5"></label>
                    </div>
                </li>

            </ul>
        </div>

    </div>

    <a href="#" class="pr-btn--bottom pr-btn--icon">
        <input type="button" value="다음">    
    </a>

</body>
</html>