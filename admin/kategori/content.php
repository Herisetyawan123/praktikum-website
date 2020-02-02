<div class="col-md-12">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tabel Artikel</h1>
        <a href="index.php?action=tambah" class="d-sm-inline-block btn btn-success"><i class="fas fa-plus fa-lg text-white"></i> Tambah</a>
    </div>
  <div class="table-responsive">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
            $no = 1;
            while ($artikel = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$artikel['kategori']."<br/>";
                echo "</td>";
                echo "<td>";
                echo "<a href='?action=edit&id=".$artikel['id']."' class='badge badge-success'><i class='fa fa-pencil'></i> Edit</a> | ";
                echo "<a href='hapus.php?id=".$artikel['id']."' class='badge badge-danger'><i class='fa fa-trash'></i> Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
          ?>
      </tbody>
    </table>

  </div>
</div>
