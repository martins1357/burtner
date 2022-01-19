<header id="navbar-spy" class="header header-1 header-transparent">
	<nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
		<div class="container">
			<a class="navbar-brand" href="{{route('app.home')}}">
				<img class="logo logo-light" src="{{asset('assets/images/logo/logo-light.png')}}" alt="Consultivo Logo">
				<img class="logo logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Consultivo Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
							
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
				<!-- Home Menu-->
<li class="has-dropdown active">
    <a href="{{route('app.home')}}"  class=" menu-item">HOME</a>
</li>
    
       
<!-- li end -->

<!-- Pages Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="pages">ABOUT US</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{route('about')}}"></a>
        </li>
        <li>
            <a href="{{route('security')}}">SECURITY</a>
        </li>
        <li>
            <a href="{{route('portfolio')}}">OUR PORTFOLIO</a>
        </li>
        <li>
            <a href="{{route('history')}}">OUR HISTORY</a>
        </li>
        <li>
            <a href="{{route('antifraud')}}">ANTI FRAUD</a>
        </li>
    
    </ul>
</li>
<!-- li end -->
<!-- Services Menu-->
<li class="has-dropdown">
    <a href="{{route('services')}}" data-toggle="dropdown" class="dropdown-toggle menu-item">SERVICES</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{route('cryptocurrency')}}">CRYPTOCURRENCY</a>
        </li>
        <li>
            <a href="{{route('forex')}}">FOREX</a>
        </li>
        <li>
            <a href="{{route('realestate')}}">REAL ESTATE</a>
        </li>
		<li>
            <a href="{{route('escrowservices')}}">ESCROW SERVICE</a>
        </li>
        <li>
            <a href="{{route('personalloans')}}">PERSONAL LOANS</a>
        </li>
        <li>
            <a href="{{route('cannibisstock')}}">CANNIBIS STOCK</a>
        </li>
    </ul>
</li>
<!-- li end -->
<!-- Studies Menu-->
<li class="has-dropdown">
    <a href="{{route('pricing')}}"  class=" menu-item">PRICING</a>
<!-- li end -->

<!-- Blog Menu-->
<li class="has-dropdown">
    <a href="{{route('faq')}}"  class=" menu-item">FAQ</a>
<!-- li end -->

<!-- shop Menu -->
<li class="has-dropdown">
    <a href="{{route('login')}}"  class=" menu-item">LOGIN</a>
<!-- li end -->

	<!-- Elements Menu -->
	<li class="has-dropdown mega-dropdown">
		<a href="{{route('register')}}" class="menu-item">REGISTER</a>
		<ul class="dropdown-menu mega-dropdown-menu">
			<li>
				<div class="container">
					<div class="row">
						<!-- Column #1 -->
						<!-- <div class="col-md-3">
							<ul>
								<li>
									<a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>testimonials</a>
								</li>
								<li>
									<a href="elements-video-buttons.html"><i class="fa fa-toggle-right"></i>video buttons</a>
								</li>
								<li>
									<a href="elements-clients.html"><i class="fa fa-user"></i>clients</a>
								</li>
							</ul>
						</div> -->
						<!-- .col-md-3 end -->
						
						<!-- Column #2 -->
						<!-- <div class="col-md-3">
							<ul>
								<li>
									<a href="elements-accordion.html"><i class="fa fa-server"></i>accordion</a>
								</li>
								<li>
									<a href="elements-cta.html"><i class="fa fa-child"></i>call to action</a>
								</li>
								<li>
									<a href="elements-contact-form.html"><i class="fa fa-desktop"></i>contact form</a>
								</li>
							</ul>
						</div> -->
						<!-- .col-md-3 end -->
						
						<!-- Column #3 -->
						<!-- <div class="col-md-3">
							<ul>
				                <li>
									<a href="elements-team.html"><i class="fa fa-group"></i>team variations</a>
								</li>
 
								<li>
									<a href="elements-counters.html"><i class="fa fa-dashboard"></i>counters</a>
								</li>
								<li>
									<a href="elements-infocards.html"><i class="fa fa-info-circle"></i>info Cards</a>
								</li>

							</ul>
						</div> -->
						<!-- .col-md-3 end -->
						
						<!-- Column #4 -->
						<!-- <div class="col-md-3">
							<ul>
								<li>
									<a href="elements-featured.html"><i class="fa fa-sliders"></i>featured box</a>
								</li>
				                <li>
									<a href="elements-pricing.html"><i class="fa fa-exchange"></i>pricing</a>
								</li>
							</ul>
						</div> -->
						<!-- .col-md-3 end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- container end -->
			</li>
		</ul>
		<!-- .mega-dropdown-menu end -->
	</li>				</ul>
				<div class="module-container">
				<!-- Module Consultation  -->
<div class="module module-consultation pull-left">
	<a class="btn" href="{{route('contact')}}">CONTACT US</a>
</div>				<!-- Module Search -->

<!-- .module-cart end -->				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
</header>