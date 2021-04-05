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
    public function dashboard(){
		return view('dashboard');
	}
	
	public function client(){
		$users = User::where('roll_id',3)->orderBy('id','DESC')->get();
		return view('client.client')->with('users',$users);
	}
	
	
	public function clientDetail($id = null){
		$client = (object)array(
				'email'=>'','phone'=>'','name'=>'','dob'=>'','origin'=>'','gender'=>'','eyes'=>'','hair'=>'',
				'status'=>'','document'=>'','image'=>false
			);
		$form_action = 'provider/client-add';
		if($id){
			$client = User::where('user_id',$id)->first();
			$form_action = 'provider/client-add/'.$id;
		}
		return view('client.clientDetail')->with('client',$client)->with('form_action',$form_action);
	}
	
	
	public function clientAddPost(Request $request,$id = null){
		if($id){
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'status'=>$request->status,'document'=>$request->document
					);
			User::where('user_id',$id)->update($input);
			$message = 'Client update successfully';
		}else{
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'status'=>$request->status,'document'=>$request->document,'user_id'=>rand(111111,999999),'roll_id'=>3,'provider_id'=>Auth::user()->id
					);
			User::insert($input);
			$message = 'Client add successfully';
		}
		return Redirect::to('/provider/client')->with('success_message',$message);
	}
}
