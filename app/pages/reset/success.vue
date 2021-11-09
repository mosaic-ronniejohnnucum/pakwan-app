<template>
    <div class="login-section">
		<div class="login-form-container p-5">
			<div class="form-success text-center">
				<div class="success-icon d-flex align-items-center justify-content-center">                                  
					<i class="fas fa-check fa-inverse"></i>
				</div>
				<h2>Congratulations!</h2>
				<p>Your password has been changed successfully.</p>
				<nuxt-link to="/login" class="btn btn-primary mosaic-blue-primary w-100">Back to Log In Page</nuxt-link>
			</div>
		</div>
	</div>
</template>
<script>
export default {
    auth : false,
	layout : 'login'
}
</script>