<?php
    $title = 'abc 게시판';
    include_once '../src/header.php';
?>

<h2>글목록</h2>
<?php
    $conn = mysqli_connect("localhost", "root", "123456", "abc_corp");

    if(!$conn) {
        echo "db에 연결하지 못했습니다.". mysqli_connect_error();
        exit;
    }else{
        echo "db에 접속했습니다";
    }

    //msg_board table에서 글조회
    $sql = "SELECT * FROM msg_board";
    $result = mysqli_query($conn, $sql);
    $list = '';
    
    // print_r($result);
    // var_dump($result);

    while(){}




?>
<hr>
<p><a href="write.php">글쓰기</a></p>
<hr>
<h2>글검색</h2>
<form action="search.php" method="post">
    <h3>검색할 키워드를 입력하세요</h3>
    <div>
        <label for="search">검색키워드:</label>
        <input type="text" id="search" name="skey">
    </div>
    <input type="submit" value="검색">
</form>
<hr>
<h2>글삭제</h2>
<form action="delete.php" method="post">
    <h3>삭제할 메세지 번호를 입력하세요</h3>
    <div>
        <label for="msgdel">번호:</label>
        <input type="text" id="msgdel" name="delnum">
    </div>
    <input type="submit" value="삭제">
</form>
<hr>

<?php
    include_once '../src/footer.php';
?>