   <!-- header -->
   <div class="header" id="home">
       <div class="container">
           <ul>
               <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt"
                           aria-hidden="true"></i> Sign In </a></li>
               <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o"
                           aria-hidden="true"></i> Sign Up </a></li>
               <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
               <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a
                       href="https://p.w3layouts.com/cdn-cgi/l/email-protection#afc6c1c9c0efcad7cec2dfc3ca81ccc0c2"><span
                           class="__cf_email__"
                           data-cfemail="432a2d252c03263b222e332f266d202c2e">[email&#160;protected]</span></a></li>
           </ul>
       </div>
   </div>

   <!-- banner -->
   <div class="ban-top">
       <div class="container-fluid">
           <div class="row d-flex">
               <div class="col-md-2 navbar-brand">
                   <!-- <a href="index.html" class="">
       <img src="assets/img/venus.png" alt="" srcset="" class="img-responsive">
      </a> -->
                   <h2>
                       <a href="{{ route('index') }}">
                           <img src="assets/img/venus.png" alt="" srcset="" class="">

                       </a>
                       <span class="text-white">enus</span>
                   </h2>
               </div>
               <!-- <div class="col-md-1">
      <h1 class="text-white mt-2 ms-2 navbar-brand text-decoration-none">
       VENUS
      </h1>
     </div> -->
               <div class="col-md-7">
                   <nav class="navbar navbar-default">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                               data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                       </div>
                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav menu__list">
                               <li class="active menu__item menu__item--current">
                                   <a class="menu__link" href="{{ route('index') }}">Accueil <span
                                           class="sr-only">(current)</span></a>
                               </li>

                               <li class="menu__item">
                                   <a href="{{ route('mens') }}" class="menu__link">Hommes</a>
                               </li>
                               <li class=" menu__item">
                                   <a href="{{ route('womens') }}" class="menu__link">Femmes</a>
                               </li>
                               <li class="menu__item">
                                   <a class="menu__link" href="{{ route('accessoires') }}">Accessoires</a>
                               </li>
                               <li class=" menu__item">
                                   <a class="menu__link" href="{{ route('about') }}">A propos</a>
                               </li>
                               <li class=" menu__item">
                                   <a class="menu__link" href="{{ route('contact') }}">Contact</a>
                               </li>
                           </ul>
                       </div>
                   </nav>
               </div>
               <div class="col-md-3 header-middle" style="padding-top: 11px;margin-left: -20px;">
                   <form action="#" method="post">
                       <input type="search" name="search" placeholder="Search here..." required="">
                       <input type="submit" value=" ">
                       <div class="clearfix"></div>
                   </form>
               </div>
           </div>

           <div class="clearfix"></div>
       </div>
   </div>
   <!-- //banner-top -->
   <!-- Modal1 -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
       <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body modal-body-sub_agile">
                   <div class="col-md-8 modal_body_left modal_body_left1">
                       <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                       <form action="#" method="post">
                           <div class="styled-input agile-styled-input-top">
                               <input type="text" name="Name" required="">
                               <label>Name</label>
                               <span></span>
                           </div>
                           <div class="styled-input">
                               <input type="email" name="Email" required="">
                               <label>Email</label>
                               <span></span>
                           </div>
                           <input type="submit" value="Sign In">
                       </form>
                       <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                           <li><a href="#" class="facebook">
                                   <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="twitter">
                                   <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="instagram">
                                   <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="pinterest">
                                   <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                               </a></li>
                       </ul>
                       <div class="clearfix"></div>
                       <p><a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a>
                       </p>

                   </div>
                   <div class="col-md-4 modal_body_right modal_body_right1">
                       <img src="images/log_pic.jpg" alt=" " />
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
           <!-- //Modal content-->
       </div>
   </div>
   <!-- //Modal1 -->
   <!-- Modal2 -->
   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
       <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body modal-body-sub_agile">
                   <div class="col-md-8 modal_body_left modal_body_left1">
                       <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                       <form action="#" method="post">
                           <div class="styled-input agile-styled-input-top">
                               <input type="text" name="Name" required="">
                               <label>Name</label>
                               <span></span>
                           </div>
                           <div class="styled-input">
                               <input type="email" name="Email" required="">
                               <label>Email</label>
                               <span></span>
                           </div>
                           <div class="styled-input">
                               <input type="password" name="password" required="">
                               <label>Password</label>
                               <span></span>
                           </div>
                           <div class="styled-input">
                               <input type="password" name="Confirm Password" required="">
                               <label>Confirm Password</label>
                               <span></span>
                           </div>
                           <input type="submit" value="Sign Up">
                       </form>
                       <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                           <li><a href="#" class="facebook">
                                   <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="twitter">
                                   <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="instagram">
                                   <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                               </a></li>
                           <li><a href="#" class="pinterest">
                                   <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                   <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                               </a></li>
                       </ul>
                       <div class="clearfix"></div>
                       <p><a href="#">By clicking register, I agree to your terms</a></p>

                   </div>
                   <div class="col-md-4 modal_body_right modal_body_right1">
                       <img src="images/log_pic.jpg" alt=" " />
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
           <!-- //Modal content-->
       </div>
   </div>
   <!-- //Modal2 -->
