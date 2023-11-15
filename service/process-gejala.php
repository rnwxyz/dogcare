<?php

require "../connection-function/cek-database-con.php";


if(isset($_POST['submit'])){
    
    // Variabel
    global $db;
    $g = array();
    
    for ($i = 1; $i <= 25; $i++) {
      $g[] = isset($_POST['G' . $i]) ? $_POST['G' . $i] : 0;
    }

    // check variable
    // foreach ($g as $i => $value) {
    //     echo "nilai G" . ($i+1) . " adalah " . $value . "<br>";
    // }
    
    // Get all the Expert CF
    $cf_pakar = "SELECT nilai_cf FROM keputusans";

    if(!$db->connect_error){
        $result = $db->query($cf_pakar);
        $all_cf = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $all_cf[] = $row['nilai_cf'];
        }

        $db->close();

        // print_r($all_cf);

    }else{
        die("Connection failed: " . $db->connect_error);
    }

    // Calculate CF Users * CF Pakar
    // $cf_he = array_map(function ($a, $b) {
    //     return (float)$a * (float)$b;
    // }, $g, $all_cf);
    
    // print_r($cf_he);

    // Create a Risk Classes
    $kg1 = array_slice($g,0,6);
    $kg2 = array_slice($g,6,4);
    $kg3 = array_merge(array($g[7]), array_slice($g,9,8));
    $kg4 = array_merge(array_slice($g,7,3), array($g[15]), array_slice($g,16,19));
    $kg5 = array_merge(array($g[7]), array($g[14]), array_slice($g,19,2));
    $kg6 = array_slice($g,21,2);
    $kg7 = array_merge(array_slice($g,7,3), array($g[14]), array($g[29]));
    $kg8 = array_merge(array($g[10]), array_slice($g,14,3), array($g[30]));
    $kg9 = array_slice($g,23,4);
    $kg10 = array_merge(array($g[23]), array_slice($g,27,2));
    // check variable
    // print_r($kg1);
    // echo "<br>";
    // print_r($kg2);
    // echo "<br>";
    // print_r($kg3);
    // echo "<br>";
    // print_r($kg4);
    // echo "<br>";
    // print_r($kg5);
    // echo "<br>";
    // print_r($kg6);
    // echo "<br>";
    // print_r($kg7);
    // echo "<br>";
    // print_r($kg8);
    // echo "<br>";
    // print_r($kg9);
    // echo "<br>";
    // print_r($kg10);
}else{
    echo "gagal";
}


?>