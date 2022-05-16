<?php
    $title = '잡인메타';
    include_once ('./templates/header-main.php');
    include_once ('./templates/nav.php');
    include_once ('./templates/lnb.php');
?>      
        <!-- VISUAL -->
        <div class="main main__visual">
            <form action="#" class="main__form">
                <div class="form__inner input">
                    <input type="text" id="mainSearch" placeholder="찾는 공고를 검색해 보세요">
                    <button 
                        type="submit"
                        class="search-btn ir-btn sy-icon"
                        >검색버튼</button>
                </div>
            </form>

            <div class="main__banner">
                <figure class="main__banner--figure">
                    <img src="./images/temp/tp_main-bnr-01.png" alt="이력서에 희망근무조건을 등록하면 맞춤 공고를 보여드려요">
                </figure>
            </div>

        </div>

        <!-- PUBLIC -->
        <div class="main-public public__container">
            
            <div class="main-public__list">

                <div class="main-shorcut">
                    <a href="#">맞춤공고</a>
                    <a href="#">지역별</a>
                </div>

                <!-- TABS1 -->
                <section class="public__list gray-bg section">

                    <div class="tabs__title">
                        <h2>맞춤공고</h2>
                        <span class="more-btn">전체보기</span>
                    </div>

                    <ul class="tabs__list">

                        <li class="tabs__list-card card">

                            <div class="list-top">
                                <div>
                                    <span class="card-top cp-name">아람솔루션</span>
                                    <h3>신입/경력 웹 개발자 채용</h3>
                                </div>
                                <input type="checkbox" name="likeBtn" id="likeBtn">
                                <label for="likeBtn">
                                    <span class="check__btn--like"></span>
                                </label>
                            </div>

                            <div class="list-btm">
                                <div class="consult-li card-line1">
                                    <span class="career">신입, 경력·정규직·기간협의</span>
                                    <span class="empoly">정규직</span>
                                    <span class="period">기간협의</span>
                                </div>
                                <span class="list-address card-line2">전북 전주시 완산구</span>
                            </div>
                        </li>

                        <li class="tabs__list-card card">

                            <div class="list-top">
                                <div>
                                    <span class="card-top cp-name">아람솔루션</span>
                                    <h3>신입/경력 메타버스 플랫폼 개발 관련 직군 채용 (Unity, 3D max 등)</h3>
                                </div>
                                <input type="checkbox" name="likeBtn" id="likeBtn">
                                <label for="likeBtn">
                                    <span class="check__btn--like"></span>
                                </label>
                            </div>

                            <div class="list-btm">
                                <div class="consult-li card-line1">
                                    <span class="career">신입, 경력·정규직·기간협의</span>
                                    <span class="empoly">정규직</span>
                                    <span class="period">기간협의</span>
                                </div>
                                <span class="list-address card-line2">전북 전주시 완산구</span>
                            </div>
                        </li>

                        <li class="tabs__list-card card">

                            <div class="list-top">
                                <div>
                                    <span class="card-top cp-name">(주)oo캐피탈</span>
                                    <h3>OO캐피탈 신입사원 채용공고</h3>
                                </div>
                                <input type="checkbox" name="likeBtn" id="likeBtn">
                                <label for="likeBtn">
                                    <span class="check__btn--like"></span>
                                </label>
                            </div>

                            <div class="list-btm">
                                <div class="consult-li card-line1">
                                    <span class="career">신입, 경력·정규직·기간협의</span>
                                    <span class="empoly">정규직</span>
                                    <span class="period">기간협의</span>
                                </div>
                                <span class="list-address card-line2">전북 전주시 완산구</span>
                            </div>
                        </li>

                        <li class="tabs__list-card card">

                            <div class="list-top">
                                <div>
                                    <span class="card-top cp-name">아람솔루션</span>
                                    <h3>신입/경력 웹 개발자 채용</h3>
                                </div>
                                <input type="checkbox" name="likeBtn" id="likeBtn">
                                <label for="likeBtn">
                                    <span class="check__btn--like"></span>
                                </label>
                            </div>

                            <div class="list-btm">
                                <div class="consult-li card-line1">
                                    <span class="career">신입, 경력·정규직·기간협의</span>
                                    <span class="empoly">정규직</span>
                                    <span class="period">기간협의</span>
                                </div>
                                <span class="list-address card-line2">전북 전주시 완산구</span>
                            </div>
                        </li>
                    </ul>

                </section>

                <!-- TABS2 -->
                <section id="tabs2" class="tabs gray-bg">
                    <h2 class="tabs__title">지역별</h2>
                </section>

                <!-- TABS3 -->
                <section id="tabs3" class="tabs gray-bg">
                    <h2 class="tabs__title">직종별</h2>
                </section>

            </div>

        </div>

        <main></main>
        <footer></footer>
    </div>
</body>
</html>