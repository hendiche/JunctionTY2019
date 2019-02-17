<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipeId = 43215;
        $client = new client();
        $response = $client->request('GET','https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/' . $recipeId . '/information', 
        ['headers' => ['X-RapidAPI-Key' => 'fce84bdd65msh9340789ab474c49p170d1ajsn3b7244498eac']]);

        if($response->getStatusCode() == 200) {
            return json_decode($response->getBody()->getContents());
        }else{
            return null;
        }
    }

    //private function findFullRecipe($recipeId){
        
        //replace recipe name spaces with cross
        //$recipeName = str_replace(" ", "+", $recipeName);

        // $client = new client();
        // $response = $client->request('GET','https://edamam-edamam-nutrition-analysis.p.rapidapi.com/api/nutrition-data?ingr='.$menu.'?fields=*', 
        // ['headers' => ['X-RapidAPI-Key' => 'fce84bdd65msh9340789ab474c49p170d1ajsn3b7244498eac']]);

        // if($response->getStatusCode() == 200) {
        //     $nutritions = json_decode($response->getBody()->getContents());
        // }
        //dd($nutritions);
    //}

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
        //
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
}
