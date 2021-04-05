@extends('layout.client')

@section('content')


         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			{{Form::open(['url'=>url($pageData['form_action']),'id'=>'general_form'])}}
            <div class="page-breadcrumb bg-white">
               <div class="row align-items-center">
                  <div class="col-md-12 d-flex justify-content-between align-items-center">
                     <h3 class="page-title font-bold">{{$pageData['title']}}</h3>
                     <button class="custom-btn-col">Save</button>
                  </div>
               </div>
            </div>
            <div class="client-detail-page mb-5 mt-5">
               <div class="container-detail">
					<div class="row">
                     <div class="col-md-7">
                        <div class="user-detail">
                              <div class="general-info">
                                 <div class="form-group">
                                    <label for="InputEmail1">Company Name:</label>
                                    <input type="name" class="form-control" name="name" value="{{$client->name}}" id="name" aria-describedby="nameHelp" placeholder="Law Offices of Sanjay Sobti">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputEmail1">Contact:</label>
                                    <input type="name" class="form-control" name="contact" value="{{$client->contact}}" id="name" aria-describedby="nameHelp" placeholder="Sanjay Sobti">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Phone:</label>
                                    <input type="number" class="form-control" name="phone_no" value="{{$client->phone}}" id="InputNumber" aria-describedby="phone Help" placeholder="Enter number">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Email:</label>
                                    <input type="email" class="form-control" name="email" value="{{$client->email}}" id="InputEmail" aria-describedby="Email Help" placeholder="Enter Email">
                                 </div>

                              </div>
                              <div class="general-info mt-5">
                                 <h4 class="mb-4">Mailing Address</h4>
                                 <div class="form-group">
                                    <label for="InputName">Address:</label>
                                    <input type="text" class="form-control" name="mailing_address" value="{{$client->mailing_address}}" id="InputEmail1" aria-describedby="textName" placeholder="Enter Address">
                                 </div>
                                 <div class="inputs-inline">
                                       <div class="form-group city-name">
                                          <label for="InputName">City:</label>
                                          <input type="text" class="form-control" name="mailing_city" value="{{$client->mailing_city}}" id="InputEmail1" aria-describedby="textName" placeholder="Enter City Name">
                                       </div>  
                                       <div class="form-group state">
                                          <span>State:</span>
                                          <input type="text" class="form-control" name="mailing_state" value="{{$client->mailing_state}}" id="InputEmail1" aria-describedby="textName" placeholder="">
                                       </div>   
                                    <div class="form-group zip">
                                       <span>Zip:</span>
                                       <input type="number" class="form-control" name="mailing_zip" value="{{$client->mailing_zip}}" id="InputNumber" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="general-info mt-5">
                                 <h4 class="mb-4">Shiping Address</h4>
                                 <div class="form-group">
                                    <label for="InputName">Address:</label>
                                    <input type="text" class="form-control" name="shiping_address" value="{{$client->shiping_address}}" id="InputEmail1" aria-describedby="textName" placeholder="Enter Address">
                                 </div>
                                 <div class="inputs-inline">
                                       <div class="form-group city-name">
                                          <label for="InputName">City:</label>
                                          <input type="text" class="form-control" name="shiping_city" value="{{$client->shiping_city}}" id="InputEmail1" aria-describedby="textName" placeholder="Enter City Name">
                                       </div>  
                                       <div class="form-group state">
                                          <span>State:</span>
                                          <input type="text" class="form-control" name="shiping_state" value="{{$client->shiping_state}}" id="InputEmail1" aria-describedby="textName" placeholder="">
                                       </div>   
                                    <div class="form-group zip">
                                       <span>Zip:</span>
                                       <input type="number" class="form-control" name="shiping_zip" value="{{$client->shiping_zip}}" id="InputNumber" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                 </div>
                              </div>
                           
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="general-info ml-md-4 ml-0">
                           <div class="form-group">
                                    <label for="InputName">Status:</label>
                                    <select name="status">
                                       <option value="Valid" @if($client->status === 'Valid') ? selected : '' @endif>Active</option>
                                       <option value="In Valid" @if($client->status === 'In Valid') ? selected : '' @endif>Deactive</option>
                                    </select>
                                 </div><div class="form-group city-name">
                                          <label for="InputName">Card Rate:</label>
                                          <input type="number" class="form-control" name="card_rate" value="{{$client->card_rate}}" id="InputEmail1" aria-describedby="textName" placeholder="$0000">
                                       </div> 
                                 <div class="form-group">
                                    <label for="InputName">Terms:</label>
                                    <select>
                                       <option>Invoice</option>
                                       <option>Voice</option>
                                    </select>
                                 </div>
                              </div>              
                     </div>
                  </div>
               </div>
            </div>
			{{Form::close()}}
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © USCIS <a
               href="#">uscis.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
         </div>
        

@endsection