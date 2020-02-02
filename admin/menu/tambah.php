	<div class="container">
		<div class="row">
            <div class="col-md-10">
              <form action="" method="POST">
                  <div class="form-group">
                      <label for="username">nama</nama>
                      <input type="text" name="nama" class="form-control" placeholder="nama" required>
                  </div>
                  <div class="form-group">
                      <label for="password">url</nama>
                      <input type="text" name="url" class="form-control" placeholder="home/index.php" required>
                  </div>
                  <div class="form-group">
                      <label for="nama-lengkap">Urutan</nama>
                      <input type="number" name="urutan" class="form-control" placeholder="urutan" required>
                  </div>
                  <div class="form-group">
                      <label for="Status">Status</nama>
                      <select name="status" class="form-control">
                          <option value="1">Aktif</option>
                          <option value="0">Non-aktif</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>
		</div>		
	</div>



<?php

// kode untuk menyimpan menu ke database
if(isset($_POST['simpan'])){

    $simpan = tambah_menu($koneksi, $_POST);

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Ditambah...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Ditambah...')</script>";
    }
}

?>
