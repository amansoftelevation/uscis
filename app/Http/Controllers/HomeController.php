<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use Twilio\Rest\Client;
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
			$authUser = Auth::user()->roll_id;
			if($authUser === 1){
				return Redirect::to('provider/dashboard');
			}else if($authUser === 2){
				return Redirect::to('admin/dashboard');
			}else{
				return Redirect::to('/');
			}
		} else {
			return Redirect::to('/')->with('invalid_login','Invalid email or password');
		}
	}
	
	

	
	public function adminProfile(){
		$userAuth = Auth::user();
		return view('adminProfile')->with('userAuth',$userAuth);
	}
	
	public function adminProfilePost(Request $request){
		
		$input = $request->all();
		unset($input['_token']);
		User::where('id',Auth::user()->id)->update($input);
		return Redirect::to('/admin-profile');
		
	}
	
	public function searchResult(Request $request){
		
		if($request->client){
			$admin = User::where('roll_id',2)->first();
			$client = User::where('user_id',$request->client)->first();
			if($client){
				return view('searchResult')->with('client',$client)->with('admin',$admin);
			}else{
				return Redirect::to('/')->with('invaid_cient','This is invaid ID Number');
			}
		}else{
			return Redirect::to('/')->with('invaid_cient','ID Number is requred');
		}
		
	}
	
	public function updateimage(){
		
		
		$account_sid = getenv("SKd046b216db3592fd987c14a7ea8a1f66");
		$auth_token = getenv("mipwys9ZRvqoQDXTknKvPyFxqq45EYL7");
		$twilio_number = getenv("+916239463839");
		
		$client = new Twilio\Rest\Client($account_sid, $auth_token);
		$message = $client->messages->create(
		  $twilio_number, // Text this number
		  [
			'from' => '+9178303000796', // From a valid Twilio number
			'body' => 'Hello from Twilio!'
		  ]
		);


		// $client = new Client($account_sid, $auth_token);
		// $client->messages->create($recipients, 
            // ['from' => $twilio_number, 'body' => 'wwwwwwwwwww'] );
			
			
		// $input = $_REQUEST;
		print_r($message);
		die('wwwwwwwwwww');
		// return view('changePassword');
	}
	
	public function changePasswordPost(Request $request){
		// $request = $request->all();
		if($request->new_password == $request->confirm_password){
			$password_sss = Hash::make($request->old_password);
			$userId = Auth::user();
			User::where('id',$userId->id)->update(array('password'=>$password_sss));
			return Redirect::to('/change-password')->with('success_message','Your password has been change successfully');
		}else{
			return Redirect::to('/change-password')->with('error_message','Your confirm password does not match');
		}
	}
	
	public function updateimagePost(Request $request){
		header('Access-Control-Allow-Origin:  *');
		header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
		header('Access-Control-Allow-Methods:  GET, POST, PUT, DELETE, OPTIONS');
		$request = $request->all();
		$image = $request['href'];
		$imageInfo = explode(";base64,", $image);     
		$image = str_replace(' ', '+', $imageInfo[1]);
		$file = base64_decode($image);
        $folderName = 'public/clients/';
        $safeName = time().'.png';
        $success = file_put_contents(public_path().'/clients/'.$safeName, $file);
		$safeName_image = 'clients/'.$safeName;
		User::where('user_id',$request['user_id'])->update(array('image'=>$safeName_image));
		return response()->json(['status' => 1], 200);
	}
	
	public function changePassword(){
		return view('changePassword');
	}
	
	public function webOpen(Request $request){
		if($request->user_id){
			$user_id = $request->user_id;
		}else{
			$user_id = '';
		}
		return view('web_open')->with('user_id',$user_id);
	}
}
