<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerTop.php'; ?>
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="assets/css/register.css">
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'headerBottom.php'; ?>
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'navbar.php'; ?>

		<div class="wrapper" style="background-image: url('assets/img/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Repeat Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Country:</label>
							<div class="form-holder select">
								<select name="" id="" class="form-control">
									<option value="united states">United States</option>
									<option value="united kingdom">United Kingdom</option>
									<option value="viet nam">Viet Nam</option>
								</select>
								<i class="zmdi zmdi-pin"></i>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Gender:</label>
							<div class="form-holder select">
								<select name="" id="" class="form-control">
									<option value="male">Male</option>
									<option value="femal">Female</option>
									<option value="other">Other</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<button>Register Now</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
<?php require VIEWSDIR.DS.'Pages'.DS.'Static'.DS.'footer.php'; ?>