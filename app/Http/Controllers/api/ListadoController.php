<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vuelo;
use App\Hotel;
use App\Cotizador;
use Carbon\Carbon;

class ListadoController extends Controller
{
    public function index(){
    	$data['vuelos'] = Vuelo::all();
    	$data['hoteles'] = Hotel::all();
    	return json_encode($data);
    }

    public function postCotizacion(Request $request){
    	$cotizador = new Cotizador;
    	$cotizador->vuelo_id = $request->vuelo['id'];
    	$cotizador->hotel_id = $request->hotel['id'];
    	$cotizador->num_lugares = $request->lugares;
    	$cotizador->total = $request->total;
    	$cotizador->save();

    	$data = Carbon::now();
        $date = date('Y-m-d');
        $vuelo = $request->vuelo;
        $hotel = $request->hotel;
        $total = $request->total;
     	
     	$view =  \View::make('pdf.cotizacion', compact('data', 'date', 'vuelo', 'hotel', 'total'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('invoice');
    }

    public function getCotizaciones(){
    	$cotizaciones = Cotizador::paginate(10);
    	return json_encode($cotizaciones);
    }

    public function getCotizacionDetails($id){
    	$cotizacion = Cotizador::find($id);
    	$response["vuelo"] = Vuelo::find($cotizacion->vuelo_id);
    	$response["hotel"] = Hotel::find($cotizacion->hotel_id);
    	$response["cotizacion"] = $cotizacion;
    	return json_encode($response);
    }
}
