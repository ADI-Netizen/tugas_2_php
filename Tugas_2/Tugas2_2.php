<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $beli = 50000;
    $jual = 80000;
    ?>

    <p>Beli = <?= $beli ?></p>
    <p>Jual = <?= $jual ?></p>
    <p>Keuntungan = ? </p>
    <p>Jawaban :
        <?php
        $keuntungan = $jual - $beli;
        $persentase = ($keuntungan / $beli) * 100;
        echo $persentase . " %";
        ?>
    </p>
</body>

</html>