<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CuacaController extends Controller {

public function index()
{
  
    $city='';
    if(empty($_POST['kota']))  
   {  
    $city= '';  
   }  
   else  $city= $_POST['kota'];  

   if(isset($_POST['go']))   
  {   
    
    $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=55d4998ca3933b88aa3799f828a4acf9");

        $data = json_decode($json);
       
        echo 'The weather of ', $data->name, ' (', $data->sys->country, ')' ,' at ' . date("jS \of F Y") ;
        
        foreach ($data->weather as $weather) {
            echo  ' is ',$weather->description;
        }
  } 
}
}
