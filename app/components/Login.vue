<template>
  <div class="login-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="mosaic-logo-section">
            <h1>Welcome to</h1>
            <img src="~/assets/images/mosaic-white-logo.png" />
          </div>
        </div>
        <div class="col-lg-5">
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
                    class="form-control error"
                    placeholder="Email"
                    v-model="user.email"
                  />
                  <i class="fa fa-user"></i>
                </div>
                <!--error-->
                <div class="error-message" v-if="noEmail">
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Please enter your email</small>
                </div>
                <div class="form-group form-icon">
                  <input
                    type="password"
                    class="form-control error"
                    placeholder="Password"
                    v-model="user.password"
                  />
                  <i class="fa fa-lock"></i>
                </div>
                <!--error message-->
                <div class="error-message" v-if="noPassword">
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Please enter your password</small>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" /> Remember me</label>
                  <nuxt-link to="/">Forgot your password?</nuxt-link>
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
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      user: {
        email: null,
        password: null,
      },
      error : null,
      noEmail : false,
      noPassword : false
    }
  },
  methods: {
    async doLogin() {

        this.noEmail = false
        this.noPassword = false

        if(this.user.email == null || this.user.email.trim() == '')
            this.noEmail = true

        if(this.user.password == null || this.user.password.trim() == '')
            this.noPassword = true

        if(!this.noEmail && !this.noPassword)
        {
            await this.$auth.loginWith('local', {
                data : this.user
            }).then(res => {
                this.$auth.setToken(res.data.data.AccessToken)
                
            }).catch(e => {
                const { response } = e
                if(typeof(response) != 'undefined')
                  this.error = response.data.description
            })
        }
    },
  },
}
</script>