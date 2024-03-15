<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Besoin <span>d'un </span>nutritionniste ?</p>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->


    <?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>