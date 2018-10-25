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

//Get Projects list via API
$header = array('PRIVATE-TOKEN: 36zGuzvFhSSr2dBY8Bdb');

//milestone $ch = curl_init('http://gitlab.bitstudio.io/api/v4/projects/70/milestones?private_token=36zGuzvFhSSr2dBY8Bdb');
//projetos geral = 
$ch = curl_init('http://gitlab.bitstudio.io/api/v4/projects/?private_token=36zGuzvFhSSr2dBY8Bdb');
//Issues = $ch = curl_init('http://gitlab.bitstudio.io/api/v4/projects/70/milestones/issues?private_token=36zGuzvFhSSr2dBY8Bdb');
//$ch = curl_init('http://gitlab.bitstudio.io/api/v4/projects/70?private_token=36zGuzvFhSSr2dBY8Bdb');
// buscou projeto especifico = 70 

// para artigo : $ch = curl_init('http://gitlab.exemplo/api/v4/projects/?private_token=<private token fornecido>');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
if($result=="")
{
	$result="nada";
}
//Parse returned list to an array
$projectsArray= json_decode($result, true);

return json_encode($projectsArray,true);
/* if($projectsArray==true)
	{
		
		return "return result= ok -  $result";//json_decode($result, true);
	}
else
	{
		return " return result = nada -  $result";
	} */

//Faça um loop sobre a matriz de projetos que acessam a lista de tags por meio da API
/* foreach ($projectsArray as $project) {
  echo $project["name"] . " Tags:<br>";

  $tagURL = "https://https://https://gitlab.bitstudio.io/api/v3/projects/" . $project["id"] . "/repository/tags";
  $ch2 = curl_init($tagURL);
  curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch2, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  $result2 = curl_exec($ch2);
  curl_close($ch2);

  $tagsArray= json_decode($result2, true);
  foreach ($tagsArray as $tag) {echo $tag["name"] . "<br>";}
  echo "<br>";
} */
		
	}
}
