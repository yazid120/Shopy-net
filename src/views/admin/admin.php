<?php
if(session_status() == PHP_SESSION_NONE)
session_start();

include_once __DIR__.'/admin_component/header.php';

?>
<body>
<?= '<h1> admin place</h1>';?>
<div class="main-wrapper">


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
    --
<ul>
<li class="menu-title">
</li>
<li class="active">
<a href="index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-users"></i> <span> Users</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="users.html">Users</a></li>
<li><a href="blocked-users.html">Blocked User</a></li>
<li><a href="report-users.html">Report User</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-sync"></i> <span> History </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="call-history.html"> Call History </a></li>
<li><a href="group-history.html"> Group History </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-gear"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="general.html">General</a></li>
<li><a href="admob.html">Admob </a></li>
<li><a href="sinch-settings.html">Sinch Settings </a></li>
<li><a href="firebase-settings.html">Firebase Settings </a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
</li>
<li>
<a href="vector-maps.html"><i class="fe fe-map"></i> <span>Vector Maps</span></a>
</li>
<li>
 <a href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-layout"></i> <span> Forms <span class="menu-arrow"></span></span></a>
<ul style="display: none;">
<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
<li><a href="form-input-groups.html">Input Groups</a></li>
<li><a href="form-horizontal.html">Horizontal Form</a></li>
<li><a href="form-vertical.html">Vertical Form </a></li>
<li><a href="form-mask.html">Form Mask</a></li>
<li><a href="form-validation.html">Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-table"></i> <span> Tables <span class="menu-arrow"></span></span></a>
<ul style="display: none;">
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-primary">
<i class="fe fe-users"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">User Count</a>
<a href="#" class="count"> 10,320</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-warning">
<i class="fe fe-phone"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Call Duration</a>
<a href="#" class="count"> 14,628</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-danger">
<i class="fe fe-comments"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Chat Count</a>
<a href="#" class="count"> 2,980</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title float-start">User List</h4>
<div class="table-search float-end">
<input type="text" class="form-control" placeholder="Search">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</div>
</div>
<div class="card-body">
<div class="table-responsive no-radius">
<table class="table table-hover table-center">
<thead>
<tr>
<th>User Id</th>
<th>User Name</th>
<th class="text-center">Joined Date</th>
<th class="text-center">Last Seen</th>
<th class="text-end">Status</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-nowrap">
<div class="font-weight-600">001</div>
</td>
<td class="text-nowrap">Scott Albright</td>
<td class="text-center">20 Jan 2019</td>
<td class="text-center">
15 mins ago
</td>
<td class="text-end">
<div class="font-weight-600 text-danger">Inactive</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div class="font-weight-600">002</div>
</td>
<td class="text-nowrap">Kevin Howard</td>
<td class="text-center">10 Mar 2019</td>
<td class="text-center">
Just Now
</td>
<td class="text-end">
<div class="font-weight-600 text-success">Active</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div class="font-weight-600">003</div>
</td>
<td class="text-nowrap">Eric Knight</td>
<td class="text-center">
24 Jun 2019</td>
<td class="text-center">
1 hr ago
</td>
<td class="text-end">
<div class="font-weight-600 text-success">Inactive</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div class="font-weight-600">004</div>
</td>
<td class="text-nowrap">Irene Perkins</td>
<td class="text-center">
09 Sep 2019</td>
<td class="text-center">
3 mins ago
</td>
<td class="text-end">
<div class="font-weight-600 text-success">Active</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div class="font-weight-600">005</div>
</td>
<td class="text-nowrap">Carol Andre</td>
<td class="text-center">10 Oct 2020</td>
<td class="text-center">
1 day ago
</td>
<td class="text-end">
<div class="font-weight-600 text-danger">Inactive</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>

</body>

<?php 
include_once __DIR__.'/admin_component/footer.php';
?>