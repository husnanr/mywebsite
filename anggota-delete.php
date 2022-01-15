<?php
           
        
    if(isset($_GET['hapus'])){
        $id_anggota = $_GET['id'];
        $query_delete = mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota = '$id_anggota'");
       if ($query_delete) {
        header('refresh:0 URL=http://localhost/15_mywebsite_12RPL2/admin.php?page=anggota');
          ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Berhasil Di Hapus
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
       }
       }
?>