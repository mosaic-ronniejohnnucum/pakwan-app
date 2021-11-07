<template>
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
                            <p>Incorrect username or password!</p>
                        </div>
                        <p>Sign in to start your session</p>
                        <form action="dashboard.php">
                            <div class="form-group form-icon">
                                <input type="email" class="form-control error" placeholder="Email">
                                <i class="fa fa-user"></i>
                            </div>
                            <!--error-->
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Please enter your email</small>
                            </div>
                            <div class="form-group form-icon">
                                <input type="password" class="form-control error" placeholder="Password">
                                <i class="fa fa-lock"></i>
                            </div>
                            <!--error message-->
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Please enter your password</small>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                                <a href="forgot.php">Forgot your password?</a>
                            </div>
                            <button class="btn btn-primary mosaic-blue-primary w-100">Log In</button>
                        </form>
                        <div class="login-version-section mt-2">
                            <p>Powered by <span>Mosaic Solutions</span></p>
                            <p>Version 1.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>