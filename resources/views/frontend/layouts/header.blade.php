<header class="rr-header-height ">
      <!-- header area start -->
      <div id="header-sticky" class="rr-header-area rr-header-2-border" data-background="assets/img/slider/header-bg-shape.png">
         <div class="container custom-container-1">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-4 col-6">
                  <div class="rr-header-logo">
                     <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="img"></a>
                  </div>
               </div>
               <div class="col-xl-6 d-none d-xl-block">
                  <div class="rr-header-main-menu">
                     <nav class="rr-main-menu-content text-end">
                        <ul>
                           <li class="has-dropdown">
                              <a href="{{route('home')}}">Home</a>

                           </li>
                           <li><a href="{{route('about')}}">about us</a></li>
                           <li class="has-dropdown">
                              <a href="service.html">Service</a>
                              <ul class="submenu rr-submenu">
                                 <li><a href="service.html">Service</a></li>
                                 <li><a href="service-details.html">Service Details</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Pages</a>
                              <ul class="submenu rr-submenu">
                                 <li><a href="team.html">team</a></li>
                                 <li><a href="team-details.html">team details</a></li>
                                 <li><a href="pricing.html">pricing </a></li>
                                 <li><a href="project.html">project</a></li>
                                 <li><a href="project-details.html">project-details</a></li>
                                 <li><a href="agents.html">Agents</a></li>
                                 <li><a href="agent-details.html">Agents-details</a></li>
                                 <li><a href="404.html">error</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blog</a>
                              <ul class="submenu rr-submenu">
                                 <li><a href="blog.html">Blog Grid</a></li>
                                 <li><a href="blog-sidebar.html">Blog Standard</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-4">
                  <div class="rr-header-right d-flex align-items-center justify-content-end ">

                  <form action="{{route('client.login')}}" method="get">
									@csrf
                          

									<button type="submit" class="btn btn-sm btn-primary ">Login</button>

								</form>
                        <form action="{{route('client.register')}}" method="get">
									@csrf
                          

									<button type="submit" class="btn btn-sm btn-success ">Register</button>

								</form>
                        &nbsp;
                     
                     <div class="rr-header-btn d-none d-md-block">
                        <a class="rr-btn rr-header-spc" href="{{route('front_app.create')}}"><span>Property Booking <i
                                 class="fa-sharp fa-solid fa-plus"></i></span></a>
                     </div>
                     &nbsp;

                     <form action="{{route('client.logout')}}" method="post">
									@csrf
                          

									<button type="submit" class="btn btn-sm btn-danger "> <i class="fa fa-fw fa-power-off"></i> Logout</button>

								</form>
                     <div class="rr-header-bar d-xl-none">
                        <button class="rr-menu-bar"><i class="fa-solid fa-bars"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header area end -->


   </header>
