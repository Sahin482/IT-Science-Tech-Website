﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Admin">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Admin</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="dashboard.php"><img class="img-fluid" src="" alt="">Admin</a></div>
            <div class="dark-logo-wrapper"><a href="dashboard.php"><img class="img-fluid" src="dashboard.php" alt="">Admin</a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="http://localhost/IT/Homes.php"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="dashboard.php">
              <h6 class="mt-3 f-14 f-w-600">Admin</h6></a>
            <!-- <p class="mb-0 font-roboto">Human Resources Department</p> -->
            <!-- <ul>
              <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
              </li>
              <li><span>2 year</span>
                <p>Experince</p>
              </li>
              <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
              </li>
            </ul> -->
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <!-- <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li> -->
                  <a class="nav-link menu-title" href="support_show.php"></i><span>Support</span></a>
                  <a class="nav-link menu-title" href="course_reg.php"></i><span>Course</span></a>
              </ul> 
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body dashboard-2-main">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 box-col-12 des-xl-100 invoice-sec">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top d-sm-flex justify-content-between align-items-center">
                      <h5>Invoice Overview    </h5>
                      <div class="center-content">                                                               
                        <p class="d-sm-flex align-items-center"><span class="m-r-10">$5,56548k</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>94% More Than Last Year</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="timeline-chart"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#invoice-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="invoice-overview">&lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
   &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
     &lt;h5&gt;Invoice Overview &lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p class="d-sm-flex align-items-center"&gt;
         &lt;span class="m-r-10"&gt;$5,56548k&lt;/span&gt;
           &lt;i class="toprightarrow-primary fa fa-arrow-up m-r-10"&gt;&lt;/i&gt;94% More Than Last Year
       &lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body p-0"&gt;
   &lt;div id="timeline-chart"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 box-col-12 des-xl-100 top-dealer-sec">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="header-top d-sm-flex justify-content-between align-items-center">
                      <h5>Our Top Clients</h5>
                      <div class="center-content">                                  
                        <p class="d-sm-flex align-items-center"><span class="m-r-10">845 Clients</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More Than Last Year</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="owl-carousel owl-theme" id="owl-carousel-14">
                      <div class="item">
                        <div class="row">
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/01.png" alt="...">
                                    <h6>Mizanur Rhaman</h6>
                                    <p>Bangladesh</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/03.png" alt="...">
                                    <h6>Mr. Rahat</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.jpg" alt="...">
                                    <h6>Mithun</h6>
                                    <p>Belgium</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                                    <h6> Jones king</h6>
                                    <p>Canada</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                                    <h6>Brown davis</h6>
                                    <p>China</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                                    <h6>Wilson Hill</h6>
                                    <p>Denmark</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                                    <h6>Anderson ban</h6>
                                    <p>Japan</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row">
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Johnson allon</h6>
                                    <p>Bangladesh</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                                    <h6>williams reed</h6>
                                    <p>Belgium</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                                    <h6> Jones king</h6>
                                    <p>Canada</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                                    <h6>Brown davis</h6>
                                    <p>China</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                                    <h6>Wilson Hill</h6>
                                    <p>Denmark</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                                    <h6>Anderson ban</h6>
                                    <p>Japan</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row">
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Johnson allon</h6>
                                    <p>Bangladesh</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                                    <h6>williams reed</h6>
                                    <p>Belgium</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                                    <h6> Jones king</h6>
                                    <p>Canada</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                                    <h6>Brown davis</h6>
                                    <p>China</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                                    <h6>Wilson Hill</h6>
                                    <p>Denmark</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                                    <h6>Anderson ban</h6>
                                    <p>Japan</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row">
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Johnson allon</h6>
                                    <p>Bangladesh</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                                    <h6>williams reed</h6>
                                    <p>Belgium</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                                    <h6> Jones king</h6>
                                    <p>Canada</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                                    <h6>Brown davis</h6>
                                    <p>China</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                                    <h6>Wilson Hill</h6>
                                    <p>Denmark</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                                    <h6>Anderson ban</h6>
                                    <p>Japan</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="card">
                                  <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                                    <h6>Thompson lee</h6>
                                    <p>Malasiya</p><a class="btn btn-rounded" href="social-app.html">View More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#top-dealer" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="top-dealer">&lt;div class="card"&gt;
 &lt;div class="card-header pb-0"&gt;
   &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
       &lt;h5&gt;Top Dealer&lt;/h5&gt;
       &lt;div class="center-content"&gt; 
         &lt;p class="d-sm-flex align-items-center"&gt;&lt;span class="m-r-10"&gt;845 Dealer&lt;/span&gt;&lt;i class="toprightarrow-primary fa fa-arrow-up m-r-10"&gt;&lt;/i&gt;86% More Than Last Year&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="setting-list"&gt;
           &lt;ul class="list-unstyled setting-option"&gt;
             &lt;li&gt;
               &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;/li&gt;
             &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
            &lt;/ul&gt;
       &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
     &lt;div id="owl-carousel-14" class="owl-carousel owl-theme"&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-md- des-xl-100 box-col-12">
                <div class="row">
                  <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                      <div class="card-body align-items-center">
                        <div class="round-progress knob-block text-center">
                          <div class="progress-circle">
                            <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d" data-bgcolor="#e0e9ea" value="60">
                          </div>
                          <h5>$9,84,235</h5>
                          <p>Our Annual Income</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right second">
                    <div class="card income-card card-primary">
                      <div class="card-body">
                        <div class="round-progress knob-block text-center">
                          <div class="progress-circle">
                            <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#24695c" data-linecap="round" data-angleoffset="0" value="60">
                          </div>
                          <h5>$4,55,462</h5>
                          <p>Our Annual Income</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6 top-sell-sec">
                    <div class="card">
                      <div class="card-header pb-0">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                          <h5>Top Selling Product</h5>
                          <div class="center-content">
                            <ul class="week-date">
                              <li class="font-primary">Today</li>
                              <li>Month</li>
                            </ul>
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"></i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="media"><img class="img-fluid" src="../assets/images/dashboard-2/10.jpg" alt="">
                          <div class="media-body"><a href="product-page.html">
                              <h6>Trending Products</h6></a>
                            <p>New Offer Only $126.00</p>
                            <ul class="rating-star">
                              <li>                                      <i class="fa fa-star"></i></li>
                              <li>                                      <i class="fa fa-star"></i></li>
                              <li>                                      <i class="fa fa-star"></i></li>
                              <li>                                      <i class="fa fa-star"></i></li>
                              <li>                                      <i class="fa fa-star"></i></li>
                            </ul>
                          </div><a class="btn btn-iconsolid" href="cart.html"><i class="icon-bag"></i></a>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#top-selling-product" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="top-selling-product">&lt;div class="card"&gt;
   &lt;div class="card-header pb-0"&gt;
     &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
       &lt;h5&gt;Top Selling Product&lt;/h5&gt;
       &lt;div class="center-content"&gt;
         &lt;ul class="week-date"&gt;
           &lt;li class="font-primary"&gt;Today&lt;/li&gt;
           &lt;li&gt;Month&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="card-body"&gt;
     &lt;div class="media"&gt;&lt;img class="img-fluid" alt="" src="../assets/images/dashboard-2/9.png"&gt;
       &lt;div class="media-body"&gt;
         &lt;h6&gt;Trending Nike shoes&lt;/h6&gt;
         &lt;p&gt;New Offer Only $126.00&lt;/p&gt;
         &lt;ul class="rating-star"&gt;
           &lt;li&gt; &lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt; &lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt; &lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt; &lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt; &lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
       &lt;a class="btn btn-iconsolid" href="javascript:void(0)"&gt;&lt;i class="icon-bag"&gt;&lt;/i&gt;&lt;/a&gt;
     &lt;/div&gt; 
&lt;/div&gt;                                                </code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6">
                    <div class="card">
                      <div class="card-header">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                          <h5>Total Selling</h5>
                          <div class="center-content">
                            <ul class="week-date">
                              <li class="font-primary">Today</li>
                              <li>Month                                     </li>
                            </ul>
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"></i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body chart-block p-0">
                        <div id="chart-dash-2-line"></div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#total-selling" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="total-selling">  &lt;div class="card"&gt;
   &lt;div class="card-header pb-0"&gt;
     &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
       &lt;h5&gt;Total Selling&lt;/h5&gt;
       &lt;div class="center-content"&gt;
         &lt;ul class="week-date"&gt;
           &lt;li class="font-primary"&gt;Today&lt;/li&gt;
           &lt;li&gt;Month&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="card-body"&gt;
      &lt;div id="chart-dash-2-line"&gt;
      &lt;/div&gt;
   &lt;/div&gt; 
&lt;/div&gt;        </code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6">
                    <div class="card target-sec">
                      <div class="card-header pb-0">                                     
                        <ul class="target-list">
                          <li>                                        
                            <h6>Our Target</h6>
                            <p>Completed</p><span>$687.780</span>
                          </li>
                          <li class="bg-primary">
                            <h6>We Archieve</h6>
                            <p>Completed in After 3 Hours</p><span>$687.780k                                     </span>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body p-0">
                        <div class="traget-img-sec"></div>
                        <div class="animat-block"><i class="fa fa-times close1"></i><i class="fa fa-times close2"></i><i class="fa fa-times close3"></i>
                          <div class="circle1"></div>
                          <div class="circle2"></div>
                          <div class="circle3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 des-xl-50 box-col-12 activity-sec chart_data_left">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top d-sm-flex justify-content-between align-items-center">
                      <h5 class="m-0">Activity Timeline</h5>
                      <div class="center-content">
                        <p>Yearly User 24.65k</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-main activity-timeline update-line">
                      <div class="media">
                        <div class="activity-line"></div>
                        <div class="activity-dot-primary"></div>
                        <div class="media-body d-block">
                          <h6> <span class="font-primary">23-01-2024</span>Today </h6>
                          <h5>Updated Product<i class="fa fa-circle circle-dot-primary pull-right"></i></h5>
                          <p>Quisque a consequat ante Sit amet magna at volutapt.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body d-block">
                          <h6> <span class="font-primary">02-01-20124</span>Today<span class="badge pill-badge-primary m-l-10">new                                           </span></h6>
                          <h5>James just like your product     <i class="fa fa-circle circle-dot-primary pull-right"></i></h5>
                          <p>Great Product.</p>
                          <ul class="timeline-pro">
                            <li>                                            <img class="img-fluid" src="../assets/images/dashboard-2/11.jpg" alt="Product-1"></li>
                            <li>                                        <img class="img-fluid" src="../assets/images/dashboard-2/10.jpg" alt="Product-2"></li>
                          </ul>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body d-block">
                          <h6> <span class="font-primary">22-01-20124</span>Today</h6>
                          <h5>Jihan Doe just like your product<i class="fa fa-circle circle-dot-primary pull-right"></i></h5>
                          <p>Thanks for support.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-body d-block">
                          <div class="tomorrow-sec">
                            <p>Tomorrow</p>
                          </div>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body d-block">
                          <h6> <span class="font-primary">23-01-2024</span>Tomorrow</h6>
                          <h5>Today Total  Revenue<i class="fa fa-circle circle-dot-primary pull-right"></i></h5>
                          <p>Comming Soon..</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body d-block">                                         
                          <div class="hospital-small-chart">
                            <div id="column-chart">                                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#activity-timeline" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="activity-timeline">   &lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
   &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
     &lt;h5 class="m-0"&gt;Activity Timeline&lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p&gt;Yearly User 24.65k&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
           &lt;li&gt;
             &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
           &lt;/li&gt;
           &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
   &lt;div class="chart-main activity-timeline update-line"&gt;
     &lt;div class="media"&gt;
       &lt;div class="activity-line"&gt;&lt;/div&gt;
       &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
       &lt;div class="media-body d-block"&gt;
         &lt;h6&gt; &lt;span class="font-primary"&gt;20-04-2021&lt;/span&gt;Today &lt;/h6&gt;
         &lt;h5&gt;Updated Product&lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;&lt;/h5&gt;
         &lt;p&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="media"&gt;
       &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
         &lt;div class="media-body d-block"&gt;
           &lt;h6&gt; &lt;span class="font-primary"&gt;20-04-20121&lt;/span&gt;Today&lt;span class="badge pill-badge-primary m-l-10"&gt;new &lt;/span&gt;&lt;/h6&gt;
           &lt;h5&gt;James just like your product &lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;&lt;/h5&gt;
           &lt;p&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
           &lt;ul class="timeline-pro"&gt;
             &lt;li&gt; &lt;img class="img-fluid" src="../assets/images/dashboard-2/11.png" alt="Product-1"&gt;&lt;/li&gt;
             &lt;li&gt; &lt;img class="img-fluid" src="../assets/images/dashboard-2/10.png" alt="Product-2"&gt;&lt;/li&gt;
           &lt;/ul&gt;
         &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="media"&gt;
         &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
           &lt;div class="media-body d-block"&gt;
             &lt;h6&gt; &lt;span class="font-primary"&gt;20-04-20121&lt;/span&gt;Today&lt;/h6&gt;
             &lt;h5&gt;Jihan Doe just like your product&lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;&lt;/h5&gt;
             &lt;p&gt;Vestibulum nec mi suscipit, dapibus purus ane.&lt;/p&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="media"&gt;
             &lt;div class="media-body d-block"&gt;
               &lt;div class="tomorrow-sec"&gt;
                 &lt;p&gt;Tomorrow&lt;/p&gt;
               &lt;/div&gt;
             &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="media"&gt;
           &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
           &lt;div class="media-body d-block"&gt;
             &lt;h6&gt; &lt;span class="font-primary"&gt;20-04-20121&lt;/span&gt;Tomorrow&lt;/h6&gt;
             &lt;h5&gt;Today Total Revenue&lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;&lt;/h5&gt;
             &lt;p&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="media"&gt;
             &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
               &lt;div class="media-body d-block"&gt;
                 &lt;div class="hospital-small-chart"&gt;
                   &lt;div id="column-chart"&gt; &lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 des-xl-50 yearly-growth-sec">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top d-sm-flex justify-content-between align-items-center">
                      <h5>Yearly growth</h5>
                      <div class="center-content">                                  
                        <p class="d-sm-flex align-items-center"><span class="m-r-10"><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>$9657.55k </span>86% more then last year</p>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0 chart-block">
                    <div id="chart-yearly-growth-dash-2"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#yearly-growth" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="yearly-growth">  &lt;div class="card"&gt;
   &lt;div class="card-header pb-0"&gt;
     &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
       &lt;h5&gt;Yearly growth&lt;/h5&gt;
       &lt;div class="center-content"&gt;
             &lt;p class="d-sm-flex align-items-center"&gt;
                &lt;span class="m-r-10"&gt;
                  &lt;i class=" toprightarrow-primary fa fa-arrow-up m-r-10"&gt;&lt;/i&gt;  $9657.55k
                &lt;/span&gt; 86% more then last year
            &lt;/p&gt;
         &lt;/div&gt;                                             
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="card-body p-0 chart-block"&gt;
      &lt;div id="chart-yearly-growth-dash-2"&gt;
      &lt;/div&gt;
   &lt;/div&gt; 
&lt;/div&gt;        </code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2024 © IT All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/chart/chartjs/chart.min.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/owlcarousel/owl-custom.js"></script>
    <script src="../assets/js/dashboard/dashboard_2.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>