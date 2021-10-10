<?php
    // https://youtu.be/TBUgZ84tTgU?list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o
    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>My first PHP file</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>
            <h3><?php echo $product['name'];?></h3>
            <p>BDT <?php echo $product['price'];?></p>
        <?php } ?>
    </ul>
</body>
</html>
