<?php
if(session_status() == PHP_SESSION_NONE)
session_start();

require_once __DIR__.'/../action/Db_Class_conn.php'; 
require_once __DIR__.'/../action/db_conn.php';
require_once __DIR__.'/../action/adminDisplayClass.php';

$Db_Object = new Db_connect(); 
$connection_s = $Db_Object->connect(); 

#Recent Customers (Client method)
$Admin_Object = new adminDisplay();
?>

<?php
include_once __DIR__.'/admin_component/header.php';
?>

<body>
  <!--  Body Wrapper Side bar -->
  <div class="side_bar_container_admin" id="mySidebar">
    <aside>
      <div class="side_bar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
      <ul id="sidebarnav" class="side_bar_navigation">
            <li class="nav-small-cap">
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Admin Display</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/client_managment" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Client list</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/product_list" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Product list</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
      </div>
    </aside>
  </div>
  <div id="main">
    <button class="openbtn" onclick="openSidebar()">&#9776; Open Sidebar</button>
  </div>

<div class="classic_row">
  <div class="card p-2">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">administrateur yazid! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>

    <div class="card-body bg-white p-2 rounded-md">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
    </div>

    <div class="card-body bg-white p-2 rounded-md">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
    </div>
</div>

  <!--- - Chart js graph admin - ---->
  <h1>Graph track</h1>
  <div class="chart_classic_wrapp_container">
    <div class="boxi_01 box">
     <canvas id="myChart"></canvas>
    </div>
    <div class="boxi_02 box">
     <canvas id="myChart-02"></canvas>
    </div>
  </div>

  <!-- Admin management fill (product-clients) -->
  <h1>admin space </h1>

  <div class="box_fomat_container_managment">
    <div class="list_set_orders nlc_box">
    <div class="banner_head_info">
    <h2>Recent Orders</h2>
     <span class="view_all">view all</span>
    </div>
    </div>

    <div class="list_set_clients nlc_box">
    <div class="banner_head_info">
     <h2>Recent Customers</h2>
     <span class="view_all">view all</span>
    </div>
    <table class="table table-hover table-center">
<thead>
  <tr>
    <th class="px-6">User Id</th>
    <th>User Name</th>
    <th class="text-center">email</th>
    <th class="text-center">sexe</th>
    <th class="text-center">date inscription</th>
    
  </tr>
</thead>
<tbody>
<?php
echo $Admin_Object->DisplayUserbyRole($connection_s); 
?>
</tbody>
</table>

  </div>
</div>



<div id="table" onload="Table();">
</div>
<script type="text/javascript">
  function Table(){
    const xhttp = new XMLHttpRequest; 
    xhttp.onload = function(){
      document.getElementById('table').innerHTML = this.responseText; 
    }
    xhttp.open('GET','https://localhost/Shopy-net/src/views/action/adminDisplayClass.php');
    xhttp.send();
  }

  setInterval(function(){
    Table();
  },1);

</script>

<?php 
 include_once __DIR__.'/admin_component/footer.php';
?>