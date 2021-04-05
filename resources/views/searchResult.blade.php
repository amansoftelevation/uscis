@extends('layout.app')

@section('content')

		<section class="search-banner-section">
			 <div class="container">
				<div class="search-result-banner">
				   <p class="text-uppercase identify-p">Identification</p>
				   <h2 class="result-heading text-uppercase mb-0">Search Result</h2>
				</div>
			 </div>
		  </section>
		  
		 <section class="searc-id-detail">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="searchid-img">
					@if($client->image)
						<img src="{{$client->image}}" align="user-image">
					@else
						<img src="images/id-img.png" align="user-image">
					@endif
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="detail-section">
                     <p class="text-gray-custom text-uppercase">Status</p>
                     @if($client->status === 'Valid')<button class="text-uppercase detail-btn-cstm">Do Not Remote From USA</button>@endif
                     <p>the cardholder has a <b>VALID</b> application currently being processed by USCIS</p>
                     <div class="detail-col-user border-top">
                        <p><span>Name:</span> {{$client->name}}</p>
                        <p><span>DOB:</span> {{$client->dob}}</p>
                        <p><span>Origin:</span> {{$client->origin}}</p>
                        <p><span>Gender:</span> {{$client->gender}}</p>
                        <p><span>Eyes:</span> {{$client->eyes}}</p>
                        <p><span>Hair:</span> {{$client->hair}}</p>
                     </div>
                     <div class="detail-col-user p-detail-col border-top mt-0">
                        <p>Please contact attorney on record with any immigration issues:<br>
                           <b>Law Offices of sanjay Sobti</b>
						   @if($admin->user_detail)
						   {{$admin->user_detail->mailing_address.' '.$admin->user_detail->mailing_city.' '.$admin->user_detail->mailing_state.' ('.$admin->user_detail->mailing_zip.')'}}
							@endif
						</p>
                        <button type="submit" class="text-uppercase new-search-btn" onclick="location.href='index.html'">New Search</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

@endsection