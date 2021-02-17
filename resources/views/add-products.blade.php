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
                                <h3 class="small-heading"> Add Products</h3>
                                <a href="view-stock" class="btn btn-success">List Product</a>
                                <form method="post" action="{{route('add_products')}}">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-12 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Product Category</span></div>
                                            <select name="category" class="form-control btn-rounded">
                                             

                                                <option  value="">Select Category</option>
                                                @if(!empty($category))
                                                @foreach($category as $cli)
                                                <option value="{{$cli->id}}" >{{$cli->name}}</option>
                                                @endforeach
                                                @endif
                                                </select>
                                        </div>
                                        <div class="col-md-12 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Sub-Category</span></div>
                                            <select name="subcategory" class="form-control btn-rounded">
                                                <option  value="">Select Sub-Category</option>
                                                @if(!empty($subcategory))
                                                @foreach($subcategory as $sub)
                                                <option value="{{$sub->id}}" >{{$sub->name}}</option>
                                                @endforeach
                                                @endif
                                                </select>
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Product Name</span></div>
                                            <input type="text" name="product" placeholder="Name of Product" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Product Price</span></div>
                                            <input type="text" name="price" placeholder="Product Price" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">HSN</span></div>
                                            <input type="text" name="hsn" placeholder="HSN" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">SGST</span></div>
                                            <input type="text" name="sgst" placeholder="SGST" class="form-control btn-rounded">
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">IGST</span></div>
                                            <input type="text" name="igst" placeholder="IGST" class="form-control btn-rounded" required="">
                                        </div>
                                        <div class="col-md-6 input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">CGST</span></div>
                                            <input type="text" name="cgst" placeholder="CGST" class="form-control btn-rounded" required="">
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
