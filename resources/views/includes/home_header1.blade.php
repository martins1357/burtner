<header id="navbar-spy" class="header header-1 header-transparent">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
        <div class="container">
            <a class="navbar-brand" href="index-2.html">
                <a href="{{ route('app.home')}}">
                    <img class="logo logo-light" src="{{ asset("assets/images/logo/logo-light.png") }}" alt="Consultivo Logo">
                </a>
                {{-- <img class="logo logo-dark" src="{{ asset("assets/images/logo/logo-dark.png") }}" alt="Consultivo Logo"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Home Menu-->
                    <li class="has-dropdown active">
                        <a href="{{ route('app.home')}}"  class=" menu-item">Home</a>
                    </li>
                    
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
                    <!-- li end -->
                    <!-- Services Menu-->
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
                           
                        </ul>
                    </li>
                    
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
                    <!-- Module Consultation  -->
                    <div class="module module-consultation pull-left">
                        <a class="btn" href="{{ route('user.pages.view', ['contact']) }}">Contact Us</a>
                    </div> <!-- Module Search -->
                    <div class="module module-search pull-left">
                        <div class="module-icon search-icon">
                            <i class="lnr lnr-magnifier"></i>
                            <span class="title">search</span>
                        </div>
                    
                    </div><!-- .module-search end -->
                    
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</header>