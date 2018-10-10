<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
	{
		/* $client = new Client(['base_uri' => 'http://gitlab.bitstudio.io/api/v4/issues']);
		$projects = $client->request('GET', 'api/v4//projects/PROJECT_ID?statistics=true',
		[
			'headers' => [
				'PRIVATE-TOKEN'     => 'dzaGyDgJBw4_EqexA9sx',
				'statistics'        => 'true'
				],
		]); */
		/* $client = \Gitlab\Client::create('http://gitlab.bitstudio.io/api/v4/issues')
		->authenticate('dzaGyDgJBw4_EqexA9sx', \Gitlab\Client::AUTH_URL_TOKEN)
		;
		$pager = new \Gitlab\ResultPager($client);
		$issues = $pager->fetchall($client->api('issues'),'all',[null, ['state' => 'closed']]);
		 */
		return view('welcome');
	}
}
