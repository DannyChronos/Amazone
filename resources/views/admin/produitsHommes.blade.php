@include('admin.partials._head');
@include('admin.partials._side_bar');
@include('admin.partials._haut');

<div class="loader-wrapper">
  <div class="loader"></div>
</div>

<div class="main_content_iner">
  <div class="container-fluid plr_30 body_white_bg pt_30">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="QA_section">
          <div class="white_box_tittle list_header">
            <div class="box_right d-flex lms_block">
              <div class="serach_field_2">
                <div class="search_inner">
                  <form Active="#">
                    <div class="search_field">
                      <input type="text" id="searchInput" placeholder="Search content here...">
                    </div>
                    <button type="submit">
                      <i class="ti-search"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="add_button ms-2">
                <a href="{{ route('admin-ajout-produit') }} " class="btn_1">Ajouter</a>
              </div>
            </div>
          </div>
          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
          <div class="QA_table table-responsive" style="max-width: 100%; overflow-x: auto;">
            <table class="table lms_table_active">
              <thead>
                <tr>
                  <th scope="col" class="fw-bold text-primary">N°</th>
                  <th scope="col" class="fw-bold text-primary">Nom du produit</th>
                  <th scope="col" class="fw-bold text-primary">Prix</th>
                  <th scope="col" class="fw-bold text-primary">Lien</th>
                  <th scope="col" class="fw-bold text-primary">Image 1</th>
                  <th scope="col" class="fw-bold text-primary">Image 2</th>
                  <th scope="col" class="fw-bold text-primary" class="fw-bold text-primary">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($menArticle as $article)
                <tr>
                  <th scope="row">{{ $article->id }}</th>
                  <td>{{ $article->nom }}</td>
                  <td>{{ $article->prix }}</td>
                  <td>{{ $article->lien }}</td>
                  <td class="profile_info"><img src="{{ asset('storage/'.$article->nom_image) }}" alt="#"></td>
                  <td class="profile_info"><img src="{{ asset('storage/'.$article->nom_image) }}" alt="#"></td>
                  <td>
                    <div class="d-flex">
                      <a href="{{ route('admin-delete-article', ['id' => $article->id]) }}" class="btn btn-danger text-white mx-2">Supprimer</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('admin.partials._footer');
@include('admin.partials._scripts');

</body>

</html>