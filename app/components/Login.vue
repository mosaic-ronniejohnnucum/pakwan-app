<template>
  <div class="login-section">
    <div class="login-form-container p-5">
      <div id="login-error" v-if="error">
        <img src="~/assets/images/error.png" class="img-responsive" />
        <p>{{ error }}</p>
      </div>
      <p>Sign in to start your session</p>
      <form @submit.prevent="doLogin">
        <div class="form-group form-icon">
          <input
            type="email"
            class="form-control"
            placeholder="Email"
            v-model.trim="$v.user.email.$model"
            :class="{ error: $v.user.email.$error }"
          />
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
        <div class="form-group form-icon">
          <input
            type="password"
            class="form-control"
            placeholder="Password"
            v-model.trim="$v.user.password.$model"
            :class="{ error: $v.user.password.$error }"
          />
          <i class="fa fa-lock"></i>
        </div>
        <!--error message-->
        <div
          class="error-message"
          v-if="$v.user.password.$error && !$v.user.password.required"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Please enter your password</small>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" /> Remember me</label>
          <nuxt-link to="/forgot">Forgot your password?</nuxt-link>
        </div>
        <button class="btn btn-primary mosaic-blue-primary w-100">
          Log In
        </button>
      </form>
      <div class="login-version-section mt-2">
        <p>Powered by <span>Mosaic Solutions</span></p>
        <p>Version 1.0</p>
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
  data() {
    return {
      user: {
        email: null,
        password: null,
      },
      error: null,
    }
  },
  validations: {
    user: {
      email: {
        required,
        email,
      },
      password: {
        required,
      },
    },
  },
  methods: {
    async doLogin() {
      
      this.$v.$touch()
      if (this.$v.$invalid) {
      } else {
        console.log(this.user)
        await this.$auth.loginWith('local', {
            data: this.user,
          }).then((res) => {
            this.$auth.setToken(res.data.data.AccessToken)
            alert('asdas')
          }).catch((e) => {
            const { response } = e
            if (typeof response != 'undefined')
              this.error = response.data.description
          })
      }
    },
  },
}
</script>