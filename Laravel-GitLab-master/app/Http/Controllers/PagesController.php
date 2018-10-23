<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://gitlab.bitstudio.io/api/v4/projects",
			CURLOPT_ENCODING => "zu5-RDVygKduky5yjxmt"
		));
		$response = curl_exec($curl);
		$response = null;
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			echo "cURL Error #:" . $err;
		} 
		else {
			//return json_encode($response);
			//print_r(json_decode($response));

			return view('welcome')->with(compact('response'));
		}

		$teste =
			[
			['nome' => 'Santhiago', 'idade' => 25],
			['nome' => 'Santhiago D', 'idade' => 26],
			['nome' => 'Santhiago Pinto', 'idade' => 27],
		]; 
		
		/* return view('welcome'); */
		 /* return $teste;  */
		//return view('welcome')->with(compact('teste'));
	}
}
