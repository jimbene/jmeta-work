<?php
    if(!isset($title)) {
        $title = '';
    }
    if($title == '로그인') {

    }

    $mainTitle = '잡인메타';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?= $title; ?></title>
    <meta name="title" content="job in meta | 잡인메타">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="aram solution">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> <!-- root에 있으면 생략가능 -->
    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,nofollow">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- RESET -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" 
          type="text/css"
          href="../../css/style.css">

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../js/main.js" defer></script>
    <script src="../../js/common.js" defer></script>
</head>
<body>
    <div class="body__container">

        <!-- HEADER -->
        <header class="header">
            <div class="inner">
                <div class="header__title">
                    <h1 class="title-text"><?= $title; ?></h1>
                </div>

                <?php
                    if($title == '로그인') {
                        echo '<div class="header--right">
                                <a href="#" class="close-btn">닫기</a>
                            </div>';
                    }else if($title == '지역별공고'){
                        echo '<div class="header--left">
                                <a href="#" class="return-btn">되돌아가기</a>
                            </div>
                            <div class="header--right">
                                <a href="search.php" class="search-btn">검색</a>
                            </div>';
                    }else {
                        echo '<div class="header--left">
                                <a href="#" class="return-btn">되돌아가기</a>
                            </div>';
                    }
                ?>
                
            </div>
        </header>