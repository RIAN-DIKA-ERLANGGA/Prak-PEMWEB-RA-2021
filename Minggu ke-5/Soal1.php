<?php

    function Tambah($r, $d){
        $hasil = $r + $d;
        echo "<h3> PENJUMLAHAN </h3>";
        echo "Operator: +";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Kurang($r, $d){
        $hasil = $r - $d;
        echo "<h3> PENGURANGAN </h3>";
        echo "Operator: -";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Kali($r, $d){
        $hasil = $r * $d;
        echo "<h3> PERKALIAN</h3>";
        echo "Operator: *";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Bagi($r, $d){
        $hasil = $r / $d;
        echo "<h3> PEMBAGIAN</h3>";
        echo "Operator: /";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function mod($r, $d){
        $hasil = $r % $d;
        echo "<h3> MODULO</h3>";
        echo "Operator: %";
        echo "<br>";
        echo "Hasil = $hasil";
        }
        echo "Bilangan 1 = 10";
        echo "<br>";
        echo "Bilangan 2 = 5";
        echo "<br>";
        echo "Berikut merupakan hasil dari setiap operasi";
        echo "<br>";

        Tambah(10, 5);
        Kurang (10,5);
        Kali(10,5);
        Bagi (10,5);
        mod(10, 5);

?>