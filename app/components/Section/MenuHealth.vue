<template>
<div class="menu-health">
                                    <div class="generic-box">
                                        <h3>Menu Health</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="~/assets/images/stats.png" class="mr-1">
                                                    Menu Item
                                                </div>
                                                <div class="value">125</div>
                                            </div>

                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="~/assets/images/stats.png" class="mr-1">
                                                    Recipe
                                                </div>
                                                <div class="value">174</div>
                                            </div>
                                            
                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="~/assets/images/stats.png" class="mr-1">
                                                    Sub-Recipe
                                                </div>
                                                <div class="value">56</div>
                                            </div>
                                            
                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="~/assets/images/stats.png" class="mr-1">
                                                    Ingredient
                                                </div>
                                                <div class="value">395</div>
                                            </div>                                            
                                        </div>
                                        
                                        <div class="dropdown-divider mt-4"></div>

                                        <div class="mt-3 alert alert-warning" role="alert">
                                            <i class="fa fa-bell" aria-hidden="true"></i> Notification
                                        </div>

                                        <div id="warnings">
                                            <ul>
                                                <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> (2) Menu item from POS has no recipe.</li>
                                                <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> (1) Recipe with no Product Link</li>
                                                <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> (2) Ingredients has 0% yield.</li>
                                                <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> (1) Menu Item has a lower price compared to your minimum set Food cost.</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
</template>