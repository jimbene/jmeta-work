<?php
    session_start();
    $_SESSION['city'] = 'seoul';
    
    $_SESSION['gu'] = 'Jongro';
?>

<?php 
    $title = 'session';
    include_once('../src/header.php');
?>
<?php
    echo '세선이 등록되었습니다<br>';
    if(!isset($_SESSION['city'])){
        echo '세션이 등록되어 있지 않습니다';
    }else{
        echo $_SESSION['city'].'세션이 등록되어 있습니다<br>';
        print_r($_SESSION); //모든정보 배열형태로 출력
    }
?>

<?php
    include_once '../src/footer.php';
?>