<?php
    function pengurutan(){
        $Nama = array("Larine", "Aduh", "Qifuat", "toda", "Anevi", "Samid", "Kifuat", "Hanako", "Rian", "Raiden");
        sort($Nama);
        print_r($Nama);
    }

    echo "<h3> Data Nama acak = (Larine, Aduh, Qifuat, toda, anevi, Samid, Kifuat, Hanako, Rian, Raiden)</h3>";
    echo "<br>";
    echo "<h3> Data Setelah Di urutkan: </h3>";
    echo "<pre>";
    echo "<br>";
    pengurutan();
    echo "</pre>";
    echo "<br>";
    echo "<br>";
?>