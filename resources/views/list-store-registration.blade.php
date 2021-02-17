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
                                <a href="add-store-registration" class="btn btn-success">+Create</a>
                                <form class="float-right" action="" method="post">
                                    <input type="text" name="search" placeholder="Search"><input type="submit" name="save" value="Search" class="btn btn-primary" style="padding-top:5px; padding-bottom:5px;">
                                  </form>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>S.No</th>
                                        <th>Store ID</th>
                                        <th>Store Type</th>
                                        <th>Name of Store</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th><i class="fas fa-bell-slash"></i></th>
                                        <th><i class="fas fa-eye"></i></th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-primary table-striped">
                                         @if(!empty($cases))
                            @foreach($cases as $cs)
                            <tr>
                                <td>{{$cs->id}}</td>
                                <td>{{$cs->store_id}}</td>
                                <td>{{$cs->store_type}}</td>
                                <td>{{$cs->store_name}}</td>
                                <td>{{$cs->address}}</td>
                                <td>{{$cs->mobile_no}}</td>
                                <td>{{$cs->email}}</td>
                                
                                 <td><a href="http://wa.me/+918340560096" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i></a></td>
                                        <td><a href="" class="btn btn-secondary"><i class="fas fa-eye-slash"></i></a></td>
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
