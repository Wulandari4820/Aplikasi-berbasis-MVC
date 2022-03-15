<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "latihan1";
$koneksi1= mysqli_connect($server,$username,$pass);


if ($koneksi1){
    $buka = mysqli_select_db($koneksi1, $db);
    echo " Database Terhubung ";
    if (!$buka){
        echo"Database Tidak Terhubung";
    }   
}else{
    echo"Database error";

}
    
    

?>