<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $result = 1 < 3;
        echo $result == true.'<br>';
        

        $first_name = 'dejay';
        $last_name = 'kim';

        //&& = and 둘다 참일때 true
        //|| = or 둘중 하나가 참일때 true
        //xor = 둘중 하나가 다를때 true

        if($first_name == 'dejay' xor $last_name == 'kim') {
            echo '<div>조건은 참이다</div>';
        }else {
            echo '<div>조건은 거짓이다</div>';
        }
    ?>

</body>
</html>