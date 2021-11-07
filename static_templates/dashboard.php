<?php include('includes/db-header.php'); ?>
<div class="d-flex">
    <?php include('includes/sidebar.php'); ?>
    <div class="content">
        <?php include('includes/nav.php'); ?>
        <section class="dashboard-content">
            <div id="home">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboard-title">
                                <h3>Home</h3>
                                <p>Welcome Back {{Charlene!}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div id="notifications">
                                <!--note-->
                                <div class="note alert alert-warning alert-dismissible fade show" role="alert">
                                    <div class="d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <i class="fas fa-tools"></i>
                                        </div>
                                        <div class="msg">
                                            <h2>Note: Maintenance scheduled with several hours downtime on Sunday October 31st.</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--announcement-->
                                <div class="announcement alert alert-success alert-dismissible fade show" role="alert">
                                    <div class="d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                        <div class="msg">
                                            <h2>Announcement: Lorem ipsum dolor sit amet!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="checklist">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="checklist-title">
                                        <h3>Checklist</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    </div>
                                    <div class="progress-wrapper">
                                        <div class="progress blue"> 
                                            <span class="progress-left"> 
                                                <span class="progress-bar"></span> 
                                            </span> 
                                            <span class="progress-right"> 
                                                <span class="progress-bar"></span> 
                                            </span>
                                        </div>
                                        <div class="percentage">    
                                            <div class="percent">
                                                Progress
                                                <strong>23%</strong> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checklist-content">
                                    <!--alert 2-->
                                    <div class="attention">
                                        <div class="mt-3 alert alert-warning" role="alert">
                                        <i class="fas fa-exclamation-circle"></i> Needs Attention
                                        </div>
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4>Lorem Ipsum</h4>
                                            </div>
                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-1"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>
                                            <!--list 1-->
                                            <div id="list-1" class="collapse">
                                                <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4>Lorem Ipsum</h4>
                                            </div>
                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-2"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>
                                            <div id="list-2" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4>Lorem Ipsum</h4>
                                            </div>
                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-3"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>
                                            <div id="list-3" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--end-->
                                    </div>
                                    <!--alert 2-->
                                    <div class="completed">
                                        <div class="mt-3 alert alert-success" role="alert">
                                        <i class="fas fa-exclamation-circle"></i> Completed
                                        </div>
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-4"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-4" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--2-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-5"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-5" class="collapse">

                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--3-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-6"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-6" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--3-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-6"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-6" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--3-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-6"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-6" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--3-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-6"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-6" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        <!--3-->
                                        <div class="checklist-box">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox">
                                                <h4 class="done">Lorem Ipsum</h4>
                                            </div>

                                            <p class="outer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="accordion">
                                                <button data-toggle="collapse" data-target="#list-6"><i class="fas fa-question-circle"></i> Why Lorem Ipsum?</button>
                                            </div>

                                            <div id="list-6" class="collapse">
                                            <div class="dropdown-divider"></div>
                                                <div class="d-flex align-items-baseline">
                                                    <input type="checkbox"> 
                                                    <p class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dashboard right-->
                        <div class="col-md-7">
                            <div id="dashboard-right">
                                <div class="core-solutions text-left d-flex align-items-center justify-content-between">
                                    <div class="core-box pos">
                                        <div class="img-box">
                                            <a href="#">
                                                <img src="assets/images/pos.png">
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="" class="core-title" data-toggle="modal" data-target="#">POS</a>
                                            <!--show icon here if any-->                     
                                        </div>   
                                    </div>

                                    <div class="core-box purchasing">                                    
                                        <div class="img-box">
                                            <a href="#" data-toggle="modal" data-target="#purchasingModal">
                                                <img src="assets/images/purchasing.png">
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="" class="core-title" data-toggle="modal" data-target="#purchasingModal">Purchasing</a>
                                            <i class="fas fa-exclamation-circle"></i>                      
                                        </div>                 
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="purchasingModal" tabindex="-1" aria-labelledby="purchasingModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="bg-circle d-flex align-items-center justify-content-center">
                                                <img src="assets/images/info.png">
                                            </div>
                                            <h5>Expand your account</h5>
                                            <p>You need to expand your account to <b>Purchasing options</b> in order to continue with those features</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary w-25 p-2">OK</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--end modal-->

                                    <div class="core-box analytics">                                    
                                        <div class="img-box">
                                            <a href="#">
                                                <img src="assets/images/analytics.png">
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="" class="core-title" data-toggle="modal" data-target="#">Analytics</a>
                                            <i class="fas fa-exclamation-circle"></i>                      
                                        </div>                                                                                    
                                    </div>
                                </div>
                                <!--menu health-->
                                <div class="menu-health">
                                    <div class="generic-box">
                                        <h3>Menu Health</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="assets/images/stats.png" class="mr-1">
                                                    Menu Item
                                                </div>
                                                <div class="value">125</div>
                                            </div>

                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="assets/images/stats.png" class="mr-1">
                                                    Recipe
                                                </div>
                                                <div class="value">174</div>
                                            </div>
                                            
                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="assets/images/stats.png" class="mr-1">
                                                    Sub-Recipe
                                                </div>
                                                <div class="value">56</div>
                                            </div>
                                            
                                            <!--item-->
                                            <div class="health-box">
                                                <div class="d-flex align-items-center mb-1">
                                                    <img src="assets/images/stats.png" class="mr-1">
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
                                <div id="outlet-data-sync">
                                    <div class="generic-box">
                                        <h3>Outlet Data Sync</h3>   
                                        <h4>DATA FROM OUTLET POS</h4>
                                        <p>Status of POS data sync from each outlet</p>
                                        <div id="outlet-status">
                                            <div class="outlet-box inactive">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="location">
                                                        <label>Salcedo</label>
                                                        <small>Active as of Aug. 9, 2021 9:04PM</small>
                                                    </div>
                                                    <div class="status">Inactive</div>
                                                </div>
                                            </div>
                                            <!--outlet 2-->
                                            <div class="outlet-box active">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="location">
                                                        <label>Greenbelt</label>
                                                        <small>Active as of Aug. 9, 2021 9:04PM</small>
                                                    </div>
                                                    <div class="status active">Active</div>
                                                </div>
                                            </div>
                                            <div class="outlet-box no-data">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="location">
                                                        <label>Podium</label>
                                                        <small>Active as of Aug. 9, 2021 9:04PM</small>
                                                    </div>
                                                    <div class="status no-data">No Data</div>
                                                </div>
                                            </div>
                                            <div class="outlet-box no-data">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="location">
                                                        <label>Podium</label>
                                                        <small>Active as of Aug. 9, 2021 9:04PM</small>
                                                    </div>
                                                    <div class="status no-data">No Data</div>
                                                </div>
                                            </div>
                                            <div class="outlet-box no-data">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="location">
                                                        <label>Podium</label>
                                                        <small>Active as of Aug. 9, 2021 9:04PM</small>
                                                    </div>
                                                    <div class="status no-data">No Data</div>
                                                </div>
                                            </div>  
                                            <!--end-->
                                        </div>    
                                        <div id="all-status" class="text-center">                                
                                            <a href="">See All</a>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include('includes/db-footer.php'); ?>