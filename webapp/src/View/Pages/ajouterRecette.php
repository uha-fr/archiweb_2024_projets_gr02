<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>

 <!-- ======= Book A Table Section ======= -->
 <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Publier <span>une</span> Recette</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="titre" placeholder="Titre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
               
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="Temps de préparation" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="nutritionnel" id="nutritionnel" placeholder="Apport nutritionnel" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Recette"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Publier</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section>

<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>
