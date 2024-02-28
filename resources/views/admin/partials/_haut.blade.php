
<section class="main_content dashboard_part">
  <div class="container-fluid g-0">
    <div class="row">
      <div class="col-lg-12 p-0">
        <div class="header_iner d-flex justify-content-between align-items-center">
          <div class="sidebar_icon d-lg-none">
            <i class="ti-menu"></i>
          </div>
          <div class="serach_field-area">
            <div class="search_inner">
              <form>
                <div class="search_field">
                  <input type="text" id="" placeholder="Search here...">
                </div>
                <button type="submit">
                  <img src="{{ asset('admin/assets/img/icon/icon_search.svg') }}" alt="">
                </button>
              </form>
            </div>
          </div>
          <div class="header_right d-flex justify-content-between align-items-center">
            <div class="header_notification_warp d-flex align-items-center">
              
            </div>
            <div class="profile_info">
              <img src="{{ asset('admin/assets/img/venus.png') }}" alt="#">
              <div class="profile_info_iner">
                <p>Welcome Admin!</p>
                <h5>{{ Auth::guard('admin')->user()->nom_complet }}</h5>
                <div class="profile_info_details">
                 <a href="{{ route('logout-admin') }}">Déconnexion
                      <i class="ti-shift-left"></i>
                    </a>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>