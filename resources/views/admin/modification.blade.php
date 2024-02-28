@include('admin.partials._head');
@include('admin.partials._side_bar');
@include('admin.partials._haut');

<div class="loader-wrapper">
  <div class="loader"></div>
</div>
<div class="main_content_iner ">
  <div class="container-fluid plr_30 body_white_bg pt_30">
    <h3 class="text-center fw-bold bt-4">Modifier un produit</h3>
    <div class="row justify-content-center py-3">
      <div class="col-lg-12">
        <div class="white_box mb_30">
          <div class="box_header ">
            <div class="">
              <h2 class="mb-0 fw-bold fs-30">Informations du produit</h2>
            </div>
          </div>
          <form method="POST">
            <div class="row">
              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Nom du produit</label>
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="nom du produit">
              </div>

              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Prix du produit</label>
                <input type="text" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="prix du produit">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-6">

                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Description</label>
                <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="Description">

              </div>

              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Lien affiliation</label>
                <input type="text" class="form-control" name="lien" id="exampleFormControlInput1" placeholder="lien du produit">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Image 1</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="première image">
              </div>

              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Image 2</label>
                <input type="file" class="form-control" name="imagee" id="exampleFormControlInput1" placeholder="deuxième image">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlSelect1">Catégorie du produit</label>
                <select class="form-control" name="categorie" id="exampleFormControlSelect1">
                  <option>Hommes</option>
                  <option>Femmes</option>
                  <option>Accéssoires</option>
                </select>
              </div>

              <div class="mb-3 col-6">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Date d'ajout</label>
                <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class=" offset-4 col-4 offset-4 align-item-center">
                <input type="submit" name="save" class="btn btn-primary  form-control fw-bold boderRadius-10" value="Enregistrer" />
              </div>
            </div>


          </form>
        </div>
      </div>

    </div>
  </div>

</div>
@include('admin.partials._footer');
@include('admin.partials._scripts');
</body>

</html>