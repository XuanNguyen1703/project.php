<?php include_once 'Views/Layouts/header.php'; ?>
<br>
<br>

<div class="columns-container">
	<div class="container" id="columns">
		<!-- breadcrumb -->
		<div class="breadcrumb clearfix">
			<a class="home" href="#" title="Return to Home">Home</a>
			<span class="navigation-pipe">&nbsp;</span>
			<span class="navigation_page">Authentication</span>
		</div>
		<!-- ./breadcrumb -->
		<!-- page heading-->
		<h2 class="page-heading">
			<span class="page-heading-title2">Authentication</span>
		</h2>
		<!-- ../page heading-->
		<div class="page-content">
			<div class="row">
				<div class="col-sm-6">
					<div class="box-authentication">
						<h3>Create an account</h3>
						<p>Please enter your email address to create an account.</p>
						<label for="emmail_register">Email address</label>
						<input id="emmail_register" type="text" class="form-control">
						<a href="index.php?mod=login&act=formRegist" class=" btn button"><i class="fa fa-user"></i> Create an account</a>
					</div>
				</div>
					<div class="col-sm-6">
						<form action="index.php?mod=login&act=login" method="POST">
						<div class="box-authentication">
							<h3>Already registered?</h3>
							<label for="emmail_login">Email address</label>
							<input id="emmail_login" name="EMAIL" type="text" class="form-control">
							<label for="password_login">Password</label>
							<input name="MAT_KHAU" id="password_login" type="password" class="form-control">
							<p class="forgot-pass"><a href="#">Forgot your password?</a></p>
							<button type="submit" class="btn button btn-primary"><i class="fa fa-lock"></i> Sign in</button>
						</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<?php include_once 'Views/Layouts/footer.php'; ?>