<?php
    //Sama Dengan (==)
    $a = 5;
    $b = '5';
    var_dump($a == $b); // Output: bool(true)
    echo "<hr/>";

    //Identik (==)
    $a = 5;
    $b = '5';
    var_dump($a == $b); // output: bool(false)
    echo "<hr/>";

    //Tidak Sama Dengan (!= atau <>)
    $a = 5;
    $b = 6;
    var_dump($a != $b); // Output: bool(true)
    echo "<hr/>";

    //Tidak Identik (!==)
    $a = 5;
    $b = '5';
    var_dump($a !== $b); // Output: bool(true)
    echo "<hr/>";

    //Lebih Besar Dari (>)
    $a = 10;
    $b = 5;
    var_dump($a > $b); //Output: bool(true)
    echo "<hr/>";

    //Lebih Kecil Dari (<)
    $a = 3;
    $b = 7;
    var_dump($a < $b); //Output: bool(true)
    echo "<hr/>";

    //Lebih Besar Dari Atau Sama Dengan (>=)
    $a = 8;
    $b = 8;
    var_dump($a >= $b); //Output: bool(true)
    echo "<hr/>";

    // Lebih Kecil Dari Atau Sama Dengan
    $a = 4;
    $b = 5;
    var_dump($a <= $b); //Output: bool(true)
    echo "<hr/>";


?>

