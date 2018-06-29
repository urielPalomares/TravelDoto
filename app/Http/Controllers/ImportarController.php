<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Excel;

class ImportarController extends Controller
{
    public function index(){
    	return view("importar.index");
    }

     public function cargar_datos(Request $request)
	{
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
	   $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;

       dd($ruta);
       
       if($r1){
       	    $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
		        
		        $hoja->each(function($fila) {
		        	dd($fila);
			        $usersemails=User::where("email","=",$fila->email)->first();
			        if(count( $usersemails)==0){
				      	$usuario=new User;
				        $usuario->nombres= $fila->nombres;
				        $usuario->apellidos= $fila->apellidos;
				        $usuario->email= $fila->email;
				        $usuario->telefono= $fila->telefono; //este campo llamado telefono se debe agregar en la base de datos c
				        $usuario->pais= $fila->pais;
				        $usuario->ciudad= $fila->ciudad;
				        $usuario->institucion= $fila->institucion;
		                $usuario->ocupacion= $fila->ocupacion;
		                $usuario->password= bcrypt($fila->password);
		                $usuario->save();
	                }
		     
		        });

            });

            return view("mensajes.msj_correcto")->with("msj"," Usuarios Cargados Correctamente");
    	
       }
       else
       {
       	    return view("mensajes.msj_rechazado")->with("msj","Error al subir el archivo");
       }

	}

}
