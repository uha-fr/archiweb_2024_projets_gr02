<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Calendrier<span> Repas</span> de la semaine</p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#lundi">
              <h4>Lundi</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mardi">
              <h4>Mardi</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mercredi">
              <h4>Mercredi</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#jeudi">
              <h4>Jeudi</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#vendredi">
              <h4>Vendredi</h4>
            </a>
          </li><!-- End tab nav item -->


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#samedi">
              <h4>Samedi</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#dimanche">
              <h4>Dimanche</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="lundi">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
            <?php
              foreach ($calendrier as $post) {
              ?>
                        <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                        <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                        <p class="ingredients">
                          <?php echo htmlspecialchars($post['Description']); ?>
                        </p>
                        <p class="price">
                        <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                        </p>
                      </div><!-- Menu Item -->


              <?php
              }
              ?>
            </div>
          </div><!-- End Breakfast Menu Content -->


          <div class="tab-pane fade" id="mardi">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
            <?php
              foreach ($calendrier as $post) {
              ?>
                        <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                        <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                        <p class="ingredients">
                          <?php echo htmlspecialchars($post['Description']); ?>
                        </p>
                        <p class="price">
                        <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                        </p>
                      </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="mercredi">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
            <?php
              foreach ($calendrier as $post) {
              ?>
                        <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                        <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                        <p class="ingredients">
                          <?php echo htmlspecialchars($post['Description']); ?>
                        </p>
                        <p class="price">
                        <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                        </p>
                      </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
          </div><!-- End Dinner Menu Content -->

    
          <div class="tab-pane fade" id="jeudi">
          <div class="tab-header text-center">
          </div>
          <div class="row gy-5">
          <?php
            foreach ($calendrier as $post) {
            ?>
                      <div class="col-lg-4 menu-item">
                      <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                      <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                      <p class="ingredients">
                        <?php echo htmlspecialchars($post['Description']); ?>
                      </p>
                      <p class="price">
                      <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                      </p>
                    </div><!-- Menu Item -->
            <?php
            }
            ?>
          </div>
          </div><!-- End Dinner Menu Content -->

          <div class="tab-pane fade" id="vendredi">
          <div class="tab-header text-center">
          </div>
          <div class="row gy-5">
          <?php
            foreach ($calendrier as $post) {
            ?>
                      <div class="col-lg-4 menu-item">
                      <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                      <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                      <p class="ingredients">
                        <?php echo htmlspecialchars($post['Description']); ?>
                      </p>
                      <p class="price">
                      <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                      </p>
                    </div><!-- Menu Item -->
            <?php
            }
            ?>
          </div>
          </div><!-- End Dinner Menu Content -->

          <div class="tab-pane fade" id="samedi">
          <div class="tab-header text-center">
          </div>
          <div class="row gy-5">
          <?php
            foreach ($calendrier as $post) {
            ?>
                      <div class="col-lg-4 menu-item">
                      <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                      <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                      <p class="ingredients">
                        <?php echo htmlspecialchars($post['Description']); ?>
                      </p>
                      <p class="price">
                      <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                      </p>
                    </div><!-- Menu Item -->
            <?php
            }
            ?>
          </div>
          </div><!-- End Dinner Menu Content -->


          <div class="tab-pane fade" id="dimanche">
          <div class="tab-header text-center">
          </div>
          <div class="row gy-5">
          <?php
            foreach ($calendrier as $post) {
            ?>
                      <div class="col-lg-4 menu-item">
                      <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo "assets/img/menu/".htmlspecialchars($post['Img']); ?>" class="menu-img img-fluid" alt=""></a>
                      <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                      <p class="ingredients">
                        <?php echo htmlspecialchars($post['Description']); ?>
                      </p>
                      <p class="price">
                      <?php echo htmlspecialchars($post['CaloriesTotales']); ?> Kalories
                      </p>
                    </div><!-- Menu Item -->
            <?php
            }
            ?>
          </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>
