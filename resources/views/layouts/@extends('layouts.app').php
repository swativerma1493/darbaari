@extends('layouts.app')

@section('content')
<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="admin-dashboard.html"><img src="assets/images/logo.png" class="img-responsive" /></a>
				<h3 class="ad">Admin <span>Dashboard</span></h3>
                <button class="navbar-toggler mobile" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-user"></i></span>
                </button>
                <div class="collapse navbar-collapse mobile" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="assets/images/logo-square.png" alt="" class="user-avatar-md rounded-circle mr-10">
							Welcome <strong>DARBAARI</strong><i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">DARBAARI</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="index.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none ad" href="#">Admin <span>Dashboard</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
								<a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Manage Inventory</a>
								<div id="submenu-1" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin-dashboard.html">Add Product Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin-menu.html">Add Sub Category</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="admin-slider.html">Add Product</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="admin-about.html">Transfer Product Stock</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="admin-speciality.html">View stock</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Manage Stores</a>
								<div id="submenu-2" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Create Store Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Store Registration</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Transfer Stock</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Delivery Note</a>
                                        </li>
                                    </ul>
                                </div>
							</li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Accounting &amp; Sales</a>
								<div id="submenu-3" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product (Direct Dealer Wise)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Accessories (Direct Dealer Wise)</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Sales Return</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Credit Note</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
								<a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Purchase</a>
								<div id="submenu-4" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Supplier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Purchase Bill</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Transfer Stock</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Damage Old Stock</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Purchase Return</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Manage Employee</a>
								<div id="submenu-5" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Create Employee Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Add Employee</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Set Role &amp; Permisson</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Create Login Type</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Manage Payments</a>
								<div id="submenu-6" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dealer Payments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Supplier Payments</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Customer Payments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-1">
								<i class="fa fa-fw fa-rocket"></i>Reports</a>
								<div id="submenu-7" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Employee</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Supplier/Store</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Product</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><span>Manage</span> Homepage</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="admin-dashboard.html" class="breadcrumb-link">Manage Homepage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Common Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <h3 class="small-heading">Page Properties</h3>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Page Title</span></div>
                                    <input type="text" placeholder="Enter Page Title" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Page URL</span></div>
                                    <input type="text" placeholder="Enter Page URL" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">SEO URL</span></div>
                                    <input type="text" placeholder="Enter SEO URL" class="form-control btn-rounded">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <h3 class="small-heading">Social Media Links</h3>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Facebook Link</span></div>
                                    <input type="text" placeholder="Enter Facebook Link" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Twitter Link</span></div>
                                    <input type="text" placeholder="Enter Twitter Link" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Instagram Link</span></div>
                                    <input type="text" placeholder="Enter Instagram Link" class="form-control btn-rounded">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <h3 class="small-heading">Contact Info</h3>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Email Id</span></div>
                                    <input type="text" placeholder="Enter email id" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Address</span></div>
                                    <input type="text" placeholder="Enter address of the company" class="form-control btn-rounded">
                                </div>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Mobile</span></div>
                                    <input type="number" placeholder="Enter address of the company" class="form-control btn-rounded">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <h3 class="small-heading">Company Logo</h3>
								<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Upload Logo</span></div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile">
										<label class="custom-file-label btn-rounded" for="customFile">Upload logo</label>
									</div>
								</div>
                                <a href="#" class="btn btn-rounded btn-warning pull-right">Submit&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             Copyright © UPMAVEN TECHNOLOGIES Pvt. Ltd.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
</div>
@endsection
