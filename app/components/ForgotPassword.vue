<template>
  <div class="login-section">
    <div class="login-form-container p-5">
      <div id="login-error" v-if="error">
        <img src="~/assets/images/error.png" class="img-responsive" />
        <p>{{ error }}</p>
      </div>
      <h2>Forgot password?</h2>
      <p>
        Forgot password? Enter email associated with your account and we will
        send and email instructions to reset your password
      </p>
      <form @submit.prevent="doForgot">
        <div class="form-group form-icon">
          <input type="email" class="form-control" placeholder="Email" :class="{ error : $v.user.email.$error }" v-model.trim="$v.user.email.$model" />
          <i class="fa fa-user"></i>
        </div>
        <!--error-->
        <div
          class="error-message"
          v-if="$v.user.email.$error && !$v.user.email.required"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Please enter your email</small>
        </div>
        <!--error-->
        <div
          class="error-message"
          v-if="$v.user.email.$error && !$v.user.email.email"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Invalid email format</small>
        </div>
        <button class="btn btn-primary mosaic-blue-primary w-100">Send</button>
      </form>
      <div class="login-version-section mt-2">
        <p>Remember Password? <nuxt-link to="/login">Login</nuxt-link></p>
      </div>
    </div>
  </div>
</template>
<style scoped>
.login-wrapper .login-section .login-form-container form .error {
  border: solid 1px #f82c2c !important;
}
</style>
<script>
import { required, email } from 'vuelidate/lib/validators'
export default {
  data(){
      return {
          user : {
              email : null
          },
          error: null,
      }
  },
  validations : {
      user : {
          email : {
              required,
              email
          }
      }
  },
  methods: {
    doForgot() {
        this.$v.$touch()
        if (this.$v.$invalid) {
      } else {
        try{
            this.$router.push('/forgot/success')
        }catch(e){
            const { response } = e
            if (typeof response != 'undefined')
              this.error = response.data.description
        }
      }
      
    },
  },
}
</script>