
      <!-- Nav Item - Pages Collapse Menu -->

<?php 

    $query = getData($koneksi, "menu");
    while ($row = mysqli_fetch_array($query)) {

?>
          <li class="nav-item <?= ($title == $row['nama']) ? 'active': '' ?>">
            <a class="nav-link" href="/praktikum-website/admin/<?= $row['url'] ?>">
              <i class="<?= $row['icon'] ?>"></i>
              <span><?= $row['nama'] ?></span>
            </a>
          </li> 
      
<?php
     } 
 ?>