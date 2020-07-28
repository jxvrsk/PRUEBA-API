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
foreach ($json['bpi'] as $b => $bit) {
    foreach ($bit as $d => $dolar) {} };

$dolarr=number_format((float)$dolar,0,',','.'); 
$clp=$dolar*700;
$clpp=number_format((int)$clp,0,'','.');

return view('welcome',compact('fecha','dolarr','clpp'));
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