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
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/jquery.lineProgressbar.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('css/responsive.css')}}"/>
</head>
<body>
	<header id="header" class="header-fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
						<a href="index">
							<h4>Kachabazar</h4>
						</a>
					</div><!-- logo ends -->
				</div><!-- logo columns end -->
				<div class="col-lg-9 col-md-9">
					<nav>
						<ul id="menu">
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li>
                                <a href="about">About</a>
                            </li>
                            <li>
                                <a href="product">Product</a>
                            </li>
                            <li>
                                <a href="registration">Registraion</a>
                            </li>
                            <li>
                                <a href="addproduct">Post Ads</a>
                            </li>
                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
					</nav><!-- nav ends -->
				</div><!-- nav columns end -->
			</div><!-- row ends -->
		</div><!-- container ends -->
	</header><!-- Header Ends -->


<!-- Home section Starts -->
	<section id="others">
		<div class="container">
			<div class="others_home">
				<h2>Upload New Product</h2>
				<p><font color="red"><h3>{{ Session::get('message') }}</h3></font></p>
				<div class="breadcrumb">
			<!--<p class="breadcrumb-item">Home/<span class="breadcrumb-item active">registration</span></p>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Home section ends -->
	
	<!-- registration section -->
	<section id="registration" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<form action="{{ url('product') }}" method="post">
				{{ csrf_field() }}				
					 <div class="form-group">
						<label for="inputName">User ID:</label>
						<input type="number" class="form-control" name="userid" required>
					 </div>
					 <div class="form-group">
						<label for="inputName">User Name:</label>
						<input type="text" class="form-control" name="username" required>
					 </div>
					 <div class="form-group">
						<label for="inputName">Product Name:</label>
						<input type="text" class="form-control" name="productname" required>
					 </div>
					 <div class="form-group">
						<label>Product Type</label>
						<select name="producttype" class="form-control">
							<option value='0'>Fruit</option>
							<option value='1'>Vegetable</option>
						</select>
					 </div>
					 <div class="form-group">
						<label for="inputName">Price:</label>
						<input type="number" class="form-control" name="price" required>
					 </div>
					<div class="form-group">
						<label for="inputAddress">Description:</label>
						<input type="text" class="form-control" name="description" required>
					 </div>
					<div class="form-group">
						<label for="inputNumber">Mobile Number:</label>
						<input type="number" class="form-control" name="number" required>
					 </div>
					<div class="form-group">
						<label for="InputFile">Upload Product Image:</label>
							<input type="file" class="form-control" name="file" required>	
					</div>
					
					<div class="text-center">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				</form>
				</div>
			</div>
		</div>
	</section>
	<!-- registration section ends -->
	
	
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

	<!-- contact ends -->
	<!-- Footer starts -->
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