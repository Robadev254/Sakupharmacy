<?php
require ("../config.php");
if ($conn){
  session_start();

  if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in']){
      // echo ("Logged in");
      // // unset_session();
      // echo ("
      // <form action=\"logout.php\" method=\"POST\">
      //   <button type=\"submit\" name=\"logout\">Log out</button>
      // </form>
      // ");

      $sql= "SELECT * FROM admin WHERE idAdmin='{$_SESSION['idAdmin']}'";
      $result=mysqli_query($conn,$sql);
      $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
      if ($data){
        $admin_name= $data[0]['First_Name'];
      }


      // Doctors
      $dct_sql= "SELECT * FROM doctors";
      $dct_result=mysqli_query($conn,$dct_sql);
      $dct_data=mysqli_fetch_all($dct_result,MYSQLI_ASSOC);
      if ($dct_data){
        $doc_count=0;
        foreach ($dct_data as $dct) {
          $doc_count++;
        }
      }

      // Employees
      $emp_sql= "SELECT * FROM employee";
      $emp_result=mysqli_query($conn,$emp_sql);
      $emp_data=mysqli_fetch_all($emp_result,MYSQLI_ASSOC);
      $emp_count=0;
      if ($emp_data){
        
        foreach ($emp_data as $emp) {
          $emp_count++;
        }
      }
      //pharmacists
      $pharm_sql= "SELECT * FROM pharmacist";
      $pharm_result=mysqli_query($conn,$pharm_sql);
      $pharm_data=mysqli_fetch_all($pharm_result,MYSQLI_ASSOC);
      $pharm_count=0;
      if ($pharm_data){
          foreach ($pharm_data as $pharm) {
          $pharm_count++;
        }
      }
      // Patients
      $pat_sql= "SELECT * FROM admin WHERE idAdmin='{$_SESSION['idAdmin']}'";
      $pat_result=mysqli_query($conn,$pat_sql);
      $pat_data=mysqli_fetch_all($pat_result,MYSQLI_ASSOC);
      $pat_count=0;
      if ($pat_data){
          foreach ($pat_data as $pat) {
          $pat_count++;
        }
      }


    } 
  } else {
    // echo ("Not logged in");
    header("Location:../doc.php");
    

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SAKU PHARMACY</title>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-30aa0505-a44e-4e81-8731-34562a0bd2d4" data-elfsight-app-lazy></div>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- medboard styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="assets/css/morris.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
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
      <a class="ps-0 ms-0 text-center" href="index.php"> <img src="/Logo/Saku-logo.jpg" alt="logo" width="20" height="20"> </a>
      <a href="#" class="text-center ms-logo-img-link"> <img src="/Logo/Saku-logo.jpg" alt="logo" width="50" height="50"></a>
      <h5 class="text-center text-white mt-2">
        <!-- Dr.Anthony -->
    <?php
        if(isset($admin_name)){
          echo ($admin_name);
        } else {
          echo ("");
        }
    ?>
    
    </h5>
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
          <li> <a href="index.php">SAKUPHARMACY</a> </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- Doctor -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
          <span><i class="fas fa-stethoscope"></i>Doctor</span>
        </a>
        <ul id="doctor" class="collapse" aria-labelledby="doctor" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/doctor/add-doctor.php">Add Doctor</a> </li>
          <li> <a href="pages/doctor/doctor-list.php">Doctor List</a> </li>
        </ul>
      </li>
      <!-- Doctor -->
      <!-- Patient -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
          <span><i class="fas fa-user"></i>Patient</span>
        </a>
        <ul id="patient" class="collapse" aria-labelledby="patient" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/patient/add-patient.php">Add Patient</a> </li>
          <li> <a href="pages/patient/patient-list.php">Patient List</a> </li>
        </ul>
      </li>
      <!-- /Patient -->
      <!-- Department -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#department" aria-expanded="false" aria-controls="department">
          <span><i class="fas fa-sitemap"></i>Department</span>
        </a>
        <ul id="department" class="collapse" aria-labelledby="department" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/department/add-department.php">Add Department</a> </li>
          <li> <a href="pages/department/department-list.php">Department List</a> </li>
        </ul>
      </li>
      <!-- Department -->
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
                <!-- Report -->
       <!-- Human Resource -->
       <li class="menu-item">
               <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
               <span><i class="far fa-user-circle"></i>Human Resource</span>
               </a>
               <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-bs-parent="#side-nav-accordion">
                  <li> <a href="pages/human-resource/add-employee.php">Add Employee</a> </li>
                  <li> <a href="pages/human-resource/employee-list.php">Employee List</a> </li>
               </ul>
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
              <span> <i class="material-icons">event</i>1 November, 2022</span>
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
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="ps-0 ms-0 text-center navbar-brand me-0" href="index.html"><img src="assets/img/medboard-logo-84x41.png" alt="logo"> </a>
      </div>
      <div class="ms-toggler ms-d-block-sm pe-0 ms-nav-toggler" data-bs-toggle="slideDown" data-bs-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
    </nav>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <!-- Notifications Widgets -->

        <div class="col-xl-3 col-md-6 col-sm-6">
          <a href="#">
            <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
              <div class="ms-card-body media">
                <div class="media-body">
                  <h6>Doctors</h6>
                  <p class="ms-card-change"> 
                    <?php
                      echo($doc_count);
                    ?>
                  </p>
                </div>
              </div>
              <i class="fas fa-stethoscope ms-icon-mr"></i>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
          <a href="#">
            <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
              <div class="ms-card-body media">
                <div class="media-body">
                  <h6>Employees</h6>
                  <p class="ms-card-change">

                    <?php
                      echo ($emp_count);
                    ?>

                  </p>
                </div>
              </div>
              <i class="fas fa-user-plus ms-icon-mr"></i>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
          <a href="#">
            <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
              <div class="ms-card-body media">
                <div class="media-body">
                  <h6 class="bold">Patients</h6>
                  <p class="ms-card-change"> 
                    <?php
                      echo ($pat_count);
                    ?>
                  </p>
                </div>
              </div>
              <i class="fa fa-wheelchair ms-icon-mr"></i>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
          <a href="#">
            <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
              <div class="ms-card-body media">
                <div class="media-body">
                  <h6 class="bold">Pharmacists</h6>
                  <p class="ms-card-change">

                  <?php
                      echo ($pharm_count);
                    ?>
                  </p>
                </div>
              </div>
              <i class="fas fa-briefcase-medical ms-icon-mr"></i>
            </div>
          </a>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6 class="bold">Vacinations</h6>
                <h3><strong>39</strong></h3>
              </div>
            </div>
            <canvas id="line-chart-2"></canvas>
          </div>

          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>HIV preexposure prophylaxis </h6>
                <h3><strong>59</strong></h3>
              </div>
            </div>
            <canvas id="line-chart-3"></canvas>
          </div>

          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6 class="bold">PHARMACY Earning</h6>
                <h3><strong>Ksh.30,973</strong></h3>
              </div>
            </div>
            <canvas id="line-chart-4"></canvas>
          </div>

        </div>

        <div class="col-xl-4 col-md-12">

          <div class="ms-card ms-widget ms-profile-widget ms-card-fh br-0">
            <div class="ms-card-img">
              <img src="assets/img/portfolio/gallery-4-760x260.jpg" alt="card_img">
            </div>
            <img src="" class="ms-img-large ms-img-round ms-user-img" alt=" Dr Frank">
            <div class="ms-card-body">
              <h2>Frank Nzemia</h2>
              <span>Doctor</span>
              <p>Dr. Frank Nzemia is an exceptional physician whose unwavering dedication to patient care and profound medical expertise have left an indelible mark on those fortunate enough to be under his care. His compassionate approach and commitment to advancing healthcare make him a beacon of excellence in the medical field.</p>
              <button type="button" class="btn btn-primary btn-sm" name="button"><i class="material-icons">person_add</i> Assign</button>
              <ul class="ms-profile-stats">
                <li>
                  <h3 class="ms-count">57</h3>
                  <span>Operations</span>
                </li>
                <li>
                  <h3 class="ms-count">4.9</h3>
                  <span>Medical Rating</span>
                </li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-xl-4 col-md-12">

          <div class="ms-card ms-widget ms-profile-widget ms-card-fh br-0">
            <div class="ms-card-img">
              <img src="assets/img/portfolio/gallery-4-760x260.jpg" alt="card_img">
            </div>
            <img src="" class="ms-img-large ms-img-round ms-user-img" alt=" Dr Seb">
            <div class="ms-card-body">
              <h2> Sebastian Wanjala</h2>
              <span>Doctor</span>
              <p>Dr. Sabastian Wanjala is a remarkable physician, known for his outstanding medical proficiency and compassionate bedside manner. His unwavering commitment to patient well-being and the community's health underscores his invaluable contributions to the field of medicine.</p>
              <button type="button" class="btn btn-primary btn-sm" name="button"><i class="material-icons">person_add</i> Assign</button>
              <ul class="ms-profile-stats">
                <li>
                  <h3 class="ms-count">90</h3>
                  <span>Operations</span>
                </li>
                <li>
                  <h3 class="ms-count">4.9</h3>
                  <span>Medical Rating</span>
                </li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-xl-6 col-lg-12">
          <div class="ms-panel ms-device-sessions ms-quick-mic">
            <div class="ms-panel-header">
              <h6> Pharmacy Birth & Death Analytics</h6>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                  <i class="material-icons">airline_seat_flat</i>
                  <h4>Birth</h4>
                  <p class="ms-text-primary">45.07%</p>
                  <span class="ms-text-primary">201,434</span>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                  <i class="material-icons">airline_seat_individual_suite</i>
                  <h4>Death</h4>
                  <p class="ms-text-danger">29.05%</p>
                  <span class="ms-text-danger">134,693</span>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                  <i class="material-icons">accessible</i>
                  <h4>Accidents</h4>
                  <p class="ms-text-warning">18.43%</p>
                  <span class="ms-text-warning">81,525</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 45.07%" aria-valuenow="45.07" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 29.05%" aria-valuenow="29.05" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: 25.48%" aria-valuenow="25.48" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
              <h6>Hospital Staff</h6>
              <div class="ms-slider-arrow">
                <a href="#" class="prev-item">
                  <i class="far fa-caret-square-left"></i>
                </a>
                <a href="#" class="next-item">
                  <i class="far fa-caret-square-right"></i>
                </a>
              </div>
            </div>
            <div class="ms-panel-body p-0 ms-medical-overview-slider">
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src=" " class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Anny</h5>
                    <span>Doctor</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="">
                  <div class="ms-card-body">
                    <h5>Jude</h5>
                    <span>Surgeon</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="">
                  <div class="ms-card-body">
                    <h5>Jordan</h5>
                    <span>Doctor</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Micheal</h5>
                    <span>Nurse</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Rouge</h5>
                    <span>Doctor</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src=" " class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Lilly</h5>
                    <span>Surgeon</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Sameul</h5>
                    <span>Surgeon</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src=" " class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Ricky</h5>
                    <span>Doctor</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src=" " class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Venus</h5>
                    <span>Doctor</span>
                  </div>
                </a>
              </div>
              <div class="ms-crypto-overview">
                <a href="#" class="ms-profile">
                  <img src="" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                  <div class="ms-card-body">
                    <h5>Johan</h5>
                    <span>Nurse</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Patient Total</h6>
            </div>
            <div class="ms-panel-body">
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>


        <div class="col-xl-6 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Patient In</h6>
            </div>
            <div class="ms-panel-body">
              <canvas id="bar-chart-grouped"></canvas>
            </div>
          </div>
        </div>
          </div>
        </div>


        <div class="col-xl-6 col-lg-12">
          <div class="ms-panel ms-panel-fh ms-facebook-engagements">
            <div class="ms-panel-header">
              <h6>Doctor Engagements</h6>
            </div>
            <div class="ms-panel-body p-0">
              <div class="ms-facebook-page-selection">
                <p class="ms-text-dark">Jan 25, 2022 to Feb 02, 2022</p>
                <p>Jan 18, 2022 to Feb 24, 2022 (Prev)</p>

                <div class="dropdown">
                  <a href="#" class="has-chevron" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctor Name here</a>
                  <ul class="dropdown-menu">
                    <li class="ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Doctor 1</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Doctor 2</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Doctor 3</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <ul class="ms-list clearfix">
                <li class="ms-list-item">
                  <div class="d-flex justify-content-between align-items-end">
                    <div class="ms-graph-meta">
                      <h2>Weekday Engagement</h2>
                      <p class="ms-text-dark">45.07%</p>
                      <p class="ms-text-success">+28.44%</p>
                      <p>VS 66.68% (Prev)</p>
                    </div>
                    <div class="ms-graph-canvas">
                      <canvas id="engaged-users"></canvas>
                    </div>
                  </div>
                </li>
                <li class="ms-list-item">
                  <div class="d-flex justify-content-between align-items-end">
                    <div class="ms-graph-meta">
                      <h2>Weekend Engagement</h2>
                      <p class="ms-text-dark">45.07%</p>
                      <p class="ms-text-success">+28.44%</p>
                      <p>VS 66.68% (Prev)</p>
                    </div>
                    <div class="ms-graph-canvas">
                      <canvas id="page-impressions"></canvas>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- MODALS -->
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
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js"> </script>
  <script src="assets/js/jquery-ui.min.js"> </script>

  <!-- Global Required Scripts End -->
  <script src="assets/js/d3.v3.min.js"> </script>
  <script src="assets/js/topojson.v1.min.js"> </script>
  <script src="assets/js/datamaps.all.min.js"> </script>


  <!-- Page Specific Scripts Start -->
  <script src="assets/js/slick.min.js"> </script>
  <script src="assets/js/moment.js"> </script>
  <script src="assets/js/jquery.webticker.min.js"> </script>
  <script src="assets/js/Chart.bundle.min.js"> </script>
  <script src="assets/js/index-chart.js"> </script>

  <!-- Page Specific Scripts Finish -->
  <script src="assets/js/calendar.js"></script>
  <!-- medboard core JavaScript -->
  <script src="assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
</body>

</html>
