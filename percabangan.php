<?php
    //Percabangan If
    $total_belanja = 150000;

    if($total_belanja > 100000){
        echo "Anda dapat hadiah!<hr>";
    }

    //Percabangan If/Else
    $umur = 13;

    if ($umur < 18 ){
        echo "kamu tidak boleh membuka situs ini!<hr>";
    } else {
        echo "selamat datang di website kami!<hr>";
    }
    $nilai = 88;

    //Percabngan If/Elseif/Elsew
    if ($nilai > 90) {
        $grade = "A+";
    } elseif ($nilai > 80){
        $grade = "A";
    } elseif ($nilai > 70){
        $grade = "B+";
    } elseif ($nilai > 60){
        $grade = "B";
    } elseif ($nilai > 50){
        $grade = "C+";
    } elseif ($nilai > 40){
        $grade = "C";
    } elseif ($nilai > 30){
        $grade = "D";
    } elseif ($nilai > 20){
        $grade = "E";
    } else {
        $grade = "F";
    }
    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";

?>