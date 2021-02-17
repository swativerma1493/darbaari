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
