<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Documentation</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="../template/assets/vendors/codemirror/codemirror.css"
    />
    <link
      rel="stylesheet"
      href="../template/assets/vendors/codemirror/ambiance.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/theme/dracula.min.css"
    />
    <link
      rel="stylesheet"
      href="../template/assets/vendors/pwstabs/jquery.pwstabs.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container-fluid documentation">
      <div class="row">
        <div class="col-md-3 col-xl-2 left-sidebar">
          <div class="logo-wrapper">
            <a href="../template/index.html">
              <img src="../template/assets/images/logo.svg" alt="logo" />
            </a>
          </div>
          <h5 class="left-menu-title">Documentation</h5>
          <ul class="left-menu">
            <li><a href="#introduction"> Introduction </a></li>
            <li><a href="#getting-started"> Getting started </a></li>
            <li><a href="#basic-structure"> Basic structure </a></li>
          </ul>
          <h5 class="left-menu-title">Components</h5>
          <ul class="left-menu">
            <li><a href="#basic-ui"> Basic UI Elements </a></li>
            <li><a href="#tables"> Tables </a></li>
            <li><a href="#charts"> Charts </a></li>
            <li><a href="#forms"> Forms </a></li>
            <li><a href="#icons"> Icons </a></li>
          </ul>
          <a
            class="d-block mt-4 text-muted"
            target="_blank"
            href="../../admin"
            >Go to Home</a
          >
        </div>
        <div class="col-md-9 col-xl-10 main-panel bg-white">
          <div class="main-panel-wrapper">
            <div class="row">
              <div class="col-12 mb-4">
                <h2
                  class="mt-2 text-center font-weight-light text-muted text-uppercase"
                >
                  Documentation
                </h2>
              </div>
              <div class="col-12 grid-margin" id="introduction">
                <div class="card">
                  <div class="card-body">
                    <h3 class="mb-4">Introduction</h3>
                    <p>
                      Breeze-free is a responsive HTML template that is based on
                      the CSS framework Bootstrap 4 and it is built with Sass.
                      Sass compiler makes it easier to code and customize. If
                      you are unfamiliar with Bootstrap or Sass, visit their
                      website and read through the documentation. All of
                      Bootstrap components have been modified to fit the style
                      of Breeze-free and provide a consistent look throughout
                      the template.
                    </p>
                    <p>
                      Before you start working with the template, we suggest you
                      go through the pages that are bundled with the theme. Most
                      of the template example pages contain quick tips on how to
                      create or use a component which can be really helpful when
                      you need to create something on the fly.
                    </p>
                    <p class="d-inline">
                      <strong>Note</strong>: We are trying our best to document
                      how to use the template. If you think that something is
                      missing from the documentation, please do not hesitate to
                      tell us about it. If you have any questions or issues
                      regarding this theme please use Envato support form on our
                      profile or email us at
                      <a
                        class="d-inline text-info"
                        href="mailto:support@bootstrapdash.com"
                        >support@bootstrapdash.com</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin" id="getting-started">
                <div class="card">
                  <div class="card-body">
                    <h3 class="mb-4">Getting started</h3>
                    <p>
                      You can directly use the compiled and ready-to-use the
                      version of the template. But in case you plan to customize
                      the template extensively the template allows you to do so.
                    </p>
                    <p>
                      Within the download you'll find the following directories
                      and files, logically grouping common assets and providing
                      both compiled and minified variations:
                    </p>
                    <textarea class="shell-mode">
Breeze-free/
├ jquery/
  ├ documentation/
  ├ template/
      ├ assets/
          ├ css/
          ├ fonts/
          ├ images/
          ├ js/
          ├ scss/
          ├ vendors/
      ├ pages/
      ├ gulp-tasks/
      ├ partials/
      ├ index.html
      ├ package.json
  ├ CHANGELOG.md</textarea
                    >
                    <p class="mt-1">
                      Note: The root folder denoted further in this
                      documentation refers to the 'template' folder inside the
                      downloaded folder
                    </p>
                    <div
                      class="alert alert-success mt-4 d-flex align-items-center"
                      role="alert"
                    >
                      <i class="ti-info-alt"></i>
                      <p>
                        We have bundled up the vendor files needed for demo
                        purpose into a folder 'vendors', you may not need all
                        those vendors in your application. If you want to make
                        any change in the vendor package files, you need to
                        change the src path for related tasks in the file
                        gulpfile.js and run the task
                        <code>bundleVendors</code> to rebuild the vendor files.
                      </p>
                    </div>
                    <hr class="mt-5" />
                    <h4 class="mt-4">Installation</h4>
                    <p class="mb-0">
                      You need to install package files/Dependencies for this
                      project if you want to customize it. To do this, you must
                      have
                      <span class="font-weight-bold">node and npm</span>
                      installed in your computer.
                    </p>
                    <p class="mb-0">
                      Installation guide of the node can be found
                      <a href="https://nodejs.org/en/" target="_blank">here</a>.
                      As npm comes bundled with a node, a separate installation
                      of npm is not needed.
                    </p>
                    <p>
                      If you have installed them, just go to the root folder and
                      run the following command in your command prompt or
                      terminal (for the mac users).
                    </p>
                    <textarea class="shell-mode">  npm install</textarea>
                    <p class="mt-4">
                      This will install the dev dependencies in the local
                      <span class="font-weight-bold">node_modules</span> folder
                      in your root directory.
                    </p>
                    <p class="mt-2">
                      Then you will need to install
                      <span class="font-weight-bold">Gulp</span>. We use the
                      Gulp task manager for the development processes. Gulp will
                      watch for changes to the SCSS files and automatically
                      compile the files to CSS.
                    </p>
                    <p>
                      Getting started with Gulp is pretty simple. The
                      <a href="https://gulpjs.com/" target="_blank">Gulp</a>
                      site is a great place to get information on installing
                      Gulp if you need more information. You need to first
                      install Gulp-cli in your machine using the below command.
                    </p>
                    <textarea class="shell-mode">
  npm install -g gulp-cli</textarea
                    >
                    <p class="mt-4">
                      This installs Gulp-cli globally to your machine. The other
                      thing that Gulp requires, which, is really what does all
                      the work, is the gulpfile.js. In this file, you set up all
                      of your tasks that you will run.
                    </p>
                    <p>
                      Don't worry. We have this file already created for you!
                    </p>
                    <p>
                      To run this project in development mode enter the
                      following command below. This will start the file watch by
                      gulp and whenever a file is modified, the SCSS files will
                      be compiled to create the CSS file.
                    </p>
                    <textarea class="shell-mode">  gulp serve</textarea>
                    <div class="alert alert-warning mt-4" role="alert">
                      <i class="ti-info-alt-outline"></i>It is important to run
                      <code>gulp serve</code> command from the directory where
                      the gulpfile.js is located.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin" id="basic-structure">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Basic structure</h3>
                    <p class="mb-5">
                      The below snippet shows the basic HTML structure of
                      Breeze-free. Please note that all the stylesheets and
                      script files in the below snippet should be included to
                      render Breeze-free styles.
                    </p>
                    <div class="demo-tabs">
                      <!-- Tabs Starts -->
                      <div
                        data-pws-tab="Vertical light"
                        data-pws-tab-name="Vertical light"
                      >
                        <p>
                          This section contains code of default vertical light
                          layout. For other layouts in vertical mode like boxed,
                          icon-menu etc., you can follow the snippet same as
                          below, but you have to just add the appropriate
                          optional class to the body. More details of the
                          classes are given in
                          <a href="#options">Options</a> section
                        </p>
                        <textarea class="multiple-codes mt-5">
                          <!DOCTYPE html>
                          <html lang="en">
                          
                          <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8" />
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                            <title>Breeze-free Admin</title>
                            <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
                            <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
                            <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
                            <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
                            <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
                            <link rel="stylesheet" href="assets/css/style.css" />
                            <link rel="shortcut icon" href="assets/images/favicon.png" />
                          </head>
                          
                          <body>
                            <div class="container-scroller">
                              <nav class="sidebar sidebar-offcanvas" id="sidebar">
                                <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                                  <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
                                  <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg"
                                      alt="logo" /></a>
                                </div>
                                <ul class="nav">
                                  <li class="nav-item nav-profile">
                                    <a href="#" class="nav-link">
                                      <div class="nav-profile-image">
                                        <img src="assets/images/faces/face1.jpg" alt="profile" />
                                        <span class="login-status online"></span>
                                        <!--change to offline or busy as needed-->
                                      </div>
                                      <div class="nav-profile-text d-flex flex-column pr-3">
                                        <span class="font-weight-medium mb-2">Henry Klein</span>
                                        <span class="font-weight-normal">$8,753.00</span>
                                      </div>
                                      <span class="badge badge-danger text-white ml-3 rounded">3</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                      <i class="mdi mdi-home menu-icon"></i>
                                      <span class="menu-title">Dashboard</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                      <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                                      <span class="menu-title">Basic UI Elements</span>
                                      <i class="menu-arrow"></i>
                                    </a>
                                    <div class="collapse" id="ui-basic">
                                      <ul class="nav flex-column sub-menu">
                                        <li class="nav-item">
                                          <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="pages/icons/mdi.html">
                                      <i class="mdi mdi-contacts menu-icon"></i>
                                      <span class="menu-title">Icons</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="pages/forms/basic_elements.html">
                                      <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                                      <span class="menu-title">Forms</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="pages/charts/chartjs.html">
                                      <i class="mdi mdi-chart-bar menu-icon"></i>
                                      <span class="menu-title">Charts</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="pages/tables/basic-table.html">
                                      <i class="mdi mdi-table-large menu-icon"></i>
                                      <span class="menu-title">Tables</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <span class="nav-link" href="#">
                                      <span class="menu-title">Docs</span>
                                    </span>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="http://bootstrapdash.com/demo/Breeze-free/jquery/documentation/documentation.html">
                                      <i class="mdi mdi-file-document-box menu-icon"></i>
                                      <span class="menu-title">Documentation</span>
                                    </a>
                                  </li>
                                  <li class="nav-item sidebar-actions">
                                    <div class="nav-link">
                                      <div class="mt-4">
                                        <div class="border-none">
                                          <p class="text-black">Notification</p>
                                        </div>
                                        <ul class="mt-4 pl-0">
                                          <li>Sign Out</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </nav>
                              <div class="container-fluid page-body-wrapper">
                                
                                <div id="theme-settings" class="settings-panel">
                                  <i class="settings-close mdi mdi-close"></i>
                                  <p class="settings-heading">SIDEBAR SKINS</p>
                                  <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                                  </div>
                                  <div class="sidebar-bg-options" id="sidebar-dark-theme">
                                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                                  </div>
                                  <p class="settings-heading mt-2">HEADER SKINS</p>
                                  <div class="color-tiles mx-0 px-4">
                                    <div class="tiles light"></div>
                                    <div class="tiles dark"></div>
                                  </div>
                                </div>
                                <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
                                  <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img
                                        src="assets/images/logo-mini.svg" alt="logo" /></a>
                                    <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                                      <i class="mdi mdi-menu"></i>
                                    </button>
                                    <ul class="navbar-nav">
                                      <li class="nav-item dropdown">
                                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                          data-toggle="dropdown">
                                          <i class="mdi mdi-bell-outline"></i>
                                          <span class="count count-varient1">7</span>
                                        </a>
                                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
                                          aria-labelledby="notificationDropdown">
                                          <h6 class="p-3 mb-0">Notifications</h6>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                              <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                                            </div>
                                            <div class="preview-item-content">
                                              <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                                              </p>
                                            </div>
                                          </a>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                              <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                                            </div>
                                            <div class="preview-item-content">
                                              <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                                              </p>
                                            </div>
                                          </a>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                              <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                                            </div>
                                            <div class="preview-item-content">
                                              <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                                              </p>
                                            </div>
                                          </a>
                                          <div class="dropdown-divider"></div>
                                          <p class="p-3 mb-0">View all activities</p>
                                        </div>
                                      </li>
                                      <li class="nav-item dropdown d-none d-sm-flex">
                                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                                          <i class="mdi mdi-email-outline"></i>
                                          <span class="count count-varient2">5</span>
                                        </a>
                                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
                                          aria-labelledby="messageDropdown">
                                          <h6 class="p-3 mb-0">Messages</h6>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                              <span class="badge badge-pill badge-success">Request</span>
                                              <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                          </a>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                              <span class="badge badge-pill badge-warning">Invoices</span>
                                              <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                          </a>
                                          <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                              <span class="badge badge-pill badge-danger">Projects</span>
                                              <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                          </a>
                                          <h6 class="p-3 mb-0">See all activity</h6>
                                        </div>
                                      </li>
                                      <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                                        <form class="nav-link form-inline mt-2 mt-md-0">
                                          <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" />
                                            <div class="input-group-append">
                                              <span class="input-group-text">
                                                <i class="mdi mdi-magnify"></i>
                                              </span>
                                            </div>
                                          </div>
                                        </form>
                                      </li>
                                    </ul>
                                    <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                                      <li class="nav-item nav-profile dropdown border-0">
                                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                                          <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                                          <span class="profile-name">Henry Klein</span>
                                        </a>
                                        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                                          <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                                          <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                                        </div>
                                      </li>
                                    </ul>
                                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                                      data-toggle="offcanvas">
                                      <span class="mdi mdi-menu"></span>
                                    </button>
                                  </div>
                                </nav>
                                <div class="main-panel">
                                  <div class="content-wrapper pb-0">
                                    <div class="page-header flex-wrap">
                                      <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Your web
                                          analytics dashboard template.</span>
                                      </h3>
                                      <div class="d-flex">
                                        <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                                          <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                                        <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                                          <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                                        <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                                        <div class="row">
                                          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                            <div class="card bg-warning">
                                              <div class="card-body px-3 py-4">
                                                <div class="d-flex justify-content-between align-items-start">
                                                  <div class="color-card">
                                                    <p class="mb-0 color-card-head">Sales</p>
                                                    <h2 class="text-white"> $8,753.<span class="h5">00</span>
                                                    </h2>
                                                  </div>
                                                  <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                                </div>
                                                <h6 class="text-white">18.33% Since last month</h6>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                            <div class="card bg-danger">
                                              <div class="card-body px-3 py-4">
                                                <div class="d-flex justify-content-between align-items-start">
                                                  <div class="color-card">
                                                    <p class="mb-0 color-card-head">Margin</p>
                                                    <h2 class="text-white"> $5,300.<span class="h5">00</span>
                                                    </h2>
                                                  </div>
                                                  <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                                </div>
                                                <h6 class="text-white">13.21% Since last month</h6>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                                            <div class="card bg-primary">
                                              <div class="card-body px-3 py-4">
                                                <div class="d-flex justify-content-between align-items-start">
                                                  <div class="color-card">
                                                    <p class="mb-0 color-card-head">Orders</p>
                                                    <h2 class="text-white"> $1,753.<span class="h5">00</span>
                                                    </h2>
                                                  </div>
                                                  <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                                </div>
                                                <h6 class="text-white">67.98% Since last month</h6>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                                            <div class="card bg-success">
                                              <div class="card-body px-3 py-4">
                                                <div class="d-flex justify-content-between align-items-start">
                                                  <div class="color-card">
                                                    <p class="mb-0 color-card-head">Affiliate</p>
                                                    <h2 class="text-white">2368</h2>
                                                  </div>
                                                  <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                                                </div>
                                                <h6 class="text-white">20.32% Since last month</h6>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-9 stretch-card grid-margin">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="col-sm-7">
                                                <h5>Business Survey</h5>
                                                <p class="text-muted"> Show overview jan 2018 - Dec 2019 <a
                                                    class="text-muted font-weight-medium pl-2" href="#"><u>See Details</u></a>
                                                </p>
                                              </div>
                                              <div class="col-sm-5 text-md-right">
                                                <button type="button"
                                                  class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal">
                                                  <i class="mdi mdi-email btn-icon-prepend"></i>Download Report </button>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="card mb-3 mb-sm-0">
                                                  <div class="card-body py-3 px-4">
                                                    <p class="m-0 survey-head">Today Earnings</p>
                                                    <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                                      <div>
                                                        <h3 class="m-0 survey-value">$5,300</h3>
                                                        <p class="text-success m-0">-310 avg. sales</p>
                                                      </div>
                                                      <div id="earningChart" class="flot-chart"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="card mb-3 mb-sm-0">
                                                  <div class="card-body py-3 px-4">
                                                    <p class="m-0 survey-head">Product Sold</p>
                                                    <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                                      <div>
                                                        <h3 class="m-0 survey-value">$9,100</h3>
                                                        <p class="text-danger m-0">-310 avg. sales</p>
                                                      </div>
                                                      <div id="productChart" class="flot-chart"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="card">
                                                  <div class="card-body py-3 px-4">
                                                    <p class="m-0 survey-head">Today Orders</p>
                                                    <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                                      <div>
                                                        <h3 class="m-0 survey-value">$4,354</h3>
                                                        <p class="text-success m-0">-310 avg. sales</p>
                                                      </div>
                                                      <div id="orderChart" class="flot-chart"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row my-3">
                                              <div class="col-sm-12">
                                                <div class="flot-chart-wrapper">
                                                  <div id="flotChart" class="flot-chart">
                                                    <canvas class="flot-base"></canvas>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-8">
                                                <p class="text-muted mb-0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                  eiusmod tempor incididunt ut labore et dolore. <b>Learn More</b>
                                                </p>
                                              </div>
                                              <div class="col-sm-4">
                                                <p class="mb-0 text-muted">Sales Revenue</p>
                                                <h5 class="d-inline-block survey-value mb-0"> $2,45,500 </h5>
                                                <p class="d-inline-block text-danger mb-0"> last 8 months </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body px-0 overflow-auto">
                                            <h4 class="card-title pl-4">Purchase History</h4>
                                            <div class="table-responsive">
                                              <table class="table">
                                                <thead class="bg-light">
                                                  <tr>
                                                    <th>Customer</th>
                                                    <th>Project</th>
                                                    <th>Invoice</th>
                                                    <th>Amount</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face1.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">
                                                          <p class="mb-0 font-weight-medium"> Cecelia Cooper </p>
                                                          <small> Payment on hold</small>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>Angular Admin</td>
                                                    <td>
                                                      <div class="badge badge-inverse-success"> Completed </div>
                                                    </td>
                                                    <td>$ 77.99</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face10.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">
                                                          <p class="mb-0 font-weight-medium"> Victor Watkins </p>
                                                          <small>Email verified</small>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>Angular Admin</td>
                                                    <td>
                                                      <div class="badge badge-inverse-success"> Completed </div>
                                                    </td>
                                                    <td>$245.30</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face11.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">
                                                          <p class="mb-0 font-weight-medium"> Ada Burgess </p>
                                                          <small>Email verified</small>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>One page html</td>
                                                    <td>
                                                      <div class="badge badge-inverse-danger"> Completed </div>
                                                    </td>
                                                    <td>$ 160.25</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face13.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">
                                                          <p class="mb-0 font-weight-medium"> Dollie Lynch </p>
                                                          <small>Email verified</small>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>Wordpress</td>
                                                    <td>
                                                      <div class="badge badge-inverse-success"> Declined </div>
                                                    </td>
                                                    <td>$ 123.21</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face16.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">
                                                          <p class="mb-0 font-weight-medium"> Harry Holloway </p>
                                                          <small>Payment on process</small>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>VueJs Application</td>
                                                    <td>
                                                      <div class="badge badge-inverse-danger"> Declined </div>
                                                    </td>
                                                    <td>$ 150.00</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <a class="text-black mt-3 d-block pl-4" href="#">
                                              <span class="font-weight-medium h6">View all order history</span>
                                              <i class="mdi mdi-chevron-right"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="card-title font-weight-medium"> Business Survey </div>
                                            <p class="text-muted"> Lorem ipsum dolor sitadipiscing elit, sed amet do eiusmod tempor we find a new
                                              solution </p>
                                            <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                                              <img class="survey-img mb-lg-3" src="assets/images/dashboard/img_3.jpg" alt="" />
                                              <div class="pt-2">
                                                <h5 class="mb-0">Villa called Archagel</h5>
                                                <p class="mb-0 text-muted">St, San Diego, CA</p>
                                                <h5 class="mb-0">$600/mo</h5>
                                              </div>
                                            </div>
                                            <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                                              <img class="survey-img mb-lg-3" src="assets/images/dashboard/img_1.jpg" alt="" />
                                              <div class="pt-2">
                                                <h5 class="mb-0">Luxury villa in Hermo</h5>
                                                <p class="mb-0 text-muted">Glendale, CA</p>
                                                <h5 class="mb-0">$900/mo</h5>
                                              </div>
                                            </div>
                                            <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                                              <img class="survey-img mb-lg-3" src="assets/images/dashboard/img_2.jpg" alt="" />
                                              <div class="pt-2">
                                                <h5 class="mb-0">House on the Clarita</h5>
                                                <p class="mb-0 text-muted">Business Survey</p>
                                                <h5 class="mb-0">$459/mo</h5>
                                              </div>
                                            </div>
                                            <a class="text-black mt-3 d-block font-weight-medium h6" href="#">View all <i
                                                class="mdi mdi-chevron-right"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-4 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title text-black">To do Task List</h4>
                                            <p class="text-muted">Created by anonymous</p>
                                            <div class="list-wrapper">
                                              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                                <li>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="checkbox" type="checkbox" /> Meeting with Alisa </label>
                                                    <span class="list-time">4 Hours Ago</span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="checkbox" type="checkbox" /> Create invoice </label>
                                                    <span class="list-time">6 Hours Ago</span>
                                                  </div>
                                                </li>
                                                <li class="completed">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="checkbox" type="checkbox" checked /> Prepare for presentation </label>
                                                    <span class="list-time">2 Hours Ago</span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="checkbox" type="checkbox" /> Pick up kids from school </label>
                                                    <span class="list-time">8 Hours Ago</span>
                                                  </div>
                                                </li>
                                              </ul>
                                            </div>
                                            <div class="add-items d-flex flex-wrap flex-sm-nowrap">
                                              <input type="text" class="form-control todo-list-input flex-grow" placeholder="Add task name" />
                                              <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title text-black">Recent Customers</h4>
                                            <p class="text-muted">All contacts</p>
                                            <div class="row pt-2 pb-1">
                                              <div class="col-12 col-sm-7">
                                                <div class="row">
                                                  <div class="col-4 col-md-4">
                                                    <img class="customer-img" src="assets/images/faces/face22.jpg" alt="" />
                                                  </div>
                                                  <div class="col-8 col-md-8 p-sm-0">
                                                    <h6 class="mb-0">Cecelia Cooper</h6>
                                                    <p class="text-muted font-12">05:58AM</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-5 pl-0">
                                                <canvas id="areaChart1"></canvas>
                                              </div>
                                            </div>
                                            <div class="row py-1">
                                              <div class="col-sm-7">
                                                <div class="row">
                                                  <div class="col-4 col-sm-4">
                                                    <img class="customer-img" src="assets/images/faces/face25.jpg" alt="" />
                                                  </div>
                                                  <div class="col-8 col-sm-8 p-sm-0">
                                                    <h6 class="mb-0">Victor Watkins</h6>
                                                    <p class="text-muted font-12">05:28AM</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-5 pl-0">
                                                <canvas id="areaChart2"></canvas>
                                              </div>
                                            </div>
                                            <div class="row py-1">
                                              <div class="col-sm-7">
                                                <div class="row">
                                                  <div class="col-4 col-sm-4">
                                                    <img class="customer-img" src="assets/images/faces/face15.jpg" alt="" />
                                                  </div>
                                                  <div class="col-8 col-sm-8 p-sm-0">
                                                    <h6 class="mb-0">Ada Burgess</h6>
                                                    <p class="text-muted font-12">05:57AM</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-5 pl-0">
                                                <canvas id="areaChart3"></canvas>
                                              </div>
                                            </div>
                                            <div class="row py-1">
                                              <div class="col-sm-7">
                                                <div class="row">
                                                  <div class="col-4 col-sm-4">
                                                    <img class="customer-img" src="assets/images/faces/face5.jpg" alt="" />
                                                  </div>
                                                  <div class="col-8 col-sm-8 p-sm-0">
                                                    <h6 class="mb-0">Dollie Lynch</h6>
                                                    <p class="text-muted font-12">05:59AM</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-5 pl-0">
                                                <canvas id="areaChart4"></canvas>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-7">
                                                <div class="row">
                                                  <div class="col-4 col-sm-4">
                                                    <img class="customer-img" src="assets/images/faces/face2.jpg" alt="" />
                                                  </div>
                                                  <div class="col-8 col-sm-8 p-sm-0">
                                                    <h6 class="mb-0">Harry Holloway</h6>
                                                    <p class="text-muted font-12 mb-0">05:13AM</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-5 pl-0">
                                                <canvas id="areaChart5" height="100"></canvas>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title text-black">Business Survey</h4>
                                            <p class="text-muted pb-2">Jan 01 2019 - Dec 31 2019</p>
                                            <canvas id="surveyBar"></canvas>
                                            <div class="row border-bottom pb-3 pt-4 align-items-center mx-0">
                                              <div class="col-sm-9 pl-0">
                                                <div class="d-flex">
                                                  <img src="assets/images/dashboard/img_4.jpg" alt="" />
                                                  <div class="pl-2">
                                                    <h6 class="m-0">Red Chair</h6>
                                                    <p class="m-0">Home Decoration</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-3 pl-0 pl-sm-3">
                                                <div class="badge badge-inverse-success mt-3 mt-sm-0"> +7.7% </div>
                                              </div>
                                            </div>
                                            <div class="row py-3 align-items-center mx-0">
                                              <div class="col-sm-9 pl-0">
                                                <div class="d-flex">
                                                  <img src="assets/images/dashboard/img_5.jpg" alt="" />
                                                  <div class="pl-2">
                                                    <h6 class="m-0">Gray Sofa</h6>
                                                    <p class="m-0">Home Decoration</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-3 pl-0 pl-sm-3">
                                                <div class="badge badge-inverse-success mt-3 mt-sm-0"> +7.7% </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-8 grid-margin stretch-card">
                                        <div class="card card-calender">
                                          <div class="card-body">
                                            <div class="row pt-4">
                                              <div class="col-sm-6">
                                                <h1 class="text-white">10:16PM</h1>
                                                <h5 class="text-white">Monday 25 October, 2016</h5>
                                                <h5 class="text-white pt-2 m-0">Precipitation:50%</h5>
                                                <h5 class="text-white m-0">Humidity:23%</h5>
                                                <h5 class="text-white m-0">Wind:13 km/h</h5>
                                              </div>
                                              <div class="col-sm-6 text-sm-right pt-3 pt-sm-0">
                                                <h3 class="text-white">Clear Sky</h3>
                                                <p class="text-white m-0">London, UK</p>
                                                <h3 class="text-white m-0">21°C</h3>
                                              </div>
                                            </div>
                                            <div class="row mt-5">
                                              <div class="col-sm-12">
                                                <ul class="d-flex pl-0 overflow-auto">
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center active">
                                                    <p class="mb-0">TODAY</p>
                                                    <i class="mdi mdi-weather-cloudy"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">MON</p>
                                                    <i class="mdi mdi-weather-hail"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">TUE</p>
                                                    <i class="mdi mdi-weather-cloudy"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">WED</p>
                                                    <i class="mdi mdi-weather-fog"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">THU</p>
                                                    <i class="mdi mdi-weather-hail"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">FRI</p>
                                                    <i class="mdi mdi-weather-cloudy"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">SAT</p>
                                                    <i class="mdi mdi-weather-hail"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                                                    <p class="mb-0">SUN</p>
                                                    <i class="mdi mdi-weather-cloudy"></i>
                                                    <p class="mb-0">21<span class="symbol">°c</span></p>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 grid-margin stretch-card">
                                        <!--activity-->
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title">
                                              <span class="d-flex justify-content-between">
                                                <span>Activity</span>
                                                <span class="dropdown dropleft d-block">
                                                  <span id="dropdownMenuButton1" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span><i class="mdi mdi-dots-horizontal"></i></span>
                                                  </span>
                                                  <span class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#">Contact</a>
                                                    <a class="dropdown-item" href="#">Helpdesk</a>
                                                    <a class="dropdown-item" href="#">Chat with us</a>
                                                  </span>
                                                </span>
                                              </span>
                                            </h4>
                                            <ul class="gradient-bullet-list border-bottom">
                                              <li>
                                                <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                                                <p class="text-muted">2h ago</p>
                                              </li>
                                              <li>
                                                <h6 class="mb-0">Report has been updated</h6>
                                                <p class="text-muted">
                                                  <span>2h ago</span>
                                                  <span class="d-inline-block">
                                                    <span class="d-flex d-inline-block">
                                                      <img class="ml-1" src="assets/images/faces/face1.jpg" alt="" />
                                                      <img class="ml-1" src="assets/images/faces/face10.jpg" alt="" />
                                                      <img class="ml-1" src="assets/images/faces/face14.jpg" alt="" />
                                                    </span>
                                                  </span>
                                                </p>
                                              </li>
                                              <li>
                                                <h6 class="mb-0"> Analytics dashboard has been created#Slack </h6>
                                                <p class="text-muted">2h ago</p>
                                              </li>
                                              <li>
                                                <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                                                <p class="text-muted">2h ago</p>
                                              </li>
                                            </ul>
                                            <a class="text-black mt-3 mb-0 d-block h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
                                          </div>
                                        </div>
                                        <!--activity ends-->
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                                        <div class="card card-invoice">
                                          <div class="card-body">
                                            <h4 class="card-title pb-3">Pending invoices</h4>
                                            <div class="list-card">
                                              <div class="row align-items-center">
                                                <div class="col-7 col-sm-8">
                                                  <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                      <img src="assets/images/faces/face2.jpg" alt="" />
                                                    </div>
                                                    <div class="col-sm-8 pr-0 pl-sm-0">
                                                      <span>06 Jan 2019</span>
                                                      <h6 class="mb-1 mb-sm-0">Isabel Cross</h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-5 col-sm-4">
                                                  <div class="d-flex pt-1 align-items-center">
                                                    <div class="reload-outer bg-info">
                                                      <i class="mdi mdi-reload"></i>
                                                    </div>
                                                    <div class="dropdown dropleft pl-1 pt-3">
                                                      <div id="dropdownMenuButton2" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <p><i class="mdi mdi-dots-vertical"></i></p>
                                                      </div>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#">Sales</a>
                                                        <a class="dropdown-item" href="#">Track Invoice</a>
                                                        <a class="dropdown-item" href="#">Payment History</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="list-card">
                                              <div class="row align-items-center">
                                                <div class="col-7 col-sm-8">
                                                  <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                      <img src="assets/images/faces/face3.jpg" alt="" />
                                                    </div>
                                                    <div class="col-sm-8 pr-0 pl-sm-0">
                                                      <span>18 Mar 2019</span>
                                                      <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-5 col-sm-4">
                                                  <div class="d-flex pt-1 align-items-center">
                                                    <div class="reload-outer bg-primary">
                                                      <i class="mdi mdi-reload"></i>
                                                    </div>
                                                    <div class="dropdown dropleft pl-1 pt-3">
                                                      <div id="dropdownMenuButton3" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <p><i class="mdi mdi-dots-vertical"></i></p>
                                                      </div>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                        <a class="dropdown-item" href="#">Sales</a>
                                                        <a class="dropdown-item" href="#">Track Invoice</a>
                                                        <a class="dropdown-item" href="#">Payment History</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="list-card">
                                              <div class="row align-items-center">
                                                <div class="col-7 col-sm-8">
                                                  <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                      <img src="assets/images/faces/face11.jpg" alt="" />
                                                    </div>
                                                    <div class="col-sm-8 pr-0 pl-sm-0">
                                                      <span>10 Apr 2019</span>
                                                      <h6 class="mb-1 mb-sm-0">Don Bennett</h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-5 col-sm-4">
                                                  <div class="d-flex pt-1 align-items-center">
                                                    <div class="reload-outer bg-warning">
                                                      <i class="mdi mdi-reload"></i>
                                                    </div>
                                                    <div class="dropdown dropleft pl-1 pt-3">
                                                      <div id="dropdownMenuButton4" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <p><i class="mdi mdi-dots-vertical"></i></p>
                                                      </div>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                                        <a class="dropdown-item" href="#">Sales</a>
                                                        <a class="dropdown-item" href="#">Track Invoice</a>
                                                        <a class="dropdown-item" href="#">Payment History</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="list-card">
                                              <div class="row align-items-center">
                                                <div class="col-7 col-sm-8">
                                                  <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                      <img src="assets/images/faces/face3.jpg" alt="" />
                                                    </div>
                                                    <div class="col-sm-8 pr-0 pl-sm-0">
                                                      <span>18 Mar 2019</span>
                                                      <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-5 col-sm-4">
                                                  <div class="d-flex pt-1 align-items-center">
                                                    <div class="reload-outer bg-info">
                                                      <i class="mdi mdi-reload"></i>
                                                    </div>
                                                    <div class="dropdown dropleft pl-1 pt-3">
                                                      <div id="dropdownMenuButton5" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <p><i class="mdi mdi-dots-vertical"></i></p>
                                                      </div>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                        <a class="dropdown-item" href="#">Sales</a>
                                                        <a class="dropdown-item" href="#">Track Invoice</a>
                                                        <a class="dropdown-item" href="#">Payment History</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                                        <!--datepicker-->
                                        <div class="card">
                                          <div class="card-body">
                                            <div id="inline-datepicker" class="datepicker table-responsive"></div>
                                          </div>
                                        </div>
                                        <!--datepicker ends-->
                                      </div>
                                      <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
                                        <!--browser stats-->
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title">Browser stats</h4>
                                            <div class="row py-2">
                                              <div class="col-sm-12">
                                                <div class="d-flex justify-content-between pb-3 border-bottom">
                                                  <div>
                                                    <img class="mr-2" src="assets/images/browser-logo/opera-logo.png" alt="" />
                                                    <span class="p">opera mini</span>
                                                  </div>
                                                  <p class="mb-0">23%</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row py-2">
                                              <div class="col-sm-12">
                                                <div class="d-flex justify-content-between pb-3 border-bottom">
                                                  <div>
                                                    <img class="mr-2" src="assets/images/browser-logo/safari-logo.png" alt="" />
                                                    <span class="p">Safari</span>
                                                  </div>
                                                  <p class="mb-0">07%</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row py-2">
                                              <div class="col-sm-12">
                                                <div class="d-flex justify-content-between pb-3 border-bottom">
                                                  <div>
                                                    <img class="mr-2" src="assets/images/browser-logo/chrome-logo.png" alt="" />
                                                    <span class="p">Chrome</span>
                                                  </div>
                                                  <p class="mb-0">33%</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row py-2">
                                              <div class="col-sm-12">
                                                <div class="d-flex justify-content-between pb-3 border-bottom">
                                                  <div>
                                                    <img class="mr-2" src="assets/images/browser-logo/firefox-logo.png" alt="" />
                                                    <span class="p">Firefox</span>
                                                  </div>
                                                  <p class="mb-0">17%</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row py-2">
                                              <div class="col-sm-12">
                                                <div class="d-flex justify-content-between">
                                                  <div>
                                                    <img class="mr-2" src="assets/images/browser-logo/explorer-logo.png" alt="" />
                                                    <span class="p">Explorer</span>
                                                  </div>
                                                  <p class="mb-0">05%</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--browser stats ends-->
                                      </div>
                                    </div>
                                  </div>
                                  <footer class="footer">
                                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                          href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                                      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                                          class="mdi mdi-heart text-danger"></i></span>
                                    </div>
                                  </footer>
                                </div>
                                <!-- main-panel ends -->
                              </div>
                              <!-- page-body-wrapper ends -->
                            </div>
                            <!-- container-scroller -->
                            <!-- plugins:js -->
                            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                            <!-- endinject -->
                            <!-- Plugin js for this page -->
                            <script src="assets/vendors/chart.js/Chart.min.js"></script>
                            <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
                            <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
                            <!-- End plugin js for this page -->
                            <!-- inject:js -->
                            <script src="assets/js/off-canvas.js"></script>
                            <script src="assets/js/hoverable-collapse.js"></script>
                            <script src="assets/js/misc.js"></script>
                            <!-- endinject -->
                            <!-- Custom js for this page -->
                            <script src="assets/js/dashboard.js"></script>
                            <!-- End custom js for this page -->
                          </body>
                          
                          </html>
</textarea
                        >
                      </div>
                      <!-- Tabs Ends -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <!-- New Docs Starts Here -->
                    <h3 class="mb-4">Components</h3>
                    <hr class="hr" id="basic-ui" />
                    <h4 class="my-4">Basic UI Elements</h4>
                    <div class="demo-tabs">
                      <!-- Tabs Starts -->
                      <div data-pws-tab="Button" data-pws-tab-name="Button">
                        <h5 class="mb-2 mt-4">Button with single color</h5>
                        <div class="fluid-container py-4">
                          <button type="button" class="btn btn-primary">
                            Primary
                          </button>
                          <button type="button" class="btn btn-secondary">
                            Secondary
                          </button>
                          <button type="button" class="btn btn-success">
                            Success
                          </button>
                          <button type="button" class="btn btn-info">
                            Info
                          </button>
                          <button type="button" class="btn btn-warning">
                            Warning
                          </button>
                          <button type="button" class="btn btn-danger">
                            Danger
                          </button>
                        </div>
                        <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-danger">Danger</button>
    </div>
                                      </textarea
                        >
                        <h5 class="mb-2 mt-4">Outlined</h5>
                        <div class="fluid-container py-4">
                          <button type="button" class="btn btn-outline-primary">
                            Primary
                          </button>
                          <button
                            type="button"
                            class="btn btn-outline-secondary"
                          >
                            Secondary
                          </button>
                          <button type="button" class="btn btn-outline-success">
                            Success
                          </button>
                          <button type="button" class="btn btn-outline-info">
                            Info
                          </button>
                          <button type="button" class="btn btn-outline-warning">
                            Warning
                          </button>
                          <button type="button" class="btn btn-outline-danger">
                            Danger
                          </button>
                        </div>
                        <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-outline-primary">Primary</button>
      <button type="button" class="btn btn-outline-secondary">Secondary</button>
      <button type="button" class="btn btn-outline-success">Success</button>
      <button type="button" class="btn btn-outline-info">Info</button>
      <button type="button" class="btn btn-outline-warning">Warning</button>
      <button type="button" class="btn btn-outline-danger">Danger</button>
    </div>
                                      </textarea
                        >
                        <h5 class="mb-2 mt-4">Sizes</h5>
                        <div class="fluid-container py-4">
                          <button type="button" class="btn btn-primary btn-lg">
                            Large
                          </button>
                          <button type="button" class="btn btn-primary">
                            Medium
                          </button>
                          <button type="button" class="btn btn-primary btn-sm">
                            Small
                          </button>
                        </div>
                        <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-primary btn-lg">Small</button>
      <button type="button" class="btn btn-secondary">Medium</button>
      <button type="button" class="btn btn-success btn-sm">Large</button>
    </div>
                                      </textarea
                        >
                      </div>
                      <!-- Tabs Ends -->
                      <!-- Tabs Starts -->
                      <div data-pws-tab="Dropdown" data-pws-tab-name="Dropdown">
                        <h5 class="mb-2 mt-4">Bootstrap Dropdown</h5>
                        <div class="fluid-container py-4">
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-primary dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-secondary dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-success dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-warning dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-danger dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                        </div>
                        <textarea class="multiple-codes">
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
                                      </textarea
                        >
                        <h5 class="mb-2 mt-4">Dropdown Outlined</h5>
                        <div class="fluid-container py-4">
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-outline-primary dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-outline-secondary dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-outline-success dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-outline-warning dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-outline-danger dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#"
                                >Another action</a
                              >
                              <a class="dropdown-item" href="#"
                                >Something else here</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"
                                >Separated link</a
                              >
                            </div>
                          </div>
                        </div>
                        <textarea class="multiple-codes">
    <div class="btn-group">
      <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
                                    </textarea
                        >
                      </div>
                      <!-- Tabs Ends -->
                    </div>
                    <!-- demo-tabs container ends -->
                    <!-- New Docs Ends Here -->
                    <!--Tables starts-->
                    <hr class="hr" id="tables" />
                    <h4 class="my-4">Tables</h4>
                    <div class="demo-tabs">
                      <!-- Basic table starts -->
                      <div
                        data-pws-tab="basic-table"
                        data-pws-tab-name="Basic table"
                      >
                        <p>
                          To create a basic Twitter Bootstrap table, add the
                          following code.
                        </p>
                        <textarea class="multiple-codes">
    <table class="table">
      <thead>
      <tr class="">
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td scope="row">3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </textarea
                        >
                      </div>
                      <!-- Basic table Ends -->
                    </div>
                    <!--Tables ends-->
                    <!-- New Docs Starts Here -->
                    <!-- New Docs Ends Here -->
                    <hr class="hr" id="charts" />
                    <h4 class="my-4">Charts</h4>
                    <div class="demo-tabs">
                      <div
                        data-pws-tab="anynameyouwant1"
                        data-pws-tab-name="Chart.js"
                      >
                        <p>
                          <a href="http://www.chartjs.org/">Chart.js</a> is a
                          simple yet flexible JavaScript charting for designers
                          & developers.
                        </p>
                        <h5 class="mt-5 mb-4">Usage</h5>
                        <p>
                          To use Chart.js in your application, include the
                          following files in &lt;head&gt;.
                        </p>
                        <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" /></textarea
                        >
                        <p>and the following script files in &lt;body&gt;.</p>
                        <textarea class="multiple-codes">
    <script src="path-to/node_modules/chart.js/dist/Chart.min.js"></script></textarea
                        >
                        <p>To create a simple chart, add the following code:</p>
                        <textarea class="multiple-codes">
    <canvas id="lineChart" style="height:250px"></canvas>
    
    <script>
      var data = {
        labels: ["Red", "Blue", "Yellow", "Green", "Breeze-free", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          }
        }

      };
      if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
          type: 'line',
          data: data,
          options: options
        });
      }
    </script></textarea
                        >
                      </div>
                    </div>
                    <!-- New Docs Ends Here -->
                    <!--Forms starts-->
                    <hr class="hr" id="forms" />
                    <h4 class="my-4">Forms</h4>
                    <div class="demo-tabs">
                      <!-- Basic elements Starts -->
                      <div
                        data-pws-tab="basic-elements"
                        data-pws-tab-name="Basic elements"
                      >
                        <p>
                          The basic form elements can be added to your
                          application as below:
                        </p>
                        <textarea class="multiple-codes">
    <form class="forms-sample">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>&nbsp; We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control p-input" id="exampleTextarea" rows="3">&lt;/textarea&gt;
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form-group">
            <legend class="mb-4 mt-5">Radio buttons</legend>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                  Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                  Option three is disabled
                </label>
            </div>
        </fieldset>
        <div class="form-check col-12">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Check me out
            </label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form></textarea
                        >
                      </div>
                      <!-- Basic elements Ends -->
                    </div>
                    <!--Forms ends-->
                    <!--Icons starts-->
                    <hr class="hr" id="icons" />
                    <h4 class="my-4">Icons</h4>
                    <div class="demo-tabs">
                      <!-- MDI icon Starts -->
                      <div
                        data-pws-tab="mdi-icon"
                        data-pws-tab-name="Material Icons"
                      >
                        <p>
                          <a href="https://materialdesignicons.com/"
                            >Material Design Icons</a
                          >
                          growing icon collection allows designers and
                          developers targeting various platforms to download
                          icons in the format, color and size they need for any
                          project.
                        </p>
                        <h5 class="mt-5 mb-4">Usage</h5>
                        <p>
                          To use Material Design Icons in your application,
                          include the following files in &lt;head&gt;.
                        </p>
                        <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/mdi/css/materialdesignicons.min.css"/></textarea
                        >
                        <p>To generate an icon, add the following code:</p>
                        <textarea class="multiple-codes">
    <i class="mdi mdi-bell"></i>
                                                </textarea
                        >
                      </div>
                      <!-- MDI icon Ends -->
                    </div>
                    <!--icons ends-->
                  </div>
                  <!-- Card Block Ends Here -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="../template/assets/vendors/codemirror/codemirror.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/mode/ruby/ruby.min.js"></script>
    <script src="../template/assets/vendors/pwstabs/jquery.pwstabs.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
