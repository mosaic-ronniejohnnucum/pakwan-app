<template>
  <div class="login-section">
    <div class="login-form-container p-5">
      <h2>Reset password</h2>
      <p>
        Your new password must be different from your previously used password.
      </p>
      <form @submit.prevent="doReset">
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
        <div
          class="error-message"
          v-if="$v.user.password.$error && !$v.user.password.alphaNum"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Please enter alpha numeric characters</small>
        </div>
        <div
          class="error-message"
          v-if="$v.user.password.$error && !$v.user.password.minLength"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Password should be at least 3 characters</small>
        </div>
        <div
          class="error-message"
          v-if="$v.user.password.$error && !$v.user.password.maxLength"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Password should not exceed 25 characters</small>
        </div>

        <div class="form-group form-icon">
          <input
            type="password"
            class="form-control"
            placeholder="Password Confirmation"
            v-model.trim="$v.user.password_confirmation.$model"
            :class="{ error: $v.user.password_confirmation.$error }"
          />
          <i class="fa fa-lock"></i>
        </div>
        <!-- error message -->
        <div
          class="error-message"
          v-if="$v.user.password_confirmation.$error
          &&
          !$v.user.password_confirmation.required"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Password confirmation is required</small>
        </div>
        <div
          class="error-message"
          v-if="$v.user.password_confirmation.$error
          &&
          !$v.user.password_confirmation.sameAsPassword"
        >
          <i class="fas fa-exclamation-circle"></i>
          <small>Password does not match</small>
        </div>
        <button class="btn btn-primary mosaic-blue-primary w-100">
          Submit
        </button>
      </form>
    </div>
  </div>
</template>
<style scoped>
.login-wrapper .login-section .login-form-container form .error {
  border: solid 1px #f82c2c !important;
}
</style>
<script>
import {
  required,
  sameAs,
  minLength,
  maxLength,
  alphaNum,
} from 'vuelidate/lib/validators'
export default {
  data() {
    return {
      user: {
        password: null,
        password_confirmation: null,
      },
    }
  },
  validations: {
    user: {
      password: {
        required,
        minLength: minLength(3),
        maxLength: maxLength(25),
        alphaNum,
      },
      password_confirmation: {
        required,
        sameAsPassword: sameAs('password')
      },
    }
  },
  methods: {
    doReset() {
      this.$v.$touch()
      if (this.$v.$invalid) {
      } else {
        try {
          this.$router.push('/reset/success')
        } catch (e) {
          const { response } = e
          if (typeof response != 'undefined')
            this.error = response.data.description
        }
      }
    },
  },
}
</script>