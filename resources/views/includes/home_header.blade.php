<header id="navbar-spy" class="header header-full">
    <div id="top-bar" class="contact-bar d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="top-bar-inner">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="navbar-header">
                                    <a class="logo" href="{{ route('app.home')}}"> <img
                                            src={{ asset("assets/images/logo/logo-colored.png") }} alt="logo"> </a>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <div class="col-12 col-md-6 col-lg-8 top-bar-contact hidden-xs hidden-sm">
                                <div class="module-container">
                                    <div class="contact-box pull-left">
                                        <div class="contact-box-icon pull-left">
                                            <i class="icon-map-pin"></i>
                                        </div>
                                        <div class="contact-box-info">
                                            <p class="text-capitalize ">Visit Us:</p>
                                            <p class="font-heading">22 Albahr St, Tanta, Egypt</p>
                                        </div>
                                    </div>

                                    <div class="contact-box pull-left">
                                        <div class="contact-box-icon pull-left">
                                            <i class="icon-document"></i>
                                        </div>
                                        <div class="contact-box-info">
                                            <p class="text-capitalize ">email us</p>
                                            <p class="font-heading">7oroof@7oroof.com</p>
                                        </div>
                                    </div>

                                    <div class="contact-box pull-left">
                                        <div class="contact-box-icon pull-left">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="contact-box-info">
                                            <p class="text-capitalize">call us</p>
                                            <p class="text-capitalize font-heading">002 01065370701</p>
                                        </div>
                                    </div>

                                    <!-- Module Social -->
                                    <div class="module module-social pull-left">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div><!-- .module-social end -->
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                        </div>
                    </div>
                </div>
                <!-- .col-md-12 -->
            </div>
        </div>
    </div>
    <div class="container">
        <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light bg-dark3">

            <a class="navbar-brand hidden-lg hidden-md" href="index-2.html">
                <img class="logo logo-light" src={{ asset("assets/images/logo/logo-light.png") }} alt="Consultivo Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <!-- Home Menu-->
                  
                    <li class="has-dropdown active">
                        <a href="{{ route('app.home')}}"  class=" menu-item">Home</a>
                    </li>
                    <!-- li end -->

                    <!-- Pages Menu -->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item"
                            data-hover="pages">About Us</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.pages.view', ['about']) }}">About US</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['team']) }}">Our Team</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['security']) }}">Security</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['our_portfolio']) }}">Our Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['our_history']) }}">Our History</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['anti_fraud']) }}">Anti Fraud</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.pages.view', ['cryptocurrency']) }}">Cryptocurrency</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['forex']) }}">Forex</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['real_estate']) }}">Real Estate</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['escrow']) }}">Escrow Services</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['personal_loan']) }}">Personal Loans</a>
                            </li>
                            {{-- <li>
                                <a href="page-pricing.html">Cannibis Stocks</a>
                            </li> --}}
                        </ul>
                    </li>
                    <!-- li end -->
                    <!-- Studies Menu-->
                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['pricing']) }}" class=" menu-item">Pricing</a>
                    </li>
                   
                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['faq']) }}" class=" menu-item">FAQs</a>
                    </li>
                    
                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['login']) }}" class="menu-item"
                            data-hover="shop">Login</a>
                      
                    </li>
                    
                    <li class="has-dropdown mega-dropdown">
                        <a href="{{ route('user.pages.view', ['register']) }}" class=" menu-item">Register</a>
                    </li>
                </ul>
                <div class="module-container">
                 
                    <div class="module module-consultation pull-left">
                        <a class="btn" href="{{ route('user.pages.view', ['contact']) }}">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
    </div>
    <!-- /.container -->
</header>