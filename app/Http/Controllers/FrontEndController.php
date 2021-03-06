<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;


class FrontEndController extends Controller
{
    public function homePage() {
    	$client = new Client(['base_uri' => 'http://www.mocky.io/v2/']);
        $response = $client->request('GET', '5c67eb6b3800002615b100ff');
        if($response->getStatusCode() == 200){
            $allergens = json_decode($response->getBody()->getContents())->items;
        }

    	return view('home')->with('allergens', $allergens);
    }

    public function foodListPage() {
    	return view('FoodList')->with('foodLists', Session::get('data'));
    }
}
