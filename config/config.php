<?php

// konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "mywebsite";

// melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
	echo "Connect is failed : " . die(mysqli_error($koneksi));
}


  $dataPerPage = 6;
  $dataPerP = 5;
  $nData = counts((query("SELECT count(id) as jumlah FROM artikel")));
  $nData = $nData['jumlah'];
  $nPage = ceil($nData / $dataPerPage);
  $activePage = ( isset($_GET['p']) ) ? $_GET['p'] : 1 ;
  $firstPage = ($dataPerPage * $activePage) - $dataPerPage;
  $firstP = ($dataPerP * $activePage) - $dataPerP;