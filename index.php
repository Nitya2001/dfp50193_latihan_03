<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>

<body>
    <h1>ASAS PHP </h1>

    <?php
    // komen satu baris
    #komen satu baris
    /*
     komen banyak baris
     */


    $namapelajar = 'Nitya';

    echo "<h2>Hello $namapelajar</h2>"; # output
    $hadir = false;
    $umur = 20;
    $nokp = '010120101578';

    $x = 10;
    $y = 6;

    echo $x * $y;

    ?>
    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <h2>
        <?php
        $bandar = 'Arau';
        $baru = 'Bandar ';
        for($x = 0; $x < strlen($bandar); $x++){
            $baru .= $bandar[$x] . '-';
        }
        echo $baru;
        ?>
    </h2>

</body>

</html>