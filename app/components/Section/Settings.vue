<template>
    <div class="checklist">
        <ul id="nav-settings">
            <li>
                <nuxt-link to="/settings/account" class="active d-flex align-items-center justify-content-between">
                    <div>Account Settings<br><small>Personal Information, Email</small></div>
                    <i class="fas fa-angle-right"></i>
                </nuxt-link>
            </li>
            <li>
                <nuxt-link to="/gsettings/security" class="d-flex align-items-center justify-content-between">
                    <div>Security<br><small>Change Password</small></div>
                    <i class="fas fa-angle-right"></i>
                </nuxt-link>
            </li>
            <li>
                <nuxt-link to="/settings/access-management" class="d-flex align-items-center justify-content-between">
                <div>Access Management<br><small>Lorem ipsum Dolor sit amet</small></div>
                    <i class="fas fa-angle-right"></i>
                    </nuxt-link>
            </li>
            <li>
                <nuxt-link to="/settings/business-management" class="d-flex align-items-center justify-content-between">
                <div>Business Management<br><small>Lorem ipsum dolor sit amet</small></div>
                <i class="fas fa-angle-right"></i>
                </nuxt-link>
            </li>
        </ul>
    </div>
</tempalte>