<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Docfindboard</title>
        <!-- Iconic Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
        <!-- Bootstrap core CSS -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Page Specific Css (Datatables.css) -->
        <link href="../../assets/css/datatables.min.css" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
        <!-- Page Specific CSS (Slick Slider.css) -->
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <!-- Docfindboard styles -->
        <link href="../../assets/css/style.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
    </head>
    <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
        <!-- Setting Panel -->
        <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
            <i class="flaticon-gear"></i>
        </div>
        <div class="ms-settings-panel ms-d-block-lg">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <h4 class="section-title">Customize</h4>
                    <div>
                        <label class="ms-switch">
                        <input type="checkbox" id="dark-mode">
                        <span class="ms-switch-slider round"></span>
                        </label>
                        <span> Dark Mode </span>
                    </div>

                </div>
                <div class="col-xl-4 col-md-4">
                    <h4 class="section-title">Keyboard Shortcuts</h4>
                    <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                    <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
                    <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
                </div>
            </div>
        </div>
        <!-- Preloader -->
        <div id="preloader-wrap">
            <div class="spinner spinner-8">
                <div class="ms-circle1 ms-child"></div>
                <div class="ms-circle2 ms-child"></div>
                <div class="ms-circle3 ms-child"></div>
                <div class="ms-circle4 ms-child"></div>
                <div class="ms-circle5 ms-child"></div>
                <div class="ms-circle6 ms-child"></div>
                <div class="ms-circle7 ms-child"></div>
                <div class="ms-circle8 ms-child"></div>
                <div class="ms-circle9 ms-child"></div>
                <div class="ms-circle10 ms-child"></div>
                <div class="ms-circle11 ms-child"></div>
                <div class="ms-circle12 ms-child"></div>
            </div>
        </div>
        <!-- Overlays -->
        <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft"></div>
        <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>
        <!-- Sidebar Navigation Left -->
        <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
            <!-- Logo -->
            <div class="logo-sn ms-d-block-lg">
                <a class="ps-0 ms-0 text-center" href="../../index.html"> <img src="../../assets/img/medboard-logo-216x62.png" alt="logo"> </a>
                <a href="#" class="text-center ms-logo-img-link"> <img src="../../assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
                <h5 class="text-center text-white mt-2">Dr. Anthony</h5>
                <h6 class="text-center text-white mb-3">Admin</h6>
            </div>
            <!-- Navigation -->
            <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                    <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
                    </a>
                    <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-bs-parent="#side-nav-accordion">
                        <li> <a href="../../index.php">SAKUPHARMACY</a> </li>
                    </ul>
                </li>
                <!-- /Dashboard -->
                <!-- Doctor -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
                    <span><i class="fas fa-stethoscope"></i>Doctor</span>
                    </a>
                    <ul id="doctor" class="collapse" aria-labelledby="doctor" data-bs-parent="#side-nav-accordion">
                        <li> <a href="../doctor/add-doctor.html">Add Doctor</a> </li>
                        <li> <a href="../doctor/doctor-list.html">Doctor List</a> </li>
                    </ul>
                </li>
                <!-- Doctor -->
                <!-- Patient -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
                    <span><i class="fas fa-user"></i>Patient</span>
                    </a>
                    <ul id="patient" class="collapse" aria-labelledby="patient" data-bs-parent="#side-nav-accordion">
                        <li> <a href="../patient/add-patient.html">Add Patient</a> </li>
                        <li> <a href="../patient/patient-list.html">Patient List</a> </li>
                    </ul>
                </li>
                <!-- /Patient -->
                <!-- Department -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#department" aria-expanded="false" aria-controls="department">
                    <span><i class="fas fa-sitemap"></i>Department</span>
                    </a>
                    <ul id="department" class="collapse" aria-labelledby="department" data-bs-parent="#side-nav-accordion">
                        <li> <a href="../department/add-department.html">Add Department</a> </li>
                        <li> <a href="../department/department-list.html">Department List</a> </li>
                    </ul>
                </li>
                <!-- /Department -->
                <!-- Report -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="report">
                    <span><i class="fas fa-file-alt"></i>Report</span>
                    </a>
                    <ul id="report" class="collapse" aria-labelledby="report" data-bs-parent="#side-nav-accordion">
                        <li> <a href="../report/patient-report.html">Patient Wise Report</a> </li>
                        <li> <a href="../report/doctor-report.html">Doctor Wise Report</a> </li>
                        <li> <a href="../report/total-report.html">Total Report</a> </li>
                    </ul>
                </li>
                <!-- /Report -->
                <!-- Human Resource -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                    <span><i class="far fa-user-circle"></i>Human Resource</span>
                    </a>
                    <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-bs-parent="#side-nav-accordion">
                        <li> <a href="add-employee.html">Add Employee</a> </li>
                        <li> <a href="employee-list.html">Employee List</a> </li>
                </li>
                <!-- /Human Resource -->
            </ul>
        </aside>
        <!-- Sidebar Right -->
        <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
            <div class="ms-aside-header">
                <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                    <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-bs-toggle="tab"> Activity Log</a></li>
                    <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-bs-toggle="tab"> Settings </a></li>
                    <li><button type="button" class="close ms-toggler text-center" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
                </ul>
            </div>
            <div class="ms-aside-body">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                        <ul class="ms-activity-log">
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-light">
                                    <i class="flaticon-gear"></i>
                                </div>
                                <h6>Update 1.0.0 Pushed</h6>
                                <span> <i class="material-icons">event</i>1 January, 2022</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-success">
                                    <i class="flaticon-tick-inside-circle"></i>
                                </div>
                                <h6>Profile Updated</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-warning">
                                    <i class="flaticon-alert-1"></i>
                                </div>
                                <h6>Your payment is due</h6>
                                <span> <i class="material-icons">event</i>1 January, 2022</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-danger">
                                    <i class="flaticon-alert"></i>
                                </div>
                                <h6>Database Error</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-info">
                                    <i class="flaticon-information"></i>
                                </div>
                                <h6>Checkout what's Trending</h6>
                                <span> <i class="material-icons">event</i>1 January, 2022</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-secondary">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h6>Your Dashboard is ready</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block"> View All </a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="recentPosts">
                        <h6>General Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Location Tracking</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Allow Notifications</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Allow Popups</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <h6>Log Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Enable Logging</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Audit Logs</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Error Logs</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <h6>Advanced Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Enable Logging</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Audit Logs</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Error Logs</span>
                            <label class="ms-switch float-end">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="body-content">
            <!-- Navigation Bar -->
            <nav class="navbar ms-navbar">
              <div class="ms-aside-toggler ms-toggler ps-0" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
              </div>
              <div class="docfind-logo d-none d-xl-block">
                <a class="sigma_logo" href="../../../index.html">
                    <img src="../../assets/img/docfind-logo.png" alt="logo">
                </a>
              </div>
              <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="ps-0 ms-0 text-center navbar-brand me-0" href="../../index.html"><img src="../../assets/img/medboard-logo-84x41.png" alt="logo"> </a>
              </div>
              <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

                <li class="ms-nav-item  ms-d-none">
                  <a href="#mymodal" class="text-white" data-bs-toggle="modal"><i class="flaticon-spreadsheet me-2"></i> Make an appointment</a>
                </li>

                <li class="ms-nav-item ms-d-none">
                  <a href="#prescription" class="text-white" data-bs-toggle="modal"><i class="flaticon-pencil me-2"></i> Write a prescription</a>
                </li>

                <li class="ms-nav-item ms-d-none">
                  <a href="#report1" class="text-white" data-bs-toggle="modal"><i class="flaticon-list me-2"></i> Generate Report</a>
                </li>

                <li class="ms-nav-item dropdown">
                  <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
                      <span class="badge rounded-pill badge-info">4 New</span>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>12 ways to improve your crypto dashboard</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>You have newly registered users</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Your account was logged in from an unauthorized IP</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>An application form has been submitted</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                        </div>
                      </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer text-center">
                      <a href="#">View all Notifications</a>
                    </li>
                  </ul>
                </li>
                <li class="ms-nav-item ms-nav-user dropdown">
                  <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-end" src="../../assets/img/dashboard/doctor-3.jpg" alt="people"> </a>
                  <ul class="dropdown-menu dropdown-menu-end user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Dr Samuel Deo</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-dropdown-list">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user me-2"></i> Profile</span> </a>
                      <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail me-2"></i> Inbox</span> <span class="badge rounded-pill badge-info">3</span> </a>
                      <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear me-2"></i> Account Settings</span> </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security me-2"></i> Lock</span> </a>
                    </li>
                    <li class="dropdown-menu-footer">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down me-2"></i> Logout</span> </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="ms-toggler ms-d-block-sm pe-0 ms-nav-toggler" data-bs-toggle="slideDown" data-bs-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
              </div>
            </nav>
            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Human Resource</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Employee List</li>
                            </ol>
                        </nav>
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Employee List</h6>
                                <a href="add-employee.html" class="ms-text-primary">Add Employee</a>
                            </div>
                            <div class="ms-panel-body">
                                <div class="table-responsive">
                                    <table id="data-table11" class="table w-100 thead-primary"></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Reminder Modal -->
        <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Remind me about</label>
                                <textarea class="form-control" name="reminder"></textarea>
                            </div>
                            <div class="ms-form-group">
                                <span class="ms-option-name fs-14">Repeat Daily</span>
                                <label class="ms-switch float-end">
                                <input type="checkbox">
                                <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <select class="form-control" name="reminder-time">
                                            <option value="">12:00 pm</option>
                                            <option value="">1:00 pm</option>
                                            <option value="">2:00 pm</option>
                                            <option value="">3:00 pm</option>
                                            <option value="">4:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Add Reminder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Notes Modal -->
        <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Note Title</label>
                                <input type="text" class="form-control" name="note-title" value="">
                            </div>
                            <div class="ms-form-group">
                                <label>Note Description</label>
                                <textarea class="form-control" name="note-description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Add Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
              <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make An Appointment</h4>
                <button type="button" class="close text-white" data-bs-dismiss="modal" aria-hidden="true">x</button>

              </div>
              <div class="modal-body p-0 text-start">
                <div class="col-xl-12 col-md-12">
                  <div class="ms-panel ms-panel-bshadow-none">
                    <div class="ms-panel-header">
                      <h6>Patient Information</h6>
                    </div>
                    <div class="ms-panel-body">
                      <form class="needs-validation" novalidate>
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Patient Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Date Of Birth</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="validationCustom02" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Disease</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom03" placeholder="Disease" required>

                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-2">
                            <label for="validationCustom04">Address</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom04" placeholder="Add Address" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Phone no.</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Phone No." required>

                            </div>

                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Department Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom06" placeholder="Enter Department Name" required>

                            </div>
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom07">Appointment With</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom07" placeholder="Enter Doctor Name" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom08">Appointment Date</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Appointment Date" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>Sex</label>
                            <ul class="ms-list d-flex">
                              <li class="ms-list-item ps-0">
                                <label class="ms-checkbox-wrap">
                                  <input type="radio" name="radioExample" value="">
                                  <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Male </span>
                              </li>
                              <li class="ms-list-item">
                                <label class="ms-checkbox-wrap">
                                  <input type="radio" name="radioExample" value="" checked="">
                                  <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Female </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add Appointment</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
              <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make a prescription</h4>
                <button type="button" class="close  text-white" data-bs-dismiss="modal" aria-hidden="true">x</button>

              </div>
              <div class="modal-body p-0 text-start">
                <div class="col-xl-12 col-md-12">
                  <div class="ms-panel ms-panel-bshadow-none">
                    <div class="ms-panel-header">
                      <h6>Patient Information</h6>
                    </div>
                    <div class="ms-panel-body">
                      <form class="needs-validation" novalidate>
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom09">Patient Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom09" placeholder="Enter Name" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom10">Date Of Birth</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="validationCustom10" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-2">
                            <label for="validationCustom11">Address</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom11" placeholder="Add Address" required>

                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom12">Phone no.</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom12" placeholder="Enter Phone No." required>

                            </div>

                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationCustom13">Medication</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom13" placeholder="Acetaminophen" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom14">Period Of medication</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="validationCustom14" placeholder="" required>

                            </div>
                          </div>
                        </div>



                        <div class="row">

                          <div class="col-md-4 mb-3">
                            <label for="validationCustom15">Appointment With</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom15" placeholder="Enter Doctor Name" required>

                            </div>
                          </div>

                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Save Prescription</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save & Print</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="report1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
              <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Generate report</h4>
                <button type="button" class="close  text-white" data-bs-dismiss="modal" aria-hidden="true">x</button>

              </div>
              <div class="modal-body p-0 text-start">
                <div class="col-xl-12 col-md-12">
                  <div class="ms-panel ms-panel-bshadow-none">
                    <div class="ms-panel-header">
                      <h6>Patient Information</h6>
                    </div>
                    <div class="ms-panel-body">
                      <form class="needs-validation" novalidate>
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom16">Patient Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom16" placeholder="Enter Name" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom17">Date Of Birth</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="validationCustom17" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-2">
                            <label for="validationCustom22">Address</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom22" placeholder="Add Address" required>

                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom18">Phone no.</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom18" placeholder="Enter Phone No." required>

                            </div>

                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationCustom19">Report Type</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom19" placeholder="Diseases Report" required>

                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom23">Report Period</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="validationCustom23" placeholder="" required>

                            </div>
                          </div>
                        </div>



                        <div class="row">

                          <div class="col-md-4 mb-3">
                            <label for="validationCustom20">Appointment With</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustom20" placeholder="Enter Doctor Name" required>

                            </div>
                          </div>

                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Generate Report</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Generate & Print</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="../../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/perfect-scrollbar.js"> </script>
        <script src="../../assets/js/jquery-ui.min.js"> </script>
        <!-- Global Required Scripts End -->
        <!-- Page Specific Scripts Start -->
        <script src="../../assets/js/slick.min.js"> </script>
        <script src="../../assets/js/moment.js"> </script>
        <script src="../../assets/js/jquery.webticker.min.js"> </script>
        <!-- Page Specific Scripts Finish -->
        <!-- Page Specific Scripts Start -->
        <script src="../../assets/js/datatables.min.js"> </script>
        <script src="../../assets/js/data-tables.js"> </script>
        <!-- Docfindboard core JavaScript -->
        <script src="../../assets/js/framework.js"></script>
        <!-- Settings -->
        <script src="../../assets/js/settings.js"></script>
    </body>
</html>
