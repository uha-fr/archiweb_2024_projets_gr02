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
            <form action="/archiweb_2024_projets_gr02-main/webapp/ajouterRecette" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="titre" placeholder="Titre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
              
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="prepa" id="préparation" placeholder="Temps de préparation" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>  

                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="cuisson" id="cuisson" placeholder="Temps de cuisson" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>    
                
                <div class="col-lg-4 col-md-6">
                  <input type="texte" class="form-control" name="type" id="type" placeholder="Type de repas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>  
              </div>
              
          <h4> Liste des ingrédients</h4>
          <div class="form-group mt-3" id="ingredientsContainer">
          <div class="ingredient-entry d-flex">
          <select name="ingredient[]" class="form-control ingredient">
            <?php foreach ($ingredients as $ingredient): ?>
                <option value="<?php echo $ingredient['identifiant']; ?>"><?php echo $ingredient['nom']; ?></option>
            <?php endforeach; ?>
        </select>
              <input type="text" class="form-control quantity" name="quantity[]" placeholder="Quantité">
              <input type="text" class="form-control measure" name="measure[]" placeholder="Mesure">
              <button type="button" class="btn btn-sm btn-danger remove-ingredient" onclick="removeIngredient(this)">
                  <i class="bi bi-trash3"></i>
              </button>
          </div>
         </div>
         <button type="button" id="addIngredient" class="btn btn-primary"><i class="bi bi-plus-circle"></i></button>


          <h4> Liste des étapes</h4>
          <div class="form-group mt-3" id="stepsContainer">
              <div class="step-entry d-flex">
                  <input type="text" class="form-control step" name="step[]" placeholder="Étape de la recette">
                  <button type="button" class="btn btn-sm btn-danger remove-step" onclick="removeStep(this)">
                      <i class="bi bi-trash3"></i>
                  </button>
              </div>
          </div>
          <button type="button" id="addStep" class="btn btn-primary"><i class="bi bi-plus-circle"></i></button>

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

    <script>
document.addEventListener("DOMContentLoaded", function() {

// Gestion de l'ajout d'ingrédients
document.getElementById("addIngredient").addEventListener("click", function() {
    var container = document.getElementById("ingredientsContainer");
    var newIngredientEntry = document.createElement("div");
    newIngredientEntry.classList.add("ingredient-entry", "d-flex");
    newIngredientEntry.innerHTML = `
        <select name="ingredient[]" class="form-control ingredient">
            <?php foreach ($ingredients as $ingredient): ?>
                <option value="<?php echo $ingredient['identifiant']; ?>"><?php echo $ingredient['nom']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" class="form-control quantity" name="quantity[]" placeholder="Quantité">
        <input type="text" class="form-control measure" name="measure[]" placeholder="Mesure">
        <button type="button" class="btn btn-sm btn-danger remove-ingredient" onclick="removeIngredient(this)">
            <i class="bi bi-trash3"></i>
        </button>
    `;
    container.appendChild(newIngredientEntry);
});

// Fonction pour supprimer un ingrédient
window.removeIngredient = function(button) {
    button.closest(".ingredient-entry").remove();
};

// Gestion de l'ajout d'étapes
document.getElementById("addStep").addEventListener("click", function() {
    var container = document.getElementById("stepsContainer");
    var newStepEntry = document.createElement("div");
    newStepEntry.classList.add("step-entry", "d-flex");
    newStepEntry.innerHTML = `
        <input type="text" class="form-control step" name="step[]" placeholder="Étape de la recette">
        <button type="button" class="btn btn-sm btn-danger remove-step" onclick="removeStep(this)">
            <i class="bi bi-trash3"></i>
        </button>
    `;
    container.appendChild(newStepEntry);
});

// Fonction pour supprimer une étape
window.removeStep = function(button) {
    button.closest(".step-entry").remove();
};
});


</script>


<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>
