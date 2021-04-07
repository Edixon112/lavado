<!DOCTYPE html>  
<html>  
<head>   <title>auto lavado</title>  
</head>  
<body>  
<!DOCTYPE html>
<html lang="zxx">
   
<!-- Mirrored from colorlib.net/metrical/light/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 21:19:24 GMT -->
<head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>DataTable | Metrical - Multipurpose Admin Dashboard Template</title>
      <!-- Main CSS -->			
      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/extensions/dataTables.jqueryui.min.css">
      <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css">
      <!-- Favicon -->	
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <div class="page-sidebar">
            <div class="logo">
               <a class="logo-img" href="index.php?">		
               <img class="desktop-logo" src="assets/images/logo.png" alt="">
               <img class="small-logo" src="assets/images/small-logo.png" alt="">
               </a>			
               <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            <div class="page-sidebar-inner">
               <div class="page-sidebar-menu">
                  <ul class="accordion-menu">
                     <li>
                        <a href="extraerdatosestudiante.php"><i data-feather="home"></i>
                        <span>Menu Autolavado</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="index.php?view=addvehiculo">añadir vehiculo</a></li>
                           <li><a href="index.php?view=addcliente">añadir cliente</a></li>
                           <li><a href="index.php?view=viewvehiculo">ver vehiculo</a></li>
                           <li><a href="index.php?view=viewcliente">ver cliente</a></li>
                           <li><a href="index.php?view=addlavado">añadir lavado</a></li>
                           <li><a href="index.php?view=viewlavado">ver lavado</a></li>
                       
                        </ul>
                     </li>
                     
                     
                  </ul>
               </div>
            </div>
            <!--/ Sidebar Menu End -->
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <!--================================-->
            <div class="sidebar-footer">									
               <a class="pull-left" href="page-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
               <i data-feather="user" class="ht-15"></i></a>									
               <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
               <i data-feather="mail" class="ht-15"></i></a>
               <a class="pull-left" href="page-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
               <i data-feather="lock" class="ht-15"></i></a>
               <a class="pull-left" href="page-singin.html" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
               <i data-feather="log-out" class="ht-15"></i></a>
            </div>
            <!--/ Sidebar Footer End -->
         </div>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
               <div class="search-form">
                  <form action="#" method="GET">
                     <div class="input-group">
                        <input class="form-control search-input" name="search" placeholder="Type something..." type="text"/>
                        <span class="input-group-btn">
                        <span id="close-search"><i class="ion-ios-close-empty"></i></span>
                        </span>
                     </div>
                  </form>
               </div>
               <!--================================-->
               <!-- Page Header  Start -->
               <!--================================-->
               <nav class="navbar navbar-expand-lg">
                  <ul class="list-inline list-unstyled mg-r-20">
                     <!-- Mobile Toggle and Logo -->
                     <li class="list-inline-item align-text-top"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                     <!-- PC Toggle and Logo -->
                     <li class="list-inline-item align-text-top"><a class="hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                  </ul>
                  <!--================================-->
                  <!-- Mega Menu Start -->
                  <!--================================-->
                  <div class="collapse navbar-collapse">
                     <ul class="navbar-nav mr-auto">
                        <!-- Features -->
                        
                        <!-- Technology -->
                       
                        <!-- Ecommerce -->
                       
                     </ul>
                  </div>
                  <!--/ Mega Menu End-->
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <div class="header-right pull-right">
                     <ul class="list-inline justify-content-end">
                        <li class="list-inline-item align-middle"><a  href="#" id="search-button"><i class="ion-ios-search-strong tx-20"></i></a></li>
                        <!--================================-->
                        <!-- Languages Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item align-middle dropdown hidden-xs">
                           <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="flag-icon flag-icon-us"></i>
                           </a>
                           <ul class="dropdown-menu languages-dropdown shadow-2">
                              <li>
                                 <a href="#" data-lang="en"><i class="flag-icon flag-icon-us mr-2"></i><span>English-US</span></a>
                              </li>
                              <li>
                                 <a href="#" data-lang="es"><i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span></a>
                              </li>
                              <li>
                                 <a href="#" data-lang="fr"><i class="flag-icon flag-icon-fr mr-2"></i><span>French</span></a>
                              </li>
                              <li>
                                 <a href="#" data-lang="gr"><i class="flag-icon flag-icon-de mr-2"></i><span>German</span></a>
                              </li>
                              <li>
                                 <a href="#" data-lang="ru"><i class="flag-icon flag-icon-ru mr-2"></i><span>Russian</span></a>
                              </li>
                              <li>
                                 <a href="#" data-lang="ru"><i class="flag-icon flag-icon-gb mr-2"></i><span>English-UK</span></a>
                              </li>
                           </ul>
                        </li>
                        <!--/ Languages Dropdown End -->
                        <!--================================-->
                        <!-- Notifications Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="notification-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-bell tx-16"></i>
                           <span class="notification-count wave in"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right shadow-2">
                              <!-- Top Notifications Area -->
                              <div class="top-notifications-area">
                                 <!-- Heading -->
                                 <div class="notifications-heading">
                                    <div class="heading-title">
                                       <h6>Notifications</h6>
                                    </div>
                                    <span>5+ New Notifications</span>
                                 </div>
                                 <div class="notifications-box" id="notificationsBox">
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i class="fa fa-smile-o tx-success tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Your order is placed</span>
                                             <span class="small tx-gray-600 ft-right">Jun 10</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                             <i class="fa fa-bell tx-warning tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Your item is shipped</span>
                                             <span class="small tx-gray-600 ft-right">Jun 05</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i class="fa fa-check tx-success tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New Message received</span>
                                             <span class="small tx-gray-600 ft-right">Jun 02</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-danger">
                                             <i class="fa fa-heartbeat tx-danger tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Payment failed!</span>
                                             <span class="small tx-gray-600 ft-right">May 29</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i class="fa fa-info tx-info tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New document available</span>
                                             <span class="small tx-gray-600 ft-right">May 25</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i class="fa fa-info tx-info tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New document available</span>
                                             <span class="small tx-gray-600 ft-right">May 08</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="notifications-footer">
                                    <a href="#">View all Notifications</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--/ Notifications Dropdown End -->
                        <!--================================-->
                        <!-- Messages Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="message-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-envelope tx-16"></i>
                           <span class="messages-count wave in"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right shadow-2">
                              <div class="top-message-area">
                                 <div class="top-message-heading">
                                    <div class="heading-title">
                                       <h6>Messages</h6>
                                    </div>
                                    <span>5+ New Messages</span>
                                 </div>
                                 <div class="message-box" id="messageBox">
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-online">
                                             <img src="assets/images/avatar/avatar1.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Mary Adams</span>
                                             <span class="small tx-gray-600 ft-right">30 minutes ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-online">
                                             <img src="assets/images/avatar/avatar2.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Richards Caleb</span>
                                             <span class="small tx-gray-600 ft-right">12 hours ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-busy">
                                             <img src="assets/images/avatar/avatar3.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Lane Richards</span>
                                             <span class="small tx-gray-600 ft-right">2 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-busy">
                                             <img src="assets/images/avatar/avatar4.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Edward Lane</span>
                                             <span class="small tx-gray-600 ft-right">3 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-offline">
                                             <img src="assets/images/avatar/avatar5.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Lane Richards</span>
                                             <span class="small tx-gray-600 ft-right">2 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-offline">
                                             <img src="assets/images/avatar/avatar6.png" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Edward Lane</span>
                                             <span class="small tx-gray-600 ft-right">3 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="top-message-footer">
                                    <a href="#">View all Messages</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--/ Messages Dropdown End -->
                        <!--================================-->
                        <!-- Profile Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown">
                           <a  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="select-profile">Hi, John!</span>
                           <img src="assets/images/avatar/avatar1.png" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                           </a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-profile shadow-2">
                              <div class="user-profile-area">
                                 <div class="user-profile-heading">
                                    <div class="profile-thumbnail">
                                       <img src="assets/images/avatar/avatar1.png" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                    </div>
                                    <div class="profile-text">
                                       <h6>John Deo</h6>
                                       <span>email@example.com</span>
                                    </div>
                                 </div>
                                 <a href="#" class="dropdown-item"><i class="icon-user" aria-hidden="true"></i> My profile</a>
                                 <a href="#" class="dropdown-item"><i class="icon-envelope" aria-hidden="true"></i> Messages <span class="badge badge-success ft-right mg-t-3">10+</span></a>
                                 <a href="#" class="dropdown-item"><i class="icon-settings" aria-hidden="true"></i> settings</a>
                                 <a href="#" class="dropdown-item"><i class="icon-share" aria-hidden="true"></i> My Activity <span class="badge badge-warning ft-right mg-t-3">5+</span></a>
                                 <a href="#" class="dropdown-item"><i class="icon-cloud-download" aria-hidden="true"></i> My Download <span class="badge badge-success ft-right mg-t-3">10+</span></a>
                                 <a href="#" class="dropdown-item"><i class="icon-heart" aria-hidden="true"></i> Support</a>
                                 <a href="page-singin.html" class="dropdown-item"><i class="icon-power" aria-hidden="true"></i> Sign-out</a>
                              </div>
                           </div>
                        </li>
                        <!-- Profile Dropdown End -->
                        <!--================================-->
                        <!-- Setting Sidebar Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="settings-icon" id="settingSidebarTrigger" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-settings tx-16"></i>
                           </a>					   
                        </li>
                        <!--/ Setting Sidebar End -->
                     </ul>
                  </div>
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!--================================-->
               <!-- Main Wrapper Start -->
               <!--==============LAS LLAMADAS A LOS DEMAS==================-->
               		
                <?php   View::load("addvehiculo"); ?>

               <!--/ Main Wrapper End -->
               </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->	
            <!--================================-->
            <footer class="page-footer">
               <div class="pd-t-4 pd-b-0 pd-x-20">
                  <div class="tx-10 tx-uppercase">
                     <p class="pd-y-10 mb-0">Copyright&copy; 2019 | All rights reserved. | Created By <a href="http://themeforest.net/user/colorlibcode" target="_blank">ColorlibCode</a></p>
                  </div>
               </div>
            </footer>
            <!--/ Page Footer End -->
         </div>
         <!--/ Page Content End  -->
      </div>
      <!--/ Page Container End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End -->
      <!--================================-->
      <!-- Setting Sidebar Start -->
      <!--================================-->	  
      <div class="setting-sidebar"  id="settingSidebar">
         <div class="wrapper"   id="settingSidebarScroll">
            <ul class="nav nav-tabs nav-pills nav-fill">
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-notifications">Notifications</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#nav-activity">Activity</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-setting">Setting</a>
               </li>
            </ul>
            <!-- Notification -->
            <div class="tab-content">
               <div class="tab-pane fade" id="nav-notifications">
                  <div class="card-activities mg-t-40-force">
                     <div class="media-list">
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-primary op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-success op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-purple op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-danger op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-warning op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-purple op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-danger op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-warning op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-teal op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Activity -->
               <div class="tab-pane fade active show" id="nav-activity">
                  <div class="activity mg-t-40-force">
                     <i class="icon-check bg-soft-primary"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task finished</h6>
                              <span class="small">02 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-teal"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Video conference</h6>
                              <span class="small">04 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-warning"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">06 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-danger"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Added your friend list</h6>
                              <span class="small">07 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-success"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">09 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-primary"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Submit a blog</h6>
                              <span class="small">11 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-teal"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">New Request</h6>
                              <span class="small">12 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-warning"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">19 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Setting -->
               <div class="tab-pane fade" id="nav-setting">
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-30">Notification Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Notify when receive email</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary">
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Update on task completion</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Files uploaded successfully</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">File Sharing Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Notify when receive email</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Update on task completion</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Files uploaded successfully</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">Reports Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Generate Reports</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Enable Report Export</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Allow Data Collection</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">System Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Automatic updates</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Current statistics</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>User suggestions</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!--/ Setting Sidebar End  -->      
      <!--================================-->
      <!-- Demo Sidebar Start -->
      <!--================================-->	  
      <div class="setting-sidebar" id="demoSettingSidebar">
         <div class="wrapper" id="demoSettingSidebarScroll">
            <a class="demo-settings-icon" id="demoSettingSidebarTrigger" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-settings tx-16"></i>
            </a>	
            <ul class="nav nav-tabs nav-pills nav-fill">
               <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#nav-dashboard">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-frontend">Frontend</a>
               </li>
            </ul>
            <!-- Backend Dashboard -->
            <div class="tab-content">
               <div class="tab-pane fade active show" id="nav-dashboard">
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Default Version</h5>
                     <img src="assets/images/demo/dashboard/index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Semi-Dark Version</h5>
                     <img src="assets/images/demo/dashboard/dark-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/semi-dark/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Dark Version</h5>
                     <img src="assets/images/demo/dashboard/full-dark-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/dark/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Boxed Version</h5>
                     <img src="assets/images/demo/dashboard/boxed-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/boxed/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30">						
                     <a href="http://themeforest.net/item/metrical-multipurpose-bootstrap4-admin-dashboard-template/24250418" target="_blank" class="btn btn-lg btn-primary btn-block">Download Now</a>
                  </div>
               </div>
               <!-- Frontend Templates -->
               <div class="tab-pane fade" id="nav-frontend">
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Ecommerce</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/ecommerce/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Cryptocurrency</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/cryptocurrency/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Helpdesk Center</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/helpdesk/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Project Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/project/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Server Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/server/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Education</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/education/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Event Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/event/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Social Activity</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/social/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30">						
                     <a href="http://themeforest.net/item/metrical-multipurpose-bootstrap4-admin-dashboard-template/24250418" target="_blank" class="btn btn-lg btn-primary btn-block">Download Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ Demo Sidebar End  -->
      <!--================================-->
      <!-- Footer Script -->
      <!--================================-->
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/feather-icon/feather.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/plugins/datatables/responsive/dataTables.responsive.js"></script>
      <script src="assets/plugins/datatables/extensions/dataTables.jqueryui.min.js"></script>
      <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="assets/js/highlight.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script>
         // Basic DataTable	
          $('#basicDataTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // No Style DataTable	
          $('#noStyleedTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Cell Border DataTable	
          $('#cellBorder').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Compact DataTable	
          $('#compactTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Hoverable DataTable	
          $('#hoverTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Hoverable DataTable	
          $('#orderActiveTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	},
         	"order": [[ 1, "desc" ]]
           });
         
         // Scrollable Table DataTable	
          $('#scrollableTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	},
         	"order": [[ 1, "desc" ]],
         	"scrollY":        "250px",
         	"scrollCollapse": true,
         	"paging":         false
           });
      </script>
      <script type="text/javascript">
        

        $(document).ready(function () {
      $('#dtHorizontalVerticalExample').DataTable({
        
        
      "scrollX": true,
      "scrollY": 450,
      "order": [[ 0, "desc" ]]
      });
      $('.dataTables_length').addClass('bs-select');
      });
  </script>
  
   </body>

<!-- Mirrored from colorlib.net/metrical/light/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 21:19:25 GMT -->
</html>

</body>  
</html>