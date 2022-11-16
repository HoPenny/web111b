<?php
/*$priceNameList = ['Original', 'VIP', 'Top'];
$priceList = [100, 200, 300];
$total = count($priceNameList);
for ($i = 0; $i < $total; $i++) {
${'price' . $priceNameList[$i]} = $priceList[$i];

echo ${'price' . $priceNameList[$i]} . "<br>";

}

echo $priceOriginal . "<br>";*/

$priceDictionary = array("Original" => 100, "VIP" => 200, "Top" => 300);

foreach ($priceDictionary as $key => $value) {
    ${'price' . $key} = $value;
}
echo $priceOriginal . "<br>";