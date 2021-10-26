<?php

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    function formatProduct($productArray) {
        $returnStr = "";
        foreach($productArray as $product){
           $returnStr = $returnStr."{$product['name']} costs BDT {$product['price']} to buy. <br/>";
    
        }
        return $returnStr;
    }
    $str = formatProduct($products);
    echo $str;

    

?>

<!DOCTYPE html>
<html>
<head>
    <title>My first PHP file</title>
</head>
<body>

</body>
</html>
