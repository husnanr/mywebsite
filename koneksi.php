<?php
 $namaserver  ="localhost";
 $namauser="root";
 $katasandi="";
 $nama_db="15_perpustakaanhusnan";

 $koneksi = mysqli_connect($namaserver,$namauser,$katasandi,$nama_db);

//  if(!$koneksi){
//      die("koneksi gagal".mysqli_connect_error());

//  } else{
//      echo "koneksi berhasil";
//  }

?>