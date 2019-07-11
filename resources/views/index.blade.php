<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kachabazar</title>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/icon-fonts.min.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/all.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/responsive.css')}}"/>
</head>
<body>
	<header id="header" class="header-fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2">
					<div class="logo">
						<a href="index">
							<h4>Kachabazar</h4>
						</a>
					</div><!-- logo ends -->
				</div><!-- logo columns end -->
				<div class="col-lg-9 col-md-10">
					<nav>
						<ul id="menu">
                            <li>
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#our_product">Products</a>
                            </li>
                            <li>
                                <a href="registration">Registraion</a>
                            </li>
                            <li>
                                <a href="addproduct">Post Ads</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
					</nav><!-- nav ends -->
				</div><!-- nav columns end -->
			</div><!-- row ends -->
		</div><!-- container ends -->
	</header><!-- Header Ends -->


	<!-- Home section Starts -->
	<section id="home">
		<div class="home_content text-center">
			<p>Welcome to <span>Kachabazar.com</span></p>
			<h2>We <span id="typed"></span></h2>
				<div class="col-md-6 col-sm-12">
				<div class="search_area ">
					<form action="search" method="get">
						<input type="search" name="search" class="form-control" placeholder="Search"/>	
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Home section ends -->
	<!-- About section starts -->
	<section id="about" class="pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="page_title text-center">
						<p>Famous for Fresh food</p>
						<h1>What We Do</h1>
					</div>
					<div class="about_content">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<a href="about" class=" product_btn btn btn-danger">Read More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_bg"></div>
				</div>
			</div>
		</div>
		<hr>
	</section>
	<!-- About section ends -->
	
	
	
	<!-- product Section Starts -->
	<section id="our_product" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page_title text-center mb-4">
						<h1>Our Products</h1>
					</div>
				</div>
			</div>

			<div class="row">

        	</div>
        	<!--vegetable-product-->
        	<?php 
        		$i=0;$j=0;
        	?>
        	@foreach($ad as $ad)
        		@if($j==4)
        			<?php
        				break;
        			?>
        		@elseif($i==0)
        		<?php
        			$i=1;$j++;
        			$p=($ad->Price * 5);
					$p=$p-(($p*5)/100);
        		?>
			<div class="row">
				<div class="tab-content col-lg-12" id="myTabContent">
					<div class="tab-pane fade show active" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_product">
									<img src="{{URL::asset('images/fruits/'.$ad->Image)}}" alt="fruits"/>
									<div class="product_content">
										<h4>{{ $ad->ProductName }}</h4>
										
										<!-- modal&price button-->
									<div class="our-button btn-group">
										<button type="button" class="btn btn-secondary" data-toggle="modal"
											data-target="#mymodal">Order
										</button>
									<div class="modal fade" id="mymodal">
										<div class="our-modal modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h2><b>For Order</b></h2>
													<button type="button" class="btn btn-danger" data-dismiss="modal">
														&times;
													</button>
												</div>
											<div class="modal-body">
											<p>
												<span class="lnr lnr-phone-handset"> Call Now: </span>
												<a href="tel:+8801779878026">+8801779878026</a><br><br>
												<span class="lnr lnr-phone-handset"> Call Now: </span>
												<a href="tel:+8801787519400">+8801787519400</a></p>
											</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">
												back
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
									<div class="dropdown-menu">
										<button type="button" class="dropdown-item">Per 1kg-{{ $ad->Price }}Tk</button>
										<button type="button" class="dropdown-item">Per 5kg-<?php echo $p ?>Tk</button>
									</div>
								</div>	
							</div>				
							<p>{{ $ad->Description }}</p>
								</div>
							</div>	
							</div>
				@elseif($i==1)
					<?php
        				$i=0;$j++;
        				$p=($ad->Price * 5);
						$p=$p-(($p*5)/100);
        			?>
							<div class="col-md-6">
								<div class="single_product">
									<img src="{{URL::asset('images/fruits/'.$ad->Image)}}" alt="vegetable"/>
									<div class="product_content">
										<h4>{{ $ad->ProductName }}</h4>
										<div class="our-button btn-group">
											<button type="button" class="btn btn-secondary" data-toggle="modal"
												data-target="#mymodal">Order
											</button>
										<div class="modal fade" id="mymodal">
											<div class="our-modal modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h2>{{ $ad->ProductName }}</h2>
															<button type="button" class="btn btn-danger" data-dismiss="modal">
																&times;
															</button>
													</div>
													<div class="modal-body">
														<p>{{ $ad->Description }}</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">
															back
														</button>
													</div>
												</div>
											</div>
										</div>
							<div class="btn-group">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
									<div class="dropdown-menu">
										<button type="button" class="dropdown-item">Per 1kg-{{ $ad->Price }}Tk</button>
										<button type="button" class="dropdown-item">Per 5kg-<?php echo $p ?>Tk</button>
									</div>
								</div>
							</div>
						    <p>{{ $ad->Description }}</p>
									</div>
								</div>	
							</div>
						</div>
					</div>	
					<!--vegetable-product-->
					<!--fruit--->
				
				@elseif($j==10)
					<?php
        				$i=0;$j++;
        				$p=($ad->Price * 5);
						$p=$p-(($p*5)/100);
        			?>
					<div class="tab-pane fade" id="fruit" role="tabpanel" aria-labelledby="fruit-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_product">
									<img src="{{URL::asset('images/fruits/'.$ad->Image)}}" alt="fruit"/>
									<div class="product_content">
										<h4>{{ $ad->ProductName }}</h4>
										
										
										<!-- modal&price button-->
										<div class="our-button btn-group">
											<button type="button" class="btn btn-secondary" data-toggle="modal"
												data-target="#mymodal">Order
											</button>
											<div class="modal fade" id="mymodal">
												<div class="our-modal modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2>modal header</h2>
															<button type="button" class="btn btn-danger" data-dismiss="modal">
																&times;
															</button>
														</div>
														<div class="modal-body">
															<p>this is modal body.this is modal body.
																this is modal body.this is modal body.</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">
																back
															</button>
														</div>
													</div>
												</div>
											</div>
								<div class="btn-group">
									<button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown">Price</button>
										<div class="dropdown-menu">
											<button type="button" class="dropdown-item">Per 1kg-{{ $ad->Price }}Tk</button>
											<button type="btton" class="dropdown-item">Per 5kg-<?php echo $p ?>Tk</button>
										</div>
									</div>	
								</div>
					
					<!-- modal&price button-->
					
										<p>{{ $ad->Description }}</p>
									</div>
								</div>
							</div>
				@elseif($j==10)
					<?php
        				$i=0;$j++;
        				$p=($ad->Price * 5);
						$p=$p-(($p*5)/100);
        			?>
							<div class="col-md-6">
								<div class="single_product">
									<img src="{{URL::asset('images/fruits/'.$ad->Image)}}" alt="fruit"/>
									<div class="product_content">
										<h4>{{ $ad->ProductName }}</h4>
										
										
										<!-- modal&price button-->
										<div class="our-button btn-group">
											<button type="button" class="btn btn-secondary" data-toggle="modal"
												data-target="#mymodal">Order
											</button>
											<div class="modal fade" id="mymodal">
												<div class="our-modal modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2>modal header</h2>
															<button type="button" class="btn btn-danger" data-dismiss="modal">
																&times;
															</button>
														</div>
														<div class="modal-body">
															<p>this is modal body.this is modal body.
																this is modal body.this is modal body.</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">
																back
															</button>
														</div>
													</div>
												</div>
											</div>
								<div class="btn-group">
									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
										<div class="dropdown-menu">
											<button type="button" class="dropdown-item">Per 1kg-{{ $ad->Price }}Tk</button>
											<button type="btton" class="dropdown-item">Per 5kg-<?php echo $p ?>Tk</button>
									</div>
								</div>	
									</div>
					
					<!-- modal&price button-->
					
										<p>{{ $ad->Description }}</p>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				@endif
			@endforeach	
				</div>
				<a href="product" class=" product_btn btn btn-danger">View more</a>
			</div>
				
		</div>
	</section>
	<!-- product Section Ends -->
	<!-- Discount section starts -->
	<section id="discount" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="discount_item text-center">
						<p>By your First Product Get</p>
						<h1>Upto <span>50% discount!</span></h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Discount section ends -->
	<!-- contact starts -->
	<section id="contact" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="offset-lg-5 col-lg-7">
					<div class="page_title text-center">
						<h1>Get in Touch</h1>
					</div>
					<form action="{{ URL('messages') }}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6 col-sm-12">
					    		<input type="text" class="form-control" name="fname" placeholder="First Name">
					    	</div>
							<div class="col-lg-6 col-sm-12">
					    		<input type="text" class="form-control" name="lname" placeholder="Last Name">
					    	</div>
							<div class="col-lg-12 col-sm-12">
					    		<input type="email" class="form-control" name="email" placeholder="E-Mail">
							</div>
							<div class="col-lg-12">
					    		<textarea class="form-control" rows="3" name="message" placeholder="Your Message"></textarea>
							</div>
							<div class="col-lg-6 p-3">
								<button class="btn btn-danger">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="contact_footer" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_footer_content">
						<h1>Call Us</h1>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="contact_footer_contact">
						<p>
							<span class="lnr lnr-phone-handset"> Call Us: </span>
							<a href="tel:+8801779878026">+8801779878026</a>
						</p>
						<p>
							<span class="lnr lnr-envelope"> Mail Us: </span>
							<a href="mailto:raiyanmarzan.rm@gmail.com">raiyanmarzan.rm@gmail.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact ends -->
	<!-- Footer starts -->
	<footer class="pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="logo">
						<a href="index">
							<h4>Kachabazar</h4>
						</a>
					</div><!-- logo ends -->
				</div>
				<div class="col-lg-2">
					<div class="footer_items">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li>
								<a href="index"> <span class="lnr lnr-chevron-right-circle"></span> Home</a>
							</li>
							<li>
								<a href="product"> <span class="lnr lnr-chevron-right-circle"></span> Products</a>
							</li>
							<li>
								<a href="about"> <span class="lnr lnr-chevron-right-circle"></span> About</a>
							</li>
							<li>
								<a href="contact"> <span class="lnr lnr-chevron-right-circle"></span> Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer_items">
						<h4>Opening Hours</h4>
						<ul class="list-unstyled">
							<li>
								<p> <span class="lnr lnr-chevron-right-circle"></span> Saturday - Friday : 10.00pm - 8.00pm</p>
							</li>
							<li>
								<p><span class="lnr lnr-chevron-right-circle"></span> Sunday - Thursday : 8.00am - 9.00pm</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer_items">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li>
								<p><span class="lnr lnr-map-marker"></span> ABC Point, Uposhohor, Sylhet, Bangladesh</p>
							</li>
							<li>
								<span class="lnr lnr-phone-handset"> Call Us: </span>
								<a href="tel:+8801779878026">+8801779878026</a>
							</li>
							<li>
								<span class="lnr lnr-envelope"> Mail Us: </span>
								<a href="mailto:raiyanmarzan.rm@gmail.com">Admin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="main_footer" class="pt-3 pb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="social_links">
							<ul class="contact-link list-unstyled">
								<li>
									<a href="https://www.facebook.com/raiyan.marzan">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="https://github.com/Marzaan">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/115799725596748816937">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/raiyan-marzan-2b383a185/">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="copyright">
							<p>&copy; All right reserved 2019</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer ends -->
	
	
	
	
	<!-- Main Jquery and Bootstrap js start -->
	<script src="{{URL::asset('js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('js/popper.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<!-- Main Jquery and Bootstrap ends -->
	<!-- others js start -->
	<script src="{{URL::asset('js/waypoint.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.nav.js')}}"></script>
	<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{URL::asset('js/typedit.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.magnificpopup.min.js')}}"></script>
	<script src="{{URL::asset('js/wow.min.js')}}"></script>
	<!-- Main js -->
	<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>