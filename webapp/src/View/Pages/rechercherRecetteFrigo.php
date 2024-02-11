<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<style>
    .input-group {
        margin-bottom: 10px;
    }
    .mtt
    {
      margin-top: 120px;
      margin-bottom: 120px;
    }

    body {
      background-color: #eeeeee !important;
    }

    button {
      background: #ec2727 !important;
      border: 0 !important;
      padding: 14px 60px !important;
      color: #fff !important;
      transition: 0.4s !important;
      border-radius: 50px !important;
    }

</style>

<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>


<div class="container mtt">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="section-header card-header">
                  <p>Recette <span>à partir du</span> frigo</p>
                </div>
                <div class="card-body">
                    <form action="process.php" method="GET" id="myForm">
                        <div id="inputContainer">
                            <div class="input-group">
                                <input type="text" class="form-control" name="input[]" placeholder="Ingrédient">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="input[]" placeholder="Ingrédient">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-3" onclick="addInput()">Ajouter un ingrédient</button>
                        <button type="submit" class="btn btn-success mt-3">Rechercher la recette</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function addInput() {
        var container = document.getElementById('inputContainer');
        var newInput = document.createElement('div');
        newInput.classList.add('input-group');
        newInput.innerHTML = '<input type="text" class="form-control" name="input[]" placeholder="Ingrédient">';
        container.appendChild(newInput);
    }
</script>

<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>
