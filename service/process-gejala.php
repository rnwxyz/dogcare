<?php

require "../connection-function/cek-database-con.php";

session_start();

function check_array($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

if(isset($_POST['submit'])){
    
    // Variabel
    global $db;
    $gejala = array();
    
    // Get the number of Gejala
    $sql_count_gejala = "SELECT COUNT(id) AS number_gejala FROM gejalas";
    $count_gejala = mysqli_fetch_array($db->query($sql_count_gejala));

    // Assign CF Users to variabel $gejala
    for ($i = 1; $i <=$count_gejala[0]; $i++) {
      $gejala[$i] = isset($_POST['G' . $i]) ? $_POST['G' . $i] : 0;
    }

    // Get the number of penyakit
    $sql_count_penyakit = "SELECT COUNT(id) AS number_penyakit FROM penyakits";
    $count_penyakit = mysqli_fetch_array($db->query($sql_count_penyakit));

    /*

    Looping Condition To Calculate All CF of Diseases

    */

    $final_result= array();

    for($i = 1; $i <= $count_penyakit[0]; $i++){
        $sql_id_penyakit = "SELECT id_gejala, nilai_cf FROM keputusans WHERE id_penyakit=$i";
        $result = $db->query($sql_id_penyakit);
        $shift=0;
        $cf_combine;
        
        while($row = mysqli_fetch_array($result)){
            if($shift==0){
                $cf_combine = $gejala[$row[0]] * $row[1];
                $shift++;
            }else{
                $cf_combine = $cf_combine + (($gejala[$row[0]] * $row[1]) * (1 - $cf_combine));
            }
        }
        
        $final_result[$i] = $cf_combine*100;
    }


    // Get The Maximum Value
    $keys = array_keys($final_result, max($final_result));
    $sql_diseases_name = "SELECT nama FROM penyakits WHERE id=$keys[0]";
    $diseases_name = mysqli_fetch_array($db->query($sql_diseases_name));

    $_SESSION["CF"] = $final_result;

    if ($final_result[$keys[0]] == 0) {
        $_SESSION["DS-N"] = "-";
        $_SESSION["DS-P"] = "-";
    }else{
        $_SESSION["DS-P"] = $final_result[$keys[0]];
        $_SESSION["DS-N"] = $diseases_name[0];
    }
    

    // check_array($_SESSION["CF"]);
    // echo $_SESSION["DS-N"];
    // echo $_SESSION["DS-P"];

    if(isset($_SESSION["CF"]) && isset($_SESSION["DS"])) {
        // If set, redirect to another page
        header("Location: ../view/services.php");
        die();
    } else {
        // If not set, redirect back to the last page
        header("Location: ../view/about.php?id=0");
        die();
    }

    $db->close();

}else{
    echo "gagal";
}

?>