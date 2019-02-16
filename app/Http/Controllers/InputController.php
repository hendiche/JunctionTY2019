<?php

namespace App\Http\Controllers;

# Includes the autoloader for libraries installed with composer
//require __DIR__ . '/vendor/autoload.php';


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Google\Cloud\Storage\StorageClient;


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

    public function testPost(){
        return view('testview');
    }

    /**
     * Upload a file.
     *
     * @param string $bucketName the name of your Google Cloud bucket.
     * @param string $objectName the name of the object.
     * @param string $source the path to the file to upload.
     *
     * @return Psr\Http\Message\StreamInterface
     */
    function upload_object($bucketName, $objectName, $source)
    {
        try{

            # Your Google Cloud Platform project ID
            $projectId = 'project-junction';

            $storagePath = storage_path('app/public');
            # Instantiates a client
            $storage = new StorageClient([
                'projectId' => $projectId,
                'keyFilePath' => $storagePath . '/Project Junction-d6d6e7d64091.json'
            ]);

            # The name for the new bucket
            $bucketName = 'junctiontokyo2019';


            $file = fopen($source, 'r');
            $bucket = $storage->bucket($bucketName);
            $object = $bucket->upload($file, [
                'name' => $objectName
            ]);
            printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);

        }catch(Exception $err){
            echo 'upload error' . $err->getMessage();
        }
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('input_img')){
            $image = $request->file('input_img');

            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            //Storage::disk('local')->put($name, $image);
            $image->move($destinationPath, $name);


            //upload to google cloud
            $this->upload_object('junctiontokyo2019', $name, $destinationPath.'/'.$name);
        // return back()->with('success','Image Uploaded successfully');
        
        }
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
