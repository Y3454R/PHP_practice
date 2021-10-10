<?php

//https://youtu.be/E1ms4qpfy78?list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o
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
    <div>
        <ul>
            <?php foreach($products as $product) { ?>
                <?php if($product['price'] > 15){ ?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
