<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    public function index()
    {
		// key: 'PRIVATE-TOKEN:1GyHq7woYCkESrqL52ks'
		// link: https://gitlab.com/api/v4/projects
		//link2: 'https://gitlab.bitstudio.io/api/v4/search?scope=projects&search=flight';
		//Usuario: $projectsArray[key_array]["owner"]["username"]

$header = array('PRIVATE-TOKEN: 36zGuzvFhSSr2dBY8Bdb');

$ch = curl_init('http://gitlab.bitstudio.io/api/v4/projects/?private_token=36zGuzvFhSSr2dBY8Bdb');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
$projectsArray= json_decode($result, true);


// verificar projectsArray recebido
		/* echo "<pre>";
		print_r($projectsArray[0]["id"]);
		ech o "</pre>"; */

		
	
	//return json_encode($projectsArray[2]["owner"]["username"],true);
	return view('welcome')->with(compact('projectsArray'));
	//return view('welcome');
	}
}
