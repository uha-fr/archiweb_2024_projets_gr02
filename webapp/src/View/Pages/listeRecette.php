<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Meilleures <span>recettes</span></p>
        </div>

        <div class="row gy-4">


        
        <?php
              foreach ($Recette as $post) {
              ?>
                         <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                          <div class="member-img">
                            <img src="assets/img/menu/<?php echo htmlspecialchars($post['Img']); ?>" class="img-fluid" alt="">
                          </div>
                          <div class="member-info">
                            <h4><?php echo htmlspecialchars($post['Nom']); ?></h4>
                            <span><?php echo htmlspecialchars($post['Description']); ?></span>
                            <p><?php echo htmlspecialchars($post['CaloriesTotales']);?> Kal</p>
                          </div>
                        </div>
                      </div>

              <?php
              }
              ?>

        </div>

      </div>
    </section>


    <?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>