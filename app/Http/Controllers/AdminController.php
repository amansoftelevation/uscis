<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\UserDetail;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index(){
		
		$users = User::with(['user_detail'])->where('roll_id',1)->orderBy('id','DESC')->get();
		return view('provider.index')->with('users',$users);
	}
	
	
	public function provideradd($id = null){
		$pageData['title'] = 'Provider add';
		
		// die('wwwww');
		$client = (object)array(
				'email'=>'','phone'=>'','contact'=>'','name'=>'','dob'=>'','origin'=>'','gender'=>'','eyes'=>'','hair'=>'','address'=>'',
				'mailing_address'=>'','mailing_city'=>'','mailing_state'=>'','mailing_zip'=>'','shiping_address'=>'','shiping_city'=>'',
				'shiping_state'=>'','shiping_zip'=>'','card_rate'=>'','status'=>'','document'=>'','image'=>false
			);
		$pageData['form_action'] = 'admin/provider-add';
		if($id){
			$client = User::where('user_id',$id)->first();
			$userDetail = UserDetail::where('user_id',$id)->first();
			if($userDetail){
				$client->mailing_address = $userDetail->mailing_address;
				$client->mailing_city = $userDetail->mailing_city;
				$client->mailing_state = $userDetail->mailing_state;
				$client->mailing_zip = $userDetail->mailing_zip;
				$client->shiping_address = $userDetail->shiping_address;
				$client->shiping_city = $userDetail->shiping_city;
				$client->shiping_state = $userDetail->shiping_state;
				$client->shiping_zip = $userDetail->shiping_zip;
				$client->card_rate = $userDetail->card_rate;
			}else{
				$client->mailing_address = '';
				$client->mailing_city = '';
				$client->mailing_state = '';
				$client->mailing_zip = '';
				$client->shiping_address = '';
				$client->shiping_city = '';
				$client->shiping_state = '';
				$client->shiping_zip = '';
				$client->card_rate = '';
			}
		
			$pageData['form_action'] = 'admin/provider-add/'.$id;
		}
		// echo '<pre>';
		// print_r($client);
		// die;
		return view('provider.provideradd')->with('client',$client)->with('pageData',$pageData);
	}
	
	public function provideraddPost(Request $request,$id = null){
		if($id){
			$input = array(
						'name'=>$request->name,'contact'=>$request->contact,'phone'=>$request->phone_no,'email'=>$request->email,'roll_id'=>1,
						'status'=>'1'
					);
			User::where('user_id',$id)->update($input);
			$inputDteail = array(
							'mailing_address'=>$request->mailing_address,'mailing_city'=>$request->mailing_city,'mailing_state'=>$request->mailing_state,
							'mailing_zip'=>$request->mailing_zip,'shiping_address'=>$request->shiping_address,'shiping_city'=>$request->shiping_city,
							'shiping_state'=>$request->shiping_state,'shiping_zip'=>$request->shiping_zip,'card_rate'=>$request->card_rate
						);
			UserDetail::updateOrCreate(array('user_id'=>$id),$inputDteail);
			// where('user_id',$id)->update($inputDteail);	
			$message = 'Provider update successfully';
		}else{
			$user_id = rand(111111,999999);
			$input = array(
						'name'=>$request->name,'contact'=>$request->contact,'phone'=>$request->phone_no,'email'=>$request->email,'roll_id'=>1,
						'user_id'=>$user_id,'status'=>$request->status
					);
			$inputDteail = array(
							'mailing_address'=>$request->mailing_address,'mailing_city'=>$request->mailing_city,'mailing_state'=>$request->mailing_state,
							'mailing_zip'=>$request->mailing_zip,'shiping_address'=>$request->shiping_address,'shiping_city'=>$request->shiping_city,
							'shiping_state'=>$request->shiping_state,'shiping_zip'=>$request->shiping_zip,'user_id'=>$user_id,'card_rate'=>$request->card_rate
						);
			$inputUser = User::insertGetId($input);
			UserDetail::insert($inputDteail);
			$message = 'Provider add successfully';
		}
		return Redirect::to('/admin/providers')->with('success_message',$message);
	}
	
	public function dashboard(){
		return view('dashboard');
	}
	
}
