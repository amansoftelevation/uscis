@extends('layout.client')

@section('content')


         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			{{Form::open(['url'=>url($form_action),'id'=>'general_form'])}}	
            <div class="page-breadcrumb bg-white">
               <div class="row align-items-center">
                  <div class="col-md-12 d-flex justify-content-between align-items-center">
                     <h3 class="page-title font-bold">Client Information</h3>
                     <button class="custom-btn-col">Save</button>
                  </div>
               </div>
            </div>
            <div class="client-detail-page mb-5 mt-5">
               <div class="container-detail">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="user-image-col">
                           <div class="avatar-wrapper">
							<?php if($client->image){ ?>
								<img class="profile-pic" src="{{ url('clients/'.$client->image) }}" />
							<?php }else{ ?>
								<img class="profile-pic" src="{{ url('clients/images/user-image.png') }}" />
							<?php } ?>
                              <div class="upload-button">
                                 <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                              </div>
                              <input class="file-upload" type="file" accept="image/*"/>
                           </div>
                           <h4 class="text-center">Upload Picture</h4>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="user-detail">
                              <div class="general-info">
                                 <h4 class="mb-4">Contact Information</h4>
                                 <div class="form-group">
                                    <label for="InputEmail1">Email address:</label>
                                    <input type="email" name="email" value="{{$client->email}}" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Phone Number:</label>
                                    <input type="number" name="phone_number" value="{{$client->phone}}" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter number">
                                 </div>
                              </div>
                              <div class="general-info mt-5">
                                 <h4 class="mb-4">General Information</h4>
                                 <div class="form-group">
                                    <label for="InputName">Name:</label>
                                    <input type="text" name="name" value="{{$client->name}}" class="form-control" id="InputEmail1" aria-describedby="emailName" placeholder="Enter name">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">DOB:</label>
                                    <input type="date" name="dob" value="{{$client->dob}}" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter Date of Birth">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Origin:</label>
                                    <input type="text" name="origin" value="{{$client->origin}}" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter origin">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Gender:</label>
                                    <select name="gender">
                                       <option @if($client->gender === 'Male') ? selected : '' @endif>Male</option>
                                       <option @if($client->gender === 'Female') ? selected : '' @endif>Female</option>
                                       <option @if($client->gender === 'Other') ? selected : '' @endif>Other</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Eyes:</label>
                                    <input type="text" name="eyes" value="{{$client->eyes}}" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter eyes">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Hair:</label>
                                    <input type="text" name="hair" value="{{$client->hair}}" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter hair">
                                 </div>
                              </div>
                              <div class="general-info mt-5">
                                 <h4 class="mb-4">Application Status</h4>
                                 <div class="form-group">
                                    <label for="InputSelect">Status:</label>
                                    <select name="status">
                                       <option @if($client->status === 'Do Not Remote From USA') ? selected : '' @endif>Do Not Remote From USA</option>
                                       <option @if($client->status === 'Valid') ? selected : '' @endif>Valid</option>
                                       <option @if($client->status === 'In Valid') ? selected : '' @endif>In Valid</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="general-info mt-5">
                                 <h4 class="mb-4">Additional Document</h4>
                                 <div class="form-group">
                                    <label for="InputSelect">Status:</label>
                                    <select name="document">
                                       <option @if($client->document === 'Do Not Remote From USA') ? selected : '' @endif>Do Not Remote From USA</option>
                                       <option @if($client->document === 'Valid') ? selected : '' @endif>Valid</option>
                                       <option @if($client->document === 'In Valid') ? selected : '' @endif>In Valid</option>
                                    </select>
                                 </div>
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