<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

date_default_timezone_set('America/Santiago');




Route::get('/', function () {
  $datos =file_get_contents("https://api.coindesk.com/v1/bpi/currentprice/usd.json");
  $json=json_decode($datos,true);
  $fecha = date('d-m-Y H:i:s');
  $bitcoin=request('bitcoin');
  if ($bitcoin<=0) {
    $bitcoin=1;
  }

foreach ($json['bpi'] as $b => $bit) {
    foreach ($bit as $d => $dolar) {} };

$dolarbit=$dolar*$bitcoin;
$clp=$dolarbit*700;

$dolarParse=number_format((float)$dolarbit,2 ,"," ,"." );
$clpParse=number_format((float)$clp,2,',','.'); 


return view('welcome',compact('fecha','dolarParse','clpParse','bitcoin'));
});


Route::get('/json', function () {
  $datos =file_get_contents("https://api.coindesk.com/v1/bpi/currentprice/usd.json");
  $json=json_decode($datos,true);

    foreach ($json['bpi'] as $u => $usd) {
        foreach ($usd as $key => $dolar) {
        }  
    };

    $clp=$dolar*700;
    $precio []= array("clp" => "$clp");
    json_encode($precio);     
     
    return $precio;
     
});