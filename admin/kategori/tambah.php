<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tambah Artikel Baru</h1>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">            
            <div class="col-md-10">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="kategori" class="form-control" placeholder="nama Kategori">
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
    $kategori = $_POST['kategori'];

    // lakukan penyimpanan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES('$kategori')");

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Ditambah...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "Gagal menyimpan, suatu kesalahan terjadi!";
    }
}



?>
