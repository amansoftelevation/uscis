@extends('layout.client')

@section('content')


		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="change-pass-col-page mb-5 mt-5">
               <div class="container-detail">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="admin-change-pass-col ">
                           <form>
                              <h3 class="page-title font-bold t text-center w-100 mb-5">Reset Your Password</h3>
                              <div class="form-group">
                                    <label for="InputNumber">Old Password:</label>
                                    <input type="password" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter old password">
                                 </div>
                              <div class="form-group">
                                    <label for="InputNumber">New Password:</label>
                                    <input type="password" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Enter new password">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputNumber">Confirm New Password:</label>
                                    <input type="password" class="form-control" id="InputNumber" aria-describedby="emailHelp" placeholder="Confirm new password">
                                 </div>
                                 <button class="custom-btn-col w-100">Change Password</button>
                           </form>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
		
        

@endsection