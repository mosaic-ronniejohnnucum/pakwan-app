<?php include('includes/header.php'); ?>
	<div class="login-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="mosaic-logo-section">
						<h1>Welcome to</h1>
						<img src="assets/images/mosaic-white-logo.png"/>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="login-section">
                        <div class="login-form-container p-5">
                            <div id="login-error">
                                <img src="assets/images/error.png" class="img-responsive">
                                <p>Invalid Email!</p>
                            </div>
                            <h2>Forgot password?</h2>
                            <p>Forgot password? Enter email associated with your account and  we will send and email instructions to reset your password</p>
                            <form action="forgot-success.php">
                                <div class="form-group form-icon">
                                    <input type="email" class="form-control error" placeholder="Email">
                                    <i class="fa fa-user"></i>
                                </div>
                                <!--error-->
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Please enter your email</small>
                                </div>
                                <button class="btn btn-primary mosaic-blue-primary w-100">Send</button>
                            </form>
                            <div class="login-version-section mt-2">
                                <p>Remember Password? <a href="login.php">Login</a></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('includes/footer.php'); ?>