<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Darbaari | Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/custom.css">

   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="">
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
                            Welcome <strong>{{ Auth::user()->name}}</strong><i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name}}</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                               <!--  <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off mr-2"></i>Logout</a> -->

           <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off mr-2"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
         
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
                                            <a class="nav-link" href="add_product_category">Add Product Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_product_sub-category">Add Sub Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add-products">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin-about.html">Transfer Product Stock</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view-stock">View stock</a>
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
                                            <a class="nav-link" href="add-store-category">Create Store Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add-store-registration">Store Registration</a>
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
                                            <a class="nav-link" href="list-store-registration">Supplier/Store</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice">Invoice</a>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
