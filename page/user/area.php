<?php
    $title = '지역별공고';
    include_once ('../templates/header.php');
    include_once ('../templates/nav.php');
?>  
    <div class="main main__area">
        <div class="inner">

            <div class="main__area--top">

                <!-- AREA SELECT -->
                <div class="area-condition top-1 flex-sb">
                    <span>지역을 선택해 주세요</span>
                    <a href="#" class="pr-light-btn">지역선택</a>
                </div>

                <!-- DETAIL SELECT -->
                <div class="area-detail top-2">
                    <span>상세조건을 추가해 보세요</span>
                    <a href="#" class="more-btn detail-more">상세조건선택</a>
                </div>

            </div>

            <!-- PUBLIC LIST -->
            <section class="public__list gray-bg">

                <div class="tabs__title area-filter flex-sb section">
                    <h2>전체 <span class="list-num">10,422</span>건</h2>
                    <select name="" id="">
                        <option value="#">최신순</option>
                    </select>
                </div>

                <?php 
                    include_once ('../../page/templates/card_list.php');
                ?>
            </section>

        </div>
    </div>

</body>
</html>