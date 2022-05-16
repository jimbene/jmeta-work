<?php
    $title = 'get input';
    include_once('../src/header.php');

?>
<?php
    //$productId = $_GET['productid'];
    //$limitId = $_GET['limitid'];
    $productId = filter_input(INPUT_GET, 'productid', FILTER_VALIDATE_INT);
    $limitId = filter_input(INPUT_GET, 'limitid', FILTER_VALIDATE_INT);

    /*if($productId == false || $limitId == false) {
        die();
    }*/

    if($productId == false) {
        $productId = 0;
    }
    if($limitId == false) {
        $limitId = 0;
    }
?>
<p>showing category : <?= $productId; ?>- Limit : <?= $limitId; ?></p>

<?php
    include_once('../src/footer.php');

?>