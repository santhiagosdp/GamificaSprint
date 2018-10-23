<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
		$chamada = curl_init();

		curl_setopt_array($chamada, array(
			CURLOPT_URL => "http://gitlab.bitstudio.io/api/v4/projects",
			CURLOPT_ENCODING => "zu5-RDVygKduky5yjxmt"
		));
		$resp = curl_exec($chamada);
	//	$err = curl_error($curl);
	//	curl_close($curl);
	//	if ($err) {
		//	echo "cURL Error #:" . $err;
	//	} 
	//	else {
			//return json_encode($response);
			//print_r(json_decode($response));
//
//			return view('welcome', compact('response'));
//		}
        return view('welcome');
   }
}
