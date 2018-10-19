<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
    {
	
		$teste =
		[
			['nome' => 'Santhiago', 'idade' => 25],
			['nome' => 'Santhiago D', 'idade' => 26],
			['nome' => 'Santhiago Pinto', 'idade' => 27],
		]; 
		
		/* return view('welcome'); */
		 /* return $teste;  */
		 return view('welcome')->with(compact('teste')); 
	}
}
