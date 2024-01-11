<?php

echo "hello world!";
var_dump ("hello jing");
echo 123;
print_r ("jirlah");

/// 1. HTML Di Dalam PHP
$nama= "ambatukaaaammm";
echo "<h1>$nama</h1>";
$matapelajaran = "Dasar-Dasar RPL 2";

//2. PHP Didalam HTML
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ambatukaaaammm</title>
</head>
<body>
<h1><?= $matapelajaran; ?> </h1>
</body>
</html>