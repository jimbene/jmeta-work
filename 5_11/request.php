<?php
    $title = 'request';
    include_once('src/header.php');
    require_once('src/functions.php');
?>

<?php
    $name = $_POST["username"];
    $email = $_POST["useremail"];

    echo $name.'님의 입력한 이메일은'.$email.'입니다';
?>

<?php
    include_once('src/footer.php');
?>