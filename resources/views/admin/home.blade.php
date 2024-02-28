
@include('admin.partials._head');
@include('admin.partials._side_bar');
@include('admin.partials._haut');

<div class="loader-wrapper">
  <div class="loader"></div>
</div>

<div class="main_content_iner ">
  <div class="container-fluid plr_30 body_white_bg pt_30">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="single_element">
          <div class="quick_activity">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="quick_activity_wrap">
                    <div class="single_quick_activity">
                      <h4>Total Produits Hommes</h4>
                      <h3>
                        <span class="counter">{{ $men }}</span>
                      </h3>
                      <p>hommes</p>
                    </div>
                    <div class="single_quick_activity">
                      <h4>Total Produits Femmes</h4>
                      <h3>
                        <span class="counter">{{ $women }}</span>
                      </h3>
                      <p>femmes</p>
                    </div>
                    <div class="single_quick_activity">
                      <h4>Total Produits Accessoires</h4>
                      <h3>
                        <span class="counter">{{ $accessoire }}</span>
                      </h3>
                      <p>accessoires</p>
                    </div>
                    <div class="single_quick_activity">
                      <h4>Total des produits</h4>
                      <h3>
                        <span class="counter">{{ $total }}</span>
                      </h3>
                      <p>total</p>
                    </div>
                  </div>
                </div>
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