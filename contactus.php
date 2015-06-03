<!DOCTYPE html> 
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="css/custom-styles.css">
	<title>Sass - foundation - Contact us</title>
</head>
<body>

	<nav class="top-bar" data-topbar role="navigation"> 

		<ul class="title-area"> 
			<li class="name"> <h1><a href="#">My Site</a></h1> </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li> 
		</ul> 

		<section class="top-bar-section"> <!-- Right Nav Section --> 
			<ul class="right"> 
				<li class="active">  <a href="#" data-reveal-id="myModal">Click Me For A Modal</a> </li> 
				<li class="has-dropdown click"> <a href="#">Right Button Dropdown</a>
					<ul class="dropdown"> <li><a href="#">First link in dropdown</a></li> 
						<li class="active"><a href="#">Active link in dropdown</a></li> 
					</ul> 
				</li> 
			</ul> <!-- Left Nav Section --> 

			<ul class="left"> <li><a href="#">Left Nav Button</a></li> 
			</ul> 
		</section> 

	</nav>

	<!-- START :: Contact Us Form -->

	<div class="row">
		<div class="small-12 medium-4 large-4 columns">
			<form name="frmContactUs" id="frmContactUs">
				<div class="row">
					<div class="large-12 columns">
						<label>First Name
							<input type="text" placeholder="First Name" />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Last Name
							<input type="text" placeholder="Last Name" />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Email
							<input type="email" placeholder="Email Address" />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Country
							<select name="selCountry">
								<option>Select Country</option>
								<option value="India">India</option>
							</select>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>
							Pincode
							<input type="text" name="txtPincode" id="txtPincode" />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<a role="button" href="#" class="button">Submit</a>
					</div>
				</div>				
			</form>
		</div>

		<div class="small-6 medium-3 large-4 columns">
			Column 2
		</div>

		<div class="small-6 medium-5 large-4 columns">
			Column 3
		</div>
	</div>

	<!-- END :: Contact Us Form -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/foundation.min.js"></script>
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script>

		$(document).foundation({
			accordion: { 
				callback : function (accordion) {
			  // console.log(accordion);
			}
		}
	});
	</script>

	<script src="//localhost:35729/livereload.js"></script> 

</body>
</html>
