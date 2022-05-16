<?php
    $ckName = 'city';
    $ckValue = 'seoul';

    setcookie($ckName, $ckValue, time()+60,  '/');
?>
<?php
    $title = 'cookie';
    include_once('../src/header.php');
?>
<h2>쿠키체크하기</h2>
<?php
    //$_ super global var
    if(!isset($_COOKIE[$ckName])){
        echo $ckName.'의 쿠키는 생성되지 않았습니다';
    }else{
        echo $ckName.'의 쿠키는 생성되었습니다.';
        echo '생성된 값은'.$_COOKIE[$ckName].'입니다';
    }
?>


<?php
    include_once('../src/footer.php');
?>