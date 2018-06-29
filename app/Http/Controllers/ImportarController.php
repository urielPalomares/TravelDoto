<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Excel;
use App\Vuelo;

class ImportarController extends Controller
{
    public function import_vuelo(){
    	$msj = "";
    	return view('importar.index', ['msj' => $msj]);
    }

     public function cargar_datos_vuelo(Request $request)
	{
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
	   $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;

       if($r1){
       	    $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
		        $hoja->each(function($fila) {
		        	if($fila->origen != null && $fila->hora_despegue != null && $fila->hora_aterrizaje != null && $fila->aerolinea != null && $fila->clase != null && $fila->tiempo_total_vuelo != null && $fila->cantidad_escalas != null){
				      	$vuelo =new Vuelo;
				        $vuelo->origen = $fila->origen;
				        $vuelo->destino = $fila->destino;
				        $vuelo->hora_despegue = $fila->hora_despegue;
				        $vuelo->hora_aterrizaje = $fila->hora_aterrizaje;
				        $vuelo->tiempo_total_vuelo = $fila->tiempo_total_vuelo;
				        $vuelo->aerolinea= $fila->aerolinea;
				        $vuelo->clase = $fila->clase;
				        $vuelo->cantidad_escalas = $fila->cantidad_escalas;
		                $vuelo->save();
	                }
		     
		        });

            });
            $msj =  1;
       }
       else{
       	    $msj = 0;
       }
       return view('importar.index', ['success' => $msj]);

	}

	public function import_hotel(){
    	return view('importar.index_hotel', ['success' => 1]);
    }

}
