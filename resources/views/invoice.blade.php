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
                                <h3 class="small-heading">Invoice</h3>
                                
                                <div class="container bootstrap snippets bootdeys">
                                <div class="row">
                                  <div class="col-sm-12">
                                        <div class="panel panel-default invoice" id="invoice">
                                          <div class="panel-body">
                                            
                                            <div class="row">
                                                
                                                <div class="col-md-12 top-right">
                                                        <h6 class="text-center">TAX INVOICE</h6>
                                                        <h3 class="text-center" style="margin-top: -10px;">RAJ SUPER WHOLESALE BAZAR</h3>
                                                        <h6 class="text-center" style="margin-top: -10px;">45, AMBA PRASAD TIWARI MARG UJJAIN-MP-456001</h6>
                                                        <h6 class="text-center" style="margin-top: -10px;">Tel No. : 0734-4060723, 9993736333</h6>
                                                </div>
                                                <div class="col-md-12">
                                                        <h6><b>GSTIN NUMBER : </b>&nbsp;09BPTPK3043N1Z8</h6>
                                                        <h6><b>D.L. NUMBER : </b>&nbsp;</h6>
                                                </div>
                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                        
                                                <div class="col-md-6 to">
                                                    <h6>Bill to / Ship to</h6>
                                                    <h3 style="margin-top: -15px;">RAJ DATA PROCESSORS</h3>
                                                    <h6 style="margin-top: -10px;">45, DAULATGANJ</h6><br>
                                                    
                                                    
                                                    <h4>UJJAIN</h4>
                                                    <h6 style="margin-top: -15px;"><b>State: </b>Madhya Pradesh &nbsp; <b>Code : </b>(23)</h6>
                                                    <br>
                                                    
                                                    <h4 style="margin-top: -20px;">GSTIN No.:</h4>
                                                    <h4 style="margin-top: -20px;">D.L. No.:</h4>
                                                    <h4 style="margin-top: -20px;">PAN No.:</h4>
                                
                                                </div>
                                                
                                                <div class="col-md-6 text-right payment-details">
                                                    <h6>Tax is Payable On Reverse Charge : NO</h6>
                                                    <h6>Place of Supply &nbsp;<b>State: </b>Madhya Pradesh &nbsp;<b>Code:</b> (23)</h6><br>
                                                    
                                                            <h6>Bill No. : &nbsp; &nbsp;2254 &nbsp;&nbsp;&nbsp;&nbsp; Bill Date : 27/02/2019</h6>
                                                            <h6 style="margin-right: 22px; margin-top: -10px;">Challan No. : 1234 &nbsp;&nbsp;&nbsp;Date : 27/7/2020</h6>
                                                            <h6 style="margin-right: 38px; margin-top: -10px;">L.R. No. : 2345&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-right: -10px; margin-top: -10px;">Date : 27/7/2020</span></h6>
                                                            <h6 style="margin-right: 98px; margin-top: -10px;">Transport : 56412&nbsp;&nbsp;</h6>
                                                            <h6 style="margin-right: 55px; margin-top: -10px;">Cases : 2456&nbsp;&nbsp;&nbsp;Due Days : 20</h6>
                                                </div>
                                
                                            </div>
                                
                                            <div class="row table-row">
                                                <div class="col-md-12"><hr></div>
                                                <table class="table table-striped">
                                                    
                                                  <thead>
                                                    <tr>
                                                      <th class="text-center" style="width:5%">#</th>
                                                      <th style="width:50%">DESCRIPTION</th>
                                                      <th class="text-right" style="width:15%">HSN</th>
                                                      <th class="text-right" style="width:15%">PACK</th>
                                                      <th class="text-right" style="width:15%">COST % </th>
                                                      <th style="width:50%">Price</th>
                                                      <th class="text-right" style="width:15%">SGST %</th>
                                                      <th class="text-right" style="width:15%">IGST %</th>
                                                      <th class="text-right" style="width:15%">BATCH</th>
                                                      <th class="text-right" style="width:15%">EXP</th>
                                                      <th class="text-right" style="width:15%">MRP</th>
                                                      <th class="text-right" style="width:15%">QTY</th>
                                                      <th class="text-right" style="width:15%">RATE</th>
                                                      <th class="text-right" style="width:15%">AMOUNT RS</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-center">1</td>
                                                      <td>Basmati Rice</td>
                                                      <td class="text-right">125463</td>
                                                      <td class="text-right">1000</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">25000</td>
                                                      <td class="text-right">2%</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">2</td>
                                                      <td>Basmati Rice</td>
                                                      <td class="text-right">125463</td>
                                                      <td class="text-right">1000</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">25000</td>
                                                      <td class="text-right">2%</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">3</td>
                                                      <td>Basmati Rice</td>
                                                      <td class="text-right">125463</td>
                                                      <td class="text-right">1000</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">25000</td>
                                                      <td class="text-right">2%</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                    </tr>
                                                     <tr class="last-row">
                                                      <td class="text-center">4</td>
                                                      <td>Basmati Rice</td>
                                                      <td class="text-right">125463</td>
                                                      <td class="text-right">1000</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">25000</td>
                                                      <td class="text-right">2%</td>
                                                      <td class="text-right">500</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                      <td class="text-right">5%</td>
                                                      <td class="text-right">600</td>
                                                      <td class="text-right">30000</td>
                                                    </tr>
                                                   </tbody>
                                                </table>
                                                
                                            </div>
                                            
                                            <div class="row table-row">
                                                
                                                <div class="col-md-12"><hr></div>
                                                
                                                <table class="table table-striped">
                                                    
                                                  <thead>
                                                    <tr>
                                                      <th class="text-center" style="width:10%">HSN</th>
                                                      <th class="text-center" style="width:10%">GST % </th>
                                                      <th class="text-center" style="width:10%">TAXABLE RS</th>
                                                      <th class="text-center" style="width:10%">CGST RS</th>
                                                      <th class="text-center" style="width:10%">SGST RS</th>
                                                      <th class="text-center" style="width:10%">IGST %</th>
                                                      <th class="text-center" style="width:15%">GROSS AMOUNT RS</th>
                                                      <th class="text-center" style="width:15%"></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-center">1507</td>
                                                      <td class="text-center">5.00 %</td>
                                                      <td class="text-center">9807</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">LESS DISCOUNT RS.</td>
                                                      <td class="text-center">123636</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">1507</td>
                                                      <td class="text-center">5.00 %</td>
                                                      <td class="text-center">9807</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">I.G.S.T. RS.</td>
                                                      <td class="text-center">0.00</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">1507</td>
                                                      <td class="text-center">5.00 %</td>
                                                      <td class="text-center">9807</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">C.G.S.T.RS.</td>
                                                      <td class="text-center">0.0031</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">1507</td>
                                                      <td class="text-center">5.00 %</td>
                                                      <td class="text-center">9807</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">0.00</td>
                                                      <td class="text-center">S.G.S.T.RS.</td>
                                                      <td class="text-center">0.0031</td>
                                                    </tr>
                                                   </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="row table-row">
                                                
                                                <div class="col-md-12"><hr></div>
                                                
                                                <table class="table table-striped">
                                                    
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-center" style="width: 60%;">Rupees Three Thousand Four Hundred Seventy-Three Only</td>
                                                      <td class="text-center" style="width: 25%;"><b>Net Amount Rs.</b></td>
                                                      <td class="text-center" style="width: 15%;"><b>34566</b></td>
                                                    </tr>
                                                   </tbody>
                                                </table>
                                            </div>
                                
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr><br><br><br>
                                                    <h6 class="float-right"><b>( Authorised Signatory )</b></h6>
                                                </div>
                                            </div>
                                            
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <script src="assets/js/jquery-3.3.1.min.js"></script>
  
    <script src="assets/js/bootstrap.bundle.js"></script>

@endsection
