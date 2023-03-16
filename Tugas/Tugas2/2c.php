<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>

        .warna{
            width: 20px;
            height: 20px;
            background-color: blue;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>


    <table cellpadding="10" cellspacing="0">
        <?php for($i = 10; $i >= 1; $i--) :?>
            <tr>
            <?php  for($p = 1; $p <= $i; $p++) :?>
                <td class="warna"><?= "$p"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php  endfor;?>
        
    </table>
</body>
</html>
