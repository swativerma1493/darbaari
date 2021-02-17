@extends('layouts.header')

@section('content')
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
                                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Manage Homepage</a></li>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="small-heading">Store Category</h3>
                                <form method="post" action="{{route('store_reg')}}">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-12 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Name of Store</span></div>
                                            <input type="text" name="store_name" placeholder="Name of Store" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Owner First Name</span></div>
                                            <input type="text" name="first_name" placeholder="Owner First Name" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Middle Name</span></div>
                                            <input type="text" name="middle_name" placeholder="Middle Name" class="form-control btn-rounded">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Last Name</span></div>
                                            <input type="text" name="last_name" placeholder="Last Name" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-12 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Address</span></div>
                                            <textarea class="form-control btn-rounded" placeholder="Write Address" name="address" required=""></textarea>
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">City</span></div>
                                            <input type="text" name="city" placeholder="City" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">State</span></div>
                                            <input type="text" name="state" placeholder="State" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Pin Code</span></div>
                                            <input type="number" name="pin_code" placeholder="Pin Code" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                            <input type="email" name="email" placeholder="Email" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Mobile No</span></div>
                                            <input type="text" name="mobile_no" placeholder="Mobile No" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">WhatsApp No</span></div>
                                            <input type="text" name="whatsapp_no" placeholder="WhatsApp No" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Store Type</span></div>
                                                <select name="store_type" class="form-control btn-rounded" required="">
                                                    <?php
                                                      foreach($row as $r){
                                                    ?> 
                                                    <option value="<?php echo $r->name; ?>"><?php echo $r->name; ?></option>
                                                    <?php
                                                      }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                            <input type="password" name="password" placeholder="WhatsApp No" class="form-control btn-rounded" required="">
                                        </div>
                                         <div class="col-md-4 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Confirm Password</span></div>
                                            <input type="password" name="password_confirmation" placeholder="WhatsApp No" class="form-control btn-rounded" required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-warning pull-right">Submit&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>                      
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <script src="assets/js/jquery-3.3.1.min.js"></script>
  
    <script src="assets/js/bootstrap.bundle.js"></script>

@endsection
