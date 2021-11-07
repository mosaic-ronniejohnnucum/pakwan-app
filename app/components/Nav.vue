<template>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="~/assets/images/mosaic-logo.png" alt="" id="logo">
                <div class="float-right d-flex align-items-center">
                    <div id="avatar" class="d-flex align-items-center">
                        <div id="avatar-left" class="d-flex align-items-center">
                            <div class="circle d-flex align-items-center">
                                <img src="~/assets/images/avatar.png">
                            </div>
                            <div id="avatar-name">
                                <h3>Charlene</h3>
                            </div>
                        </div>
                        <div id="avatar-right">
                        <!-- Example split danger button -->
                            <div class="btn-group">
                                    <button type="button" class="dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @click.prevent="toggleDropDown">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                <div class="dropdown-menu dropdown-menu-right" v-show="dropDownOpen">
                                    <div id="avatar-settings">
                                        <h3>Charlene Mae Rodriquez</h3>
                                        <small>Admin</small>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <nuxt-link to="/settings" class="d-flex align-items-center"><img src="~/assets/images/settings.png"> Settings</nuxt-link>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="d-flex align-items-center" @click.prevent="doLogout"><img src="~/assets/images/logout.png"> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</template>
<style scoped>
.dropdown-menu{
    display: block;
}
</style>
<script>
export default {
    data(){
        return {
            dropDownOpen : false
        }
    },
    methods : {
        doLogout(){
            this.$auth.logout()
            this.$router.push('/login')
        },
        toggleDropDown(){
            this.dropDownOpen = !this.dropDownOpen
        }
    }
}
</script>