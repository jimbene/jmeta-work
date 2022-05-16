
<?php
    function sum($x, $y){
        //return $x + $y;
        $result = $x + $y;
        return $result;
    }

    function output ($value) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    function increment() {
        static $count = 0;
        echo "{$count}<br>";
        $count++;
    }
?>