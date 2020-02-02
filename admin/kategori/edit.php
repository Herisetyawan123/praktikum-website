<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tambah Artikel Baru</h1>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">            
            <div class="col-md-10">
              <?php 

              $a = query_id($koneksi, "kategori", $_GET['id']);
              $row = mysqli_fetch_array($a);

               ?>
              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="kategori" class="form-control" value="<?= $row['kategori'] ?>" placeholder="nama Kategori">
                  </div>
                  <div class="form-group">
                      <input type="hidden" name="penulis" value="<?php echo $_SESSION['username'] ?>"/>
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fas fa-send"></i> submit</button>
                  </div>

              </form>


            </div>
    </div>
</div>



<?php

// kode untuk menyimpan artikel ke database
if(isset($_POST['simpan'])){
    $id = $_GET['id'];
    $kategori = $_POST['kategori'];

    // lakukan penyimpanan ke database
    $simpan = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id='$id'");

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Diubah...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Diubah...')</script>";
    }
}



?>
