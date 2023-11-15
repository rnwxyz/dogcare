<?php

require "../connection-function/cek-database-con.php";

// Variabel
global $db;
$data_gejala = "SELECT * FROM gejalas";

if(!$db->connect_error){
    $result = $db->query($data_gejala);

    // Loop for Gejala Data
    while($all_gejala=mysqli_fetch_array($result)){
        echo '<p> Apakah anjing anda suka ' . $all_gejala['deskripsi'] . '? </p>';
        echo '<select class="form-select" aria-label="Default select example" name="' . $all_gejala['kode'] . '">';
            echo '<option value="0">Tidak Tahu</option>';
            echo '<option value="0.20">Tidak Yakin</option>';
            echo '<option value="0.40">Mungkin</option>';
            echo '<option value="0.60">Kemungkinan Besar</option>';
            echo '<option value="0.80">Hampir Pasti</option>';
            echo '<option value="1.0">Pasti</option>';
        echo '</select>';
    }

    $db->close();
}else{
    die("Connection failed: " . $db->connect_error);
}

?>