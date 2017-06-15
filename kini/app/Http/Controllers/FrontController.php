<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; // Para hacer consultas SQL


class FrontController extends Controller
{

    /*
	public function __construct(){
		$this->middleware('auth', ['only'=>'admin']); //para que solo se aplique a la ruta "admin"

	}*/



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$fechas = DB::select('SELECT fecha FROM numeros order by fecha DESC LIMIT 8', [1]);    
        //return view('index',['fechas'=>$fechas]);
    }


    public function showStatis(){
        return view('statistics');
    }


    public function carga(){

        return view('load');
    }
    

    public function reviews(){

    }

    public function admin(){

    }

    public function sorteos($fecha){

        $algo = new NumberController;

        $frases=$algo->elige_frase();    

        $fechas = DB::select('SELECT fecha FROM numeros order by fecha DESC LIMIT 8', [1]);

    	$filas = DB::select("SELECT * FROM numeros WHERE fecha='$fecha' LIMIT 1", [1]);

        return view('sorteos',['filas'=>$filas,'fechas'=>$fechas , 'frases'=>$frases]);
    }

    public function numerosSignificados(){

        $algo = new NumberController;

        $frases=$algo->elige_frase();

        return view('suenos',['frases'=>$frases]);
    }

    public function profesiones(){
        $algo = new NumberController;

        $frases=$algo->elige_frase();

        return view('profesiones',['frases'=>$frases]);   
    }


    public function animales(){
        $algo = new NumberController;

        $frases=$algo->elige_frase();

        return view('animales',['frases'=>$frases]);   
    }

    public function futbol(){
        $algo = new NumberController;

        $frases=$algo->elige_frase();

        return view('futbol',['frases'=>$frases]);   
    }

    public function nombres(){
        $algo = new NumberController;

        $frases=$algo->elige_frase();

        return view('nombres',['frases'=>$frases]);   
    }
    
}
