<?php

if (isset($_POST['save'])) {
     $nis            = $_POST['nis'];
     $nama           = $_POST['nama'];
     $jenis_kelamin  = $_POST['jk'];
     $tempat_lahir   = $_POST['tempat_lahir'];
     $tanggal_lahir  = $_POST['tanggal_lahir'];
     $kelas          = $_POST['id_kelas'];
     $jurusan        = $_POST['id_jurusan'];
     $no_telepon     = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$kelas','$jurusan','$no_telepon','$alamat')");



if ($query_insert) {
header('refresh:0  URL=http://localhost/15_mywebsite_12RPL2/admin.php?page=anggota');
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
BERHASIL DITAMBAHKAN
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}else{
echo "Data Gagal Disimpan";
}
}

?>