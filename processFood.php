<?php include("include/header.php"); session_start(); ?>
<?php 
$storeOnOrOff = array();
$storePrices = array();
$storeValues = array();
$i = 0;
$j = 0;
$z = 0;
foreach($_POST as $foodName => $value)
{
    if(preg_match('/name/', $foodName)) {
        $foodName = str_replace("name", "" , $foodName);
        $foodName = str_replace("_", " ", $foodName);
        $storeOnOrOff[$i] = $foodName;// . "=" . (string)$value;
        $i = $i + 1;
    }
    if (preg_match('/price/', $foodName)) {
        $foodName = str_replace("price", "" , $foodName);
        $foodName = str_replace("_", " ", $foodName);
        $storePrices[$j] = $foodName;
        $storeValues[$z] = $value;
        $j = $j + 1;
        $z = $z + 1;
    }
}
$_SESSION['OnOffHolder'] = $storeOnOrOff;
$_SESSION['storeMyPrices'] = $storePrices;
$_SESSION['storeMyValues'] = $storeValues;
$a = true;
if($a) {
    header('Location: addFood.php');
    exit();
}
?>
<?php include("include/footer.php"); ?>