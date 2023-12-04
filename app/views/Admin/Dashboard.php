<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agrisync</title>
  <!-- plugins:css -->
  <link  href="public/adminuser/vendors/feather/feather.css" rel="stylesheet">
  <link href="public/adminuser/vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
  <link href="public/adminuser/vendors/css/vendor.bundle.base.css" rel="stylesheet"> 
  <!-- Plugin css for this page -->
  <link href="public/adminuser/vendors/datatables.net-bs4/dataTables.tstrap4.css" rel="stylesheet">
  <link href="public/adminuser/vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="public/adminuser/css/vertical-layout-light/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="public/agrisync/images/na.png" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/agrisync/images/nal.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
        </div>         
      </li>
      <li class="nav-item nav-profile dropdown">
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary" ></i>
            Settings
          </a>
          <a class="dropdown-item" href="">
            <i class="ti-power-off text-primary" ></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="/">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
   </div>
     </nav>
    </div>
    
  <div class="container-fluid page-body-wrapper">
  <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-success border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>

        </ul>
     
          <!-- chat tab ends -->
        </div>
      
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
       <li class="nav-item">
       <a class="nav-link" href="/home">
         <i class="icon-contract menu-icon"></i>
         <span class="menu-title">Home</span>
       </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="/Dashboard">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>

     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="#auth">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">OrientalMindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="auth">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/OrminDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OrminTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Occidental Mindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/OcciDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OcciTab">Table</a></li>
             </ul>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Palawan</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="form-elements">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/PalDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/PalTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Romblon</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="charts">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/RomDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/RomTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Marinduque</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="icons">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/MarDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/MarTab">Table</a></li>
             </ul>
       </div>
     </li>

       <li class="nav-item">
         <a class="nav-link" href="/Report">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Report</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/Table">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Table</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/ChangePass">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Change Password</span>
         </a>
       </li>
    
    
       <li class="nav-item">
         <a class="nav-link" href="/">
           <i class="icon-head menu-icon"></i>
           <span class="menu-title">Log Out</span>
         </a>
       </li>


     </ul>
  </nav>



  <div class="main-panel">
  <div class="content-wrapper">
           <div class="row">
             <div class="col-md-12 grid-margin">
               <div class="row">
                 <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                   <h3 class="font-weight-bold">Welcome To Agrisync</h3>
                   <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
                 </div>
                 <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                   <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                     <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="mdi mdi-calendar"></i> Today (4 Nov 2023)
                     </button>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                       <a class="dropdown-item" href="#">January - March</a>
                       <a class="dropdown-item" href="#">March - June</a>
                       <a class="dropdown-item" href="#">June - August</a>
                       <a class="dropdown-item" href="#">August - November</a>
                     </div>
                   </div>
                  </div>
                 </div>
               </div>
               <br>
               <br>
               <div class="row">
                 <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                   <div class="card card-light-blue">
                     <div class="card-body">
                       <p class="mb-4">Number of Farmers</p>
                       <p class="fs-30 mb-2">34040</p>
                       <p>2.00% (30 days)</p>
                     </div>
                   </div>
                 </div>
         
             
             <div class="col-md-6 grid-margin transparent">
               <div class="row">
                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-tale">
                     <div class="card-body">
                       <p class="mb-4">Total Damage </p>
                       <p class="fs-30 mb-2">4006</p>
                       <p>10.00% (30 days)</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-dark-blue">
                     <div class="card-body">
                       <p class="mb-4"> Standing Crop</p>
                       <p class="fs-30 mb-2">61344</p>
                       <p>22.00% (30 days)</p>
                     </div>
                   </div>
                 </div>
               </div>
                        
                 <div class="col-md-6 stretch-card transparent">
                   <div class="card card-light-danger">
                     <div class="card-body">
                       <p class="mb-4">Number of Cans Damage</p>
                       <p class="fs-30 mb-2">47033</p>
                       <p>0.22% (30 days)</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             </div>
             <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <p class="card-title">Seedling date</p>
                   <p class="font-weight-500"></p>
                   <div class="d-flex flex-wrap mb-5">
                     <div class="mr-5 mt-3">
                       <p class="text-muted"></p>
                       <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                     </div>
                     <div class="mr-5 mt-3">
                       <p class="text-muted">January</p>
                       <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                     </div>
                     <div class="mr-5 mt-3">
                       <p class="text-muted">March</p>
                       <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                     </div>
                     <div class="mt-3">
                       <p class="text-muted">May</p>
                       <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                     </div> 
                   </div>
                   <canvas id="order-chart"></canvas>
                 </div>
               </div>
               <div class="col-md-12 grid-margin stretch-card">
             <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                  <div class="d-flex justify-content-between">
                   <p class="card-title">Reports</p>
                                </div>
                   <p class="font-weight-500">Total Damage </p>
                   <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                   <canvas id="sales-chart"></canvas>
                 </div>
               </div>
             </div>
             <div class="col-md-12 grid-margin stretch-card">
             <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                  <div class="d-flex justify-content-between">
                   <p class="card-title">Reports</p>
                                </div>
                   <p class="font-weight-500">Total Damage </p>
                   <div id="sale-legend" class="chartjs-legend mt-4 mb-2"></div>
                   <canvas id="sale-chart"></canvas>
                 </div>
               </div>
             </div>
           </div>
           </div>
           
                </div>
 
 
 
               <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
               <div class="card position-relative">
                 <div class="card-body">
                   <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                     <div class="carousel-inner">
                       <div class="carousel-item active">
                         <div class="row">
                           <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                             <a href="/Report" class="text-info">View all</a>
                             <div class="ml-xl-4 mt-3">
                           
                             <p class="card-title">Detailed Reports</p>
                           
                               <h1 class="text-primary">Oriental Mindoro </h1>
                               <h3 class="font-weight-500 mb-xl-4 text-primary"></h3>
                               <p class="mb-2 mb-xl-0">Report</p>
                             </div>  
                             </div>
                           <div class="col-md-12 col-xl-9">
                             <div class="row">
                               <div class="col-md-6 border-right">
                                 <div class="table-responsive mb-3 mb-md-0 mt-3">
                                   <table class="table table-borderless report-table">
                                     <tr>
                                       <td class="text-muted">Number of farmers</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">1200</h5></td>
                                     </tr>
                                     <tr>
                                       <td class="text-muted">Number of Cans</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">1000</h5></td>
                                     </tr>
                                     <tr>
                                       <td class="text-muted">Standing Crops</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">924</h5></td>
                                     </tr>
                                     <tr>
                                       <td class="text-muted">Total Damaged of Heavy Rain</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">664</h5></td>
                                     </tr>
                                     <tr>
                                       <td class="text-muted">Tatal Damaged of Typhoon</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">560</h5></td>
                                     </tr>
                                     <tr>
                                       <td class="text-muted">No of Cans Damaged</td>
                                       <td class="w-100 px-0">
                                         <div class="progress progress-md mx-4">
                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                       </td>
                                       <td><h5 class="font-weight-bold mb-0">793</h5></td>
                                     </tr>
                                   </table>
                                 </div>
                               </div>
                               <div class="col-md-6 mt-3">
                                 <canvas id="north-america-chart"></canvas>
                                 <div id="north-america-legend"></div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                     </div>
                 </div>
          
 
          
               </div>
               </div>
               </div>
 
 
 
 
 
           
           </div>
                
        </div>
             
          
      
      </div>



</div>
  </div>


 
</div>

















<script src="public/adminuser/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src= "public/adminuser/vendors/chart.js/Chart.min.js"></script>
  <script src= "public/adminuser/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src= "public/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src= "public/adminuser/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src= "public/adminuser/js/off-canvas.js"></script>
  <script src= "public/adminuser/js/hoverable-collapse.js"></script>
  <script src= "public/adminuser/js/template.js"></script>
  <script src= "public/adminuser/js/settings.js"></script>
  <script src= "public/adminuser/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src= "public/adminuser/js/dashboard.js"></script>
  <script src= "public/adminuser/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

