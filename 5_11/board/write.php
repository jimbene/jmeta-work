<?php
    $title = '글쓰기';
    include_once '../src/header.php';
?>

<form action="insert.php" method="post">
    <div>
        <label for="name">이름:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="message">메세지:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="글쓰기">
</form>
<?php
?>

<?php
    include_once '../src/footer.php';
?>