<?php
    $title = '잡인메타';
    include_once ('./page/templates/header-main.php');
    include_once ('./page/templates/nav.php');
    include_once ('./page/templates/lnb.php');
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
        <!-- //VISUAL -->

        <!-- PUBLIC -->
        <div class="main-public public__container">
            
            <div class="main-public__list">

                <div class="main-shorcut">
                    <a href="#">맞춤공고</a>
                    <a href="#">지역별</a>
                </div>

                <!-- PUBLIC LIST -->
                <section class="public__list gray-bg section">

                    <div class="tabs__title">
                        <h2>맞춤공고</h2>
                        <span class="more-btn">전체보기</span>
                    </div>

                    <?php
                        include_once ('./page/templates/card_list.php');
                    ?>

                </section>

            </div>

        </div>

        <!-- //PUBLIC -->

    </div>
</body>
</html>