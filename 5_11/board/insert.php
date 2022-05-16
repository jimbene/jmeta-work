<?php 
    $title = 'insert';
    include_once '../src/header.php';
?>

<?php
    $conn = mysqli_connect("localhost", "root", "123456", "abc_corp");

    if(!$conn) {
        echo "db에 연결하지 못했습니다.". mysqli_connect_error();
        exit;
    }else{
        echo "db에 접속했습니다";
    }

    $user_name = $_POST['name'];
    $user_msg = $_POST['message'];

    // print $user_name;
    // print $user_msg;

    $sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";

    $result = mysqli_query($conn, $sql);

    if($result === false) {
        echo '저장하지 못했습니다';
        error_log(mysqli_error($conn)); //에러로그를 기록
    }else {
        echo '저장성공';
    }

    mysqli_close($conn);
    print "<hr><a href='index.html'>메인화면으로 이동하기</a>"
?>

<?php
    include_once '../src/footer.php';
?>