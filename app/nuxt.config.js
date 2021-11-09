export default {
  // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
  ssr: false,

  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'PAKWAN',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      { rel: 'stylesheet', type:'text/css', href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css'
  css: [
     '~/assets/scss/main.scss'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    '~/plugins/Vuelidate.js'
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/bootstrap
    'bootstrap-vue/nuxt',
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    '@nuxtjs/auth-next'

  ],

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'en'
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  },

  axios : {
    baseUrl : 'http://localhost:8080/api/v1'
  },

  router : {
    middleware : ['auth']
  },

  loading: {
    color: '#053B66',
    height: '5px'
  },

  auth: {
    redirect : {
      logout: '/login',
      home: '/',
      login : '/login'
    },
    strategies: {
      // awsCognito: {
      //   scheme: "oauth2",
      //   endpoints: {
      //     authorization: "https://myxamarinapp.auth.us-east-1.amazoncognito.com/login",
      //     token: "https://myxamarinapp.auth.us-east-1.amazoncognito.com/oauth2/token",
      //     userInfo: "https://myxamarinapp.auth.us-east-1.amazoncognito.com/oauth2/userInfo",
      //     logout: "https://myxamarinapp.auth.us-east-1.amazoncognito.com/logout"
      //   },
      //   token: {
      //     property: "access_token",
      //     type: "Bearer",
      //     maxAge: 3600
      //   },
      //   refreshToken: {
      //     property: "refresh_token",
      //     maxAge: 60 * 60 * 24 * 30
      //   },
      //   responseType: "token",
      //   redirectUri: "http://localhost:3000/login",
      //   logoutRedirectUri: "http://localhost:3000/login",
      //   clientId: "4jlfe2iki0ucn32uc44clmib3d",
      //   scope: ["email", "openid", "profile"],
      //   codeChallengeMethod: "S256"
      // },
      local: {
        token: {
          property: 'data.AccessToken',
          global: true,
          required: true,
          type: 'Bearer'
        },
        endpoints: {
          login: { url: '/login', method: 'post' },
          logout: false,
          user: false
        },
      }
    }
  }
}
