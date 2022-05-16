    <?php

use LDAP\Result;

        $title = 'home';
        include_once ('src/header.php');
        require_once ('src/functions.php');
        require_once ('src/functions.php');
    ?>
    <?php
        //echo sum(1,6);
        $result = sum(3,6);
        echo $result;

    ?>
    <h2>배열출력</h2>
    <?php
        $fruits = [
            'apple',
            'mango',
            'banana',
            'orange'
        ];

        // function output ($value) {
        //     echo '<pre>';
        //     print_r($value);
        //     echo '</pre>';
        // }
        output($fruits);
    ?>
    <h2>지역변수, 전역변수</h2>
    <?php
        function myfunc() {
            $var = 10;
            echo "{$var}";
        }
        myfunc();
    ?>
    <hr>
    <?php
        $var2 = 20;
        function myfunc2() {

            global $var2;
            echo "{$var2}<br>";
            echo "{$GLOBALS['var2']}";
        }
        myfunc2();
    ?>
    <h2>정적변수</h2>
    <?php
        
        increment();
        increment();
        increment();
        increment();
    ?>
    <?php
        include('src/footer.php')
    ?>
