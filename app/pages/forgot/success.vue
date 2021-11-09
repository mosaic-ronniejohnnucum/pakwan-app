<template>
  <div class="login-section">
    <div class="login-form-container p-5">
      <div class="form-success text-center">
        <div
          class="success-icon d-flex align-items-center justify-content-center"
          @click.prevent="simulateResetPage"
          style="cursor: pointer"
        >
          <i class="fas fa-envelope-open-text fa-inverse"></i>
        </div>
        <h2>Check your mail</h2>
        <p>
          We have sent a password recover instructions<br
            class="d-none d-sm-block"
          />to your email.
        </p>
        <div class="login-version-section mt-2">
          <p>Didn’t receive mail? <a @click.prevent="doResend">Resend</a></p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  auth: false,
  layout: 'login',
  methods: {
    doResend() {
      return
    },
    simulateResetPage() {
      this.$router.push('/reset')
    },
  },
}
</script>