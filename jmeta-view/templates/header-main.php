<?php
    if(!isset($title)) {
        $title = '';
    }
    if($title == '로그인') {
        
    }
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

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" 
          type="text/css"
          href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js" defer></script>
    <script src="js/common.js" defer></script>
</head>
<body>
    <div class="body__container">

        <!-- HEADER -->
        <header class="header">
                <div class="inner">

                    <h1 class="header__title">
                        <a class="logo"
                        href="#">
                            <img src="./images/logo.svg"
                                alt="<?= $title; ?>" />
                        </a>
                    </h1>

                    <div class="header--left">
                        <button class="drow-btn ir-btn sy-icon">햄버거 메뉴</button>
                    </div>

                </div>
            </header>
