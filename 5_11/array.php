<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        //$배열이름 = array();
        /*$fruits = array();
        $fruits[0] = 'apple';
        $fruits[1] = 'banana';
        $fruits[2] = 'orange';*/

        $fruits = array('apple', 'banana', 'orange');

        //echo $fruits;

        if(isset($fruits[3])){
            echo $fruits[3].'<br>';
        }else{
            echo '없음<br>';
        }

    ?>
    <hr/>
    <h2>for</h2>
    <?php
        for($i = 0; $i < count($fruits); $i++) {
            echo $fruits[$i].'<br>';
        }
    ?>
    <h2>foreach</h2>
    <?php
        foreach($fruits as $item){
            echo $item.'<br>';
        }
    ?>
    <h2>연관배열 Associative Array</h2>
    <?php
        /*$prices = array();
        $prices['apple'] = 1000;
        $prices['banana'] = 2000;
        $prices['orange'] = 3000;*/

        $prices = array('apple'=>1000, 'banana' => 2000, 'orange' => 3000);

        foreach($prices as $key => $price) {
            echo $key." : ".$price.'<br>';
        }
    ?>
</body>
</html>