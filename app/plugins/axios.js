export default ctx => {
  const { store, app } = ctx;
  const axios = app.$axios;
  axios.interceptors.response.use(async response => {
    const { headers } = await response;
    if (headers.hasOwnProperty('authorization')) {
      app.$auth.setToken('local', headers.authorization);
    }
    store.commit('alert/SET_ERROR', null);
    return response;
  }, error => {
    const { response } = error;
    const { headers } = response;
    if (headers.hasOwnProperty('authorization')) {
      app.$auth.setToken('local', headers.authorization);
    }
    store.commit('alert/SET_ERROR', response.data);
    switch (response.status) {
      case 401:
        app.$auth.reset();
        app.$auth.redirect('login');
        break;
    }

    return Promise.reject(error);
  });

  axios.interceptors.request.use(request => {
    request.headers.common.Authorization = app.$auth.getToken('local');
    return request;
  }, error => {
    console.log(error);
    return Promise.reject(error);
  });
};
