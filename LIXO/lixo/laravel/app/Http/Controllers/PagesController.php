<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use vendor\autoload;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
   }

   /**
     * Retorna JSON com lista de amigos
     *
     * @return Response
     */
    public function amigos()
    {
		
		$ch = curl_init("'PRIVATE-TOKEN: 9AgBi674yykXAo7Gd_yf' https://gitlab.com/api/v4/issues");

$fp = fopen("pagina_exemplo.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

                $amigos = [
                               ['nome' => 'José Silva', 'idade' => 22],
                               ['nome' => 'Maria José', 'idade' => 20],
                               ['nome' => 'João Pinheiro', 'idade' => 35]
                ];
  
                return $fp;
    }
}





