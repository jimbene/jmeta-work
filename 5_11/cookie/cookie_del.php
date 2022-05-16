<?php
    $ckName = 'city';
    $ckValue = 'seoul';

    setcookie($ckName, $ckValue, time()-60,  '/');
?>

<?php 
    $title = 'cookie_del';
    include_once('../src/header.php');
?>
<?php
    echo $ckName.'의 쿠키가 삭제되었습니다';
    echo '생성된값은'.$_COOKIE[$ckName].'입니다';
?>

<?php
    include_once '../src/footer.php';
?>
