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
                        <h2>Reset password</h2>
                        <p>Your new password must be different from your previously used password.</p>
                        <form action="reset-success.php">
                        <div class="form-group form-icon">
                                <input type="password" class="form-control error" placeholder="Password">
                                <i class="fa fa-lock"></i>
                            </div>
                            <!--error message-->
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Please enter your password</small>
                            </div>
                            <div class="form-group form-icon">
                                <input type="password" class="form-control error" placeholder="Password">
                                <i class="fa fa-lock"></i>
                            </div>
                            <!--error message-->
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Password does not match</small>
                            </div>
                            <button class="btn btn-primary mosaic-blue-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
