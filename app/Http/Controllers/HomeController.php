<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index(){
		return view('welcome');
	}
	
	public function loginPost(Request $request){
		$userdata = array(
			'email'     => $request->email,
			'password'  => $request->password
		);
		if(Auth::attempt($userdata)) {
			return Redirect::to('dashboard');
		} else {
			return Redirect::to('/')->with('invalid_login','Invalid email or password');
		}
	}
	
	
	public function clientAddPost(Request $request,$id = null){
		if($id){
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'status'=>$request->status,'document'=>$request->document
					);
			User::where('user_id',$id)->update($input);
		}else{
			$input = array(
						'email'=>$request->email,'phone'=>$request->phone_number,'name'=>$request->name,'dob'=>$request->dob,
						'origin'=>$request->origin,'gender'=>$request->gender,'eyes'=>$request->eyes,'hair'=>$request->hair,
						'status'=>$request->status,'document'=>$request->document,'user_id'=>rand(111111,999999)
					);
			User::insert($input);
		}
		return Redirect::to('/client');
	}
	
	public function dashboard(){
		return view('dashboard');
	}
	
	public function client(){
		$users = User::where('roll_id',1)->get();
		return view('client')->with('users',$users);
	}
	
	public function clientDetail($id = null){
		$client = (object)array(
				'email'=>'','phone'=>'','name'=>'','dob'=>'','origin'=>'','gender'=>'','eyes'=>'','hair'=>'',
				'status'=>'','document'=>''
			);
		$form_action = 'client-add';
		if($id){
			$client = User::where('user_id',$id)->first();
			$form_action = 'client-add/'.$id;
		}
		return view('clientDetail')->with('client',$client)->with('form_action',$form_action);
	}
	
	public function adminProfile(){
		return view('adminProfile');
	}
	
	public function searchResult(Request $request){
		
		if($request->client){
			$client = User::where('user_id',$request->client)->first();
			if($client){
				return view('searchResult')->with('client',$client);
			}else{
				return Redirect::to('/');
			}
		}else{
			return Redirect::to('/');
		}
		
	}
	
	public function changePassword(){
		return view('changePassword');
	}
	
	public function webOpen(){
		return view('web_open');
	}
}
