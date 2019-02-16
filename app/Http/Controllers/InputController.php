<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;


class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $client = new Client(['base_uri' => 'http://www.mocky.io/v2/']);
         $response = $client->request('GET', '5c67eb6b3800002615b100ff');
        if($response->getStatusCode() == 200){
            $allergens = json_decode($response->getBody()->getContents())->items;
        }
        //send list of allergens to frontend
        dd($allergens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store the user's input to local storage
        Storage::disk('local')->put('allergy.txt', $request->getBody());
        dd($request->getBody());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getRecipeList(Request $request)
    {
        $title = request('title');
        
        $client = new client();
        $response = $client->request('GET', 'https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?number=10&offset=0&query='.$title, ['headers' => [
          'X-RapidAPI-Key' => 'fce84bdd65msh9340789ab474c49p170d1ajsn3b7244498eac']]);

        if($response->getStatusCode() == 200){
            $recipes = json_decode($response->getBody()->getContents());
        }
      
        dd($recipes);
    }

    public function getNutrition(Request $request) {
      $menu = "pizza";

      $client = new client();
      $response = $client->request('GET','https://nutritionix-api.p.rapidapi.com/v1_1/search/'.$menu.'?fields=*', 
        ['headers' => ['X-RapidAPI-Key' => 'fce84bdd65msh9340789ab474c49p170d1ajsn3b7244498eac']]);

      if($response->getStatusCode() == 200) {
        $nutritions = json_decode($response->getBody()->getContents());
      }
      dd($nutritions);
    }
}
