<?php
$nilai1 = [ "A", "B", "C", "D", "E", "F", "G", "H","I", "J", "K", "L", "M"];
$nilai2 = ["N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

$mapel1 = ["Pendidikan Agama dan Budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika"];
$mapel2 = ["Bahasa Inggris", "Dasar dasar Kejuruan RPL"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bulat{
            width : 80px;
            height : 80px;
            background : red;
            text-align : center;
            line-height : 80px;
            margin: 5px;
            float: left;
            border-radius:50%;
            color: white;
            font :  
        }
        .clear{
            clear : both;
        }

        .daun{
            width : 300px;
            height : 200px;
            background : orange;
            text-align : center;
            line-height : 200px;
            margin: 5px;
            float: left;
            border-radius:50px 0px 50px 0px;
            color: white;

        }

    </style>
</head>
<body>

<?php foreach ($nilai1 as $hrf) : ?>
    <div class = "bulat"> <?= $hrf; ?></div>
<?php endforeach; ?>

<div class ="clear"></div>

<?php foreach ($nilai2 as $huruf) : ?>
    <div class = "bulat"> <?= $huruf; ?> </div>
<?php endforeach; ?>

<div class ="clear"></div>

<h1>Mata Pelajaran - X RPL </h1>
<?php foreach ($mapel1 as $mpl1) : ?>
    <div class = "daun"> <?= $mpl1; ?></div>
<?php endforeach; ?>

<div class ="clear"></div>

<?php foreach ($mapel2 as $mpl) : ?>
    <div class = "daun"> <?= $mpl; ?> </div>
<?php endforeach; ?>

</body>
</html>