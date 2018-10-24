<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{

		//$curl = curl_init();

		/*curl_setopt_array($curl, array(
			CURLOPT_URL => "http://gitlab.bitstudio.io/api/v4/projects/", //v4/projects",
			CURLOPT_ENCODING => "K-rep_Z9MfpJ8rYoWJLy"
		));
		$dados = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		
		 if ($err) {
			//echo "cURL Error #:" . $err;
			return "entrou erro";
		}
		if ($dados) {
			//print_r(json_decode($dados));
			return json_decode($dados);
		//	return "entrou dados";

			//return view('welcome')->with(compact('dados'));
		}
		else{
			return "entrou else";
			//return view('welcome');
		} */

		$client = new GuzzleHttp\Client;
		$response = $client->get('https://gitlab.com/api/v4/projects', [
			'headers' => [
				'Authorization' => 'breNEEPs92WrzwAsWFsk',
			],
			'form_params' => [
				'VisitDate' => '2017-05-08',
				'PartySize' => '2',
				'ChannelCode' => 'ONLINE',
			],
		]);
		// You need to parse the response body
		// This will parse it into an array
		$response = json_decode($response->getBody(), true);		
		
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
