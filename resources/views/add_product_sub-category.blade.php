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
                                            <li class="breadcrumb-item"><a href="">cpanel/dashboard" class="breadcrumb-link">Manage Homepage</a></li>
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
                                <h3 class="small-heading">Product Sub-Category</h3>
                                <form  action="{{route('create_subcategory')}}" method="post">
                                   @csrf  
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Category</span></div>
                                            <select name="category" class="form-control btn-rounded">
                                             

                                                <option  value="">Select </option>
                                                @if(!empty($category))
                                                @foreach($category as $cli)
                                                <option value="{{$cli->id}}" >{{$cli->name}}</option>
                                                @endforeach
                                                @endif
                                                </select>

                                    </div>

                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Sub-Category</span></div>
                                        <input type="text" name="name[]" placeholder="Enter Sub-Category Name" class="form-control btn-rounded">
                                    </div>
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend"><span class="input-group-text"></span></div>
                                          <button type="" class="btn btn-rounded btn-warning pull-left">Add More&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                    </div>


                                 
                                    
                                    <button type="submit" class="btn btn-rounded btn-warning pull-right">Submit&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>                      
                                </form>


                        <table class="table">
                                    <thead>
                                    <tr>
                                    <th>Category Name</th>
                                    <th>Sub-Category Name</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-primary table-striped">
                                      <?php foreach($row as $r){ ?>
                                      <tr>
                                        
                                         @if(!empty($r->category_name->name))
                                <td>{{$r->category_name->name}}</td>
                                @endif 
                                      <td>{{$r->name}}</td>    
                                        <td><a href="" class="btn btn-danger" onclick="return confirm('Are You Sure?');">Delete</a></td>
                                      </tr>
                                      <?php } ?>
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
