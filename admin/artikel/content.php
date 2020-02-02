<div class="container">
  <div class="row">
<div class="col-md-12">
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-dark">Tabel Artikel</h1>
        <a href="index.php?action=tambah" class="d-sm-inline-block btn btn-success"><i class="fas fa-plus fa-lg text-white"></i> Tambah</a>
    </div>
  <div class="table-responsive">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>kategori</th>
          <th>Penulis</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php
            $q = "SELECT `artikel`.`id`,
                          `artikel`.`judul`, 
                          `kategori`.`kategori`, 
                          `artikel`.`penulis`,
                          `artikel`.`tanggal`
                  FROM artikel
                  INNER JOIN kategori ON `artikel`.`id_kategori`=`kategori`.`id`  ORDER BY tanggal DESC LIMIT $firstP, $dataPerP"; 
            $query = mysqli_query($koneksi, $q);
            $no = 1;
            while ($artikel = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td><b>".$artikel['judul']."</b></td>";
                echo "<td><b>".$artikel['kategori']."</b></td>";
                echo "<td>".$artikel['penulis']."</td>";
                echo "<td>".$artikel['tanggal']."</td>";
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
                <nav>
                  <ul class="pagination mt-2">
                    <?php if (isset($_GET['p'])): ?>
                      <?php if ($_GET['p']-1 == 0): ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                      <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?p=<?= $_GET['p']-1 ?>">Previous</a>
                        </li>                               
                      <?php endif ?>
                    <?php else: ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>     
                    <?php endif ?>
                    <?php 
                    for($i = 1; $i <= $nPage;$i++){
                     ?>
                        <?php if ($activePage == $i): ?>
                          <li class="page-item active"><a class="page-link" href="#"><?= $i ?> <span class="sr-only">(current)</span></a></li>
                        <?php else: ?>
                          <li class="page-item"><a class="page-link" href="index.php?p=<?= $i ?>"><?= $i ?></a></li>
                        <?php endif ?>
                    
                    <?php 
                    }
                    ?>
                    <?php if (isset($_GET['p'])): ?>
                      <?php if ($_GET['p']+1 > $nPage): ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                        </li>
                      <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?p=<?= $_GET['p']+1 ?>">Next</a>
                        </li>                               
                      <?php endif ?>
                    <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?p=2">Next</a>
                        </li>     
                    <?php endif ?>

                  </ul>
                </nav>
  </div>
</div>

