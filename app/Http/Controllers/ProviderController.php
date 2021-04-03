<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;


class ProviderController extends Controller
{
    public function index(){
		
		$users = User::where('roll_id',3)->orderBy('id','DESC')->get();
		return view('provider.index')->with('users',$users);
	}
	
	
	public function provideradd($id = null){
		$pageData['title'] = 'Provider add';
		$client = (object)array(
				'email'=>'','phone'=>'','name'=>'','dob'=>'','origin'=>'','gender'=>'','eyes'=>'','hair'=>'',
				'status'=>'','document'=>'','image'=>false
			);
		$pageData['form_action'] = 'provider-add';
		if($id){
			$client = User::where('user_id',$id)->first();
			$pageData['form_action'] = 'provider-add/'.$id;
		}
		return view('provider.provideradd')->with('client',$client)->with('pageData',$pageData);
	}
	
	public function provideraddPost(Request $request,$id = null){
		
		if($id){
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'roll_id'=>3,'status'=>$request->status,'document'=>$request->document
					);
			$message = 'Provider update successfully';
			User::where('user_id',$id)->update($input);
		}else{
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'roll_id'=>3,'status'=>$request->status,'document'=>$request->document,'user_id'=>rand(111111,999999)
					);
			$message = 'Provider add successfully';
			User::insert($input);
		}
		return Redirect::to('/providers')->with('success_message',$message);
	}
	
	
}
