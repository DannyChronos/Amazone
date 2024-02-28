@include('admin.partials._head');
@include('admin.partials._side_bar');
@include('admin.partials._haut');


<div class="loader-wrapper">
  <div class="loader"></div>
</div>


<div class="main_content_iner ">
  <div class="container-fluid plr_30 body_white_bg pt_30">
    <h3 class="text-center fw-bold bt-4">Enregistrer un Entretien</h3>
    <div class="row justify-content-center py-3">
      <div class="col-lg-12">
        <div class="white_box mb_30">
          <div class="box_header ">
            <div class="">
              <h2 class="mb-0 fw-bold fs-30">Informations</h2>
            </div>
          </div>
          <form method="POST">
            <div class="row">
              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="nom">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="prenom">
              </div>

              <div class="mb-3 col-4">

                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Date de naissance</label>
                <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" placeholder="date de naissance">

              </div>

            </div>
            <div class="row">

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Lieu de naissance</label>
                <input type="text" class="form-control" name="lieuNaissance" id="exampleFormControlInput1" placeholder="lieu de naissance">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Sexe</label>
                <select class="form-control" name="sexe" id="exampleFormControlSelect1">
                  <option>Masculin</option>
                  <option>Féminin</option>
                </select>
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Age</label>
                <input type="text" class="form-control" name="age" id="age" placeholder="Age">
              </div>
            </div>

            <div class="row">
              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Zone de résidence</label>
                <input type="text" class="form-control" name="zoneResidence" id="exampleFormControlInput1" placeholder="zone de residence">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Nationnalité</label>
                <input type="text" class="form-control" name="nationnalite" id="exampleFormControlInput1" placeholder="nationnalité">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Niveau d'étude</label>
                <input type="text" class="form-control" name="niveauEtude" id="exampleFormControlInput1" placeholder="niveau d'étude">
              </div>
            </div>

            <div class="row">
              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Contact Appel</label>
                <input type="tel" class="form-control" name="contactAppel" id="exampleFormControlInput1" placeholder="Contact appel">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Contact WhatsApp</label>
                <input type="tel" class="form-control" name="contactWhatsapp" id="exampleFormControlInput1" placeholder="contact whatsApp">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlSelect1">Situation Matrimoniale</label>
                <select class="form-control" name="situationMatrimoniale" id="exampleFormControlSelect1">
                  <option>Situation Matrimoniale</option>
                  <option>Célibataire sans enfant</option>
                  <option>Célibataire avec enfant(s)</option>
                  <option>Marié(e) sans enfant</option>
                  <option>Marié(s) avec enfant(s)</option>
                </select>
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Poste</label>
                <select class="form-control" name="poste" id="exampleFormControlSelect1">
                  <option>Secrétaire de direction</option>
                  <option>Chargé de clientèle</option>
                  <option>Chargé de communication</option>
                  <option>Auxilliaire Comptable</option>
                  <option>Responsable Commercial</option>
                  <option>Conseiller en Assurance</option>
                  <option>Agent d'Entretien</option>
                  <option>Réceptionniste d'Hôtel</option>
                </select>
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Filliere</label>
                <input type="text" class="form-control" name="filliere" id="exampleFormControlInput1" placeholder="filliere">
              </div>
            </div>

            <div class="row">

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Prétention Salariale</label>
                <input type="text" class="form-control" name="salaire1" id="exampleFormControlInput1" placeholder="Pretention Salariale" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                
              </div>
              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Salaire plus bas</label>
                <input type="text" class="form-control" name="salaire2" id="exampleFormControlInput1" placeholder="Salaire plus bas"  oninput="this.value = this.value.replace(/[^0-9]/g, '');">
              </div>

              <div class="mb-3 col-4">
                <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Moyen de deplacement</label>
                <select class="form-control" name="deplacement" id="exampleFormControlSelect1">
                  <option>Oui</option>
                  <option>Non</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-bold text-primary" for="exampleFormControlInput1">Domaine de Compétences</label>
              <textarea name="competences" id="" class="form-control" cols="2" rows="3"></textarea>
            </div>
            <div class="row">
              <div class=" offset-4 col-4 offset-4 align-item-center">            
                <input type="submit" name="save" class="btn btn-primary form-control fw-bold boderRadius-10" value="Enregistrer" />
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