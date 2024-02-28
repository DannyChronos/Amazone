<body class="alert alert-secondary">
 <nav class="sidebar bg-primary">
    <div class="logo d-flex justify-content-between">
      <a href="# ">
        <img src="{{ asset('admin/assets/img/venus.png ') }}" alt="">
      </a>
      <h2 class="py-2">Venus</h2>
      <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
      </div>
    </div>
    <ul id="sidebar_menu" class="">
      <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'home') !== false) echo 'bg-dark'; ?>">
        <a class=" fw-bold text-white" href="{{ route('admin-home') }}" aria-expanded="false">
          <img src="{{ asset('admin/assets/img/menu-icon/1.svg')}}" alt="">
          <span class="fw-bold text-white" class="fw-bold text-white">Tableau de bord</span>
        </a>
      </li>
      <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'produitsHommes') !== false) echo 'bg-dark'; ?>">
        <a class="" href="{{ route('admin-produit-homme') }}" aria-expanded="false">
          <img src="{{ asset('admin/assets/img/menu-icon/2.svg')}}" alt="">
          <span class="fw-bold text-white">Produits Hommes</span>
        </a>
      </li>
      <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'produitsFemmes') !== false) echo 'bg-dark'; ?>">
        <a class="" href="{{ route('admin-produit-femme') }}" aria-expanded="false">
          <img src="{{ asset('admin/assets/img/menu-icon/6.svg')}}" alt="">
          <span class="fw-bold text-white">Produits Femmes</span>
        </a>
      </li>
      <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'produitsAccessoires') !== false) echo 'bg-dark'; ?>">
        <a class="" href="{{ route('admin-produit-accessoire') }}" aria-expanded="false">
          <img src="{{ asset('admin/assets/img/menu-icon/7.svg')}}" alt="">
          <span class="fw-bold text-white">Produits Accessoires</span>
        </a>
      </li>
      <!-- <li class="">
        <a class="" href="./listeSorties.php" aria-expanded="false">
          <img src="{{ asset('admin/assets/img/menu-icon/5.svg')}}" alt="">
          <span class="fw-bold text-white">Sorties</span>
        </a>
      </li> -->
    </ul>
  </nav>