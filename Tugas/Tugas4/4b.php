<?php
$kotakperangkat = ['Motherboard','Procesor','Hard Disk','PC Coller','VGA Card','SSD']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
    
<?php foreach ($kotakperangkat as $komputer) {?>
    <li><?=$komputer ?></li>
    <?php } ;?>
</ol>
    <?php
    $kotakperangkat[] = "Card Reader";
    $kotakperangkat[] = "Modem";
    sort($kotakperangkat);

    ?>
    <h4>Macam-macam perangkat keras baru</h4>
    <ol>
        <?php foreach ($kotakperangkat as $komputer) {?>
        <li><?= $komputer; ?></li>
        <?php }; ?>
        </ol>


</body>
</html>