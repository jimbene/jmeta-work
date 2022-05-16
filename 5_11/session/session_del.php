<?php
    session_start();
?>

<?php 
    $title = 'session del';
    include_once('../src/header.php');
?>
<?php

    session_destroy(); //세션의 모든 변수를 지움
    echo $_SESSION['city'];
    print_r($_SESSION);
    
?>

<?php
    include_once '../src/footer.php';
?>