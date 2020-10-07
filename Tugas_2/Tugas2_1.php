<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hariAwal = 36;
    $pekerjaAwal = 12;
    $pekerjaAkhir = 24;
    ?>
    <p><?= $hariAwal ?> Hari = <?= $pekerjaAwal ?> Pekerja</p>
    <p>X hari = <?= $pekerjaAkhir ?> Pekerja</p>
    <p>X = ...?</p>
    <p>Jawaban :</p>
    <p>
        <?php
        $jawaban = ($hariAwal * $pekerjaAwal) / $pekerjaAkhir;

        echo $jawaban;
        ?>
    </p>
</body>

</html>