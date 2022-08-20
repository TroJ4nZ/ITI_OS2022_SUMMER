<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>

<body>
    <?php
    echo nl2br("Te\nst!");
    echo nl2br("\n\n\n\n******************\n\n\n\n");

    $s1 = "First";
    $s2 = "Second";
    echo strcmp($s1, $s2) . "<br>";
    echo strtoupper($s1) . "<br>";
    echo substr($s1, 1, 3) . "<br>";

    echo nl2br("\n\n\n\n******************\n\n\n\n");

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo nl2br("\n\n\n\n******************\n\n\n\n");

    $arr = array(12, 45, 10, 25);
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    echo $sum  . "<br>";
    echo $sum / count($arr)  . "<br>";

    echo nl2br("\n\n\n\n******************\n\n\n\n");
    rsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo nl2br("\n\n\n\n******************\n\n\n\n");


    $arr = array("Sara" => "31", "John" => "41", "Walaa" => "39", "Ramy" => "40");
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo nl2br("\n\n\n\n******************\n\n\n\n");

    asort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo nl2br("\n\n\n\n******************\n\n\n\n");


    ksort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo nl2br("\n\n\n\n******************\n\n\n\n");

    arsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo nl2br("\n\n\n\n******************\n\n\n\n");

    krsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";


    ?>
</body>

</html>