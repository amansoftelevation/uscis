<?php
// use Auth;

if (! function_exists('user_url')) {
	
    function user_url($value) {
		
		if(Auth::user()->roll_id == 1){
			return 'provider/'.$value;
		}else if(Auth::user()->roll_id == 2){
			return 'admin/'.$value;
		}else{
			return 'provider/'.$value;
		}
		
        // $token= '251e40bf7def2e9d52dc5332eede9798ea04dce671b1bb5c55ea0a8ed5354e36';
        // return $token;
    }
}

?>
