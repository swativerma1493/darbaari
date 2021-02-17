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
                                <form method="post" action="{{route('add_store')}}">
                                    @csrf 
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
                                        <input type="text" name="name" placeholder="Enter Category Name" class="form-control btn-rounded">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Category</span></div>
                                            <select name="parent" class="form-control btn-rounded">
                                                <option value="0">No Parent</option>
                                                <?php
                                                  foreach($row as $r){
                                                ?> 
                                                <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                                <?php
                                                  }
                                                ?>
                                            </select>
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
