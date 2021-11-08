<template>
<div id="sidebar" :class="{ sactive : sideBarOpen }">
<nav>
    <button type="button" class="d-flex align-items-center" id="sidebarCollapse" @click.prevent="toggleSideBar">
        <i class="fas fa-list"></i>
        Menu
    </button>
    <ul>
        <li><nuxt-link to="/" class="active d-flex align-items-center"><div class="nav-box"><img src="~/assets/images/homeicon.png"></div> Home</nuxt-link></li>
        <li><nuxt-link to="/pos" class="d-flex align-items-center"><div class="nav-box"><img src="~/assets/images/cashier.png"></div> POS</nuxt-link></li>
        <li><nuxt-link to="/my-items" class="d-flex align-items-center"><div class="nav-box"><img src="~/assets/images/posicon.png"></div> My Items</nuxt-link></li>
        <li><nuxt-link to="/insights" class="d-flex align-items-center"><div class="nav-box"><img src="~/assets/images/chart.png"></div> Insights</nuxt-link></li>
    </ul>
    <div class="support text-center">
        <div class="support-icon">
            <img src="~/assets/images/support.png">
        </div>
        <h4>Need Help?</h4>
        <a href="#" class="btn btn-primary">Go to Support Center</a>
    </div>
</nav>
</div>
</template>
<script>
export default {
    data(){
        return {
            sideBarOpen : false
        }
    },
    methods : {
        toggleSideBar(){
            this.sideBarOpen = !this.sideBarOpen
        }
    }
}
</script>