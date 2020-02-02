                <nav>
                  <ul class="pagination mt-2">
                    <?php if (isset($_GET['p'])): ?>
                      <?php if ($_GET['p']-1 == 0): ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                      <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?post=all&p=<?= $_GET['p']-1 ?>">Previous</a>
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
                          <li class="page-item"><a class="page-link" href="index.php?post=all&p=<?= $i ?>"><?= $i ?></a></li>
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
                          <a class="page-link" href="index.php?post=all&p=<?= $_GET['p']+1 ?>">Next</a>
                        </li>                               
                      <?php endif ?>
                    <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?post=all&p=2">Next</a>
                        </li>     
                    <?php endif ?>

                  </ul>
                </nav>