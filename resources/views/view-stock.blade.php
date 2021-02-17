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
                                <h3 class="small-heading"> List Products</h3>
                                <a href="" class="btn btn-success">Add Product</a>
                                <a href="" class="btn btn-success">List Product</a>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>S.No</th>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>HSN</th>
                                        <th>SGST</th>
                                        <th>IGST</th>
                                        <th>CGST</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-primary  table-striped">
                            @if(!empty($cases))
                            @foreach($cases as $cs)
                            <tr>
                                <td>{{$cs->id}}</td>
                                <td>{{$cs->category_name->name}}</td>
                                @if(!empty($cs->subcategory_name->name))
                                <td>{{$cs->subcategory_name->name}}</td>
                                
                                @else
                                <td>-</td>
                                @endif
                                <td>{{$cs->name}}</td>
                                <td>{{$cs->price}}</td>
                                <td>{{$cs->hsn}}</td>
                                <td>{{$cs->sgst}}</td>
                                <td>{{$cs->igst}}</td>
                                <td>{{$cs->cgst}}</td>
                                 <td><a href=""><i class="fas fa-edit"></i> </a>
                                          <a href="" onclick="return confirm('Are You Sure?');"><span><i class="fas fa-trash-alt"></i></span></a></td>
                            </tr>
                            @endforeach
                            @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <script src="assets/js/jquery-3.3.1.min.js"></script>
  
    <script src="assets/js/bootstrap.bundle.js"></script>

@endsection
