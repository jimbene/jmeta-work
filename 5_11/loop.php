<?php
    $title = "loop";
    include_once('src/header.php');
?>
    <h2>while</h2>
    <?php
        $i = 0;
        while($i < 5) {
            echo ($i++).'<br>';
        }
    ?>
    <h2>do/while</h2>
    <?php
        $i = 0;
        do{
            echo ($i++).'<br>';
        }while($i < 5);
    ?>
    <h2>for</h2>
    <?php
        for($i = 0; $i < 5; $i++){
            //echo $i.'<br>';
            echo "{$i}<br>";
        }
    ?>
    <h2>foreach</h2>
    <?php
        $results = array(0,3,4,6,8);
        foreach($results as $result) {
            echo "변수 \$result의 값은 {$result}입니다 <br>";
        }
    ?>
    <hr>
    <?php
        $scores = array(
            '국어' => 80,
            '수학' => 100,
            '영어' => 90,
            '과학' => 95
        );
        foreach($scores as $key => $score) {
            echo "배열 \$scores에서 과목명 {$key}의 점수는 {$score}입니다<br>";
        }
    ?>

<?php
    include_once('src/footer.php');
?>