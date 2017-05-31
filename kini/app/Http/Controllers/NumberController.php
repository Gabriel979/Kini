<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Number;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Validator; //Estas línea es para poder usar el  "error de Validator" y make.
use Illuminate\Support\Facades\DB; // Para hacer consultas SQL



class NumberController extends Controller
{

    protected $filas= array();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fechas = DB::select('SELECT fecha FROM numeros order by fecha DESC LIMIT 8', [8]); //el [8] reemplaza al LIMIt 8, pero igual lo pongo
        
        $this->prediccion();

        return view('index',['filas'=>$this->filas],['fechas'=>$fechas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('load');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*catch(\Illuminate\Database\QueryExceptions $e){
            Session::flash('message-errors', 'Error al intentar guardar la información!!');
            //vardump($e->getMessage());
            return Redirect::to('/cargar');
        }*/
        
        $v=Validator::make($request->all(), ['f1c1'=>'required|numeric|min:0|max:45','f1c2'=>'required|numeric|min:0|max:45','f1c3'=>'required|numeric|min:0|max:45',
            'f1c4'=>'required|numeric|min:0|max:45','f1c5'=>'required|numeric|min:0|max:45','f1c6'=>'required|numeric|min:0|max:45',
            'f2c1'=>'required|numeric|min:0|max:45','f2c2'=>'required|numeric|min:0|max:45','f2c3'=>'required|numeric|min:0|max:45',
            'f2c4'=>'required|numeric|min:0|max:45','f2c5'=>'required|numeric|min:0|max:45','f2c6'=>'required|numeric|min:0|max:45',
            'f3c1'=>'required|numeric|min:0|max:45','f3c2'=>'required|numeric|min:0|max:45','f3c3'=>'required|numeric|min:0|max:45',
            'f3c4'=>'required|numeric|min:0|max:45','f3c5'=>'required|numeric|min:0|max:45','f3c6'=>'required|numeric|min:0|max:45',
            'f4c1'=>'required|numeric|min:0|max:45','f4c2'=>'required|numeric|min:0|max:45','f4c3'=>'required|numeric|min:0|max:45',
            'f4c4'=>'required|numeric|min:0|max:45','f4c5'=>'required|numeric|min:0|max:45','f4c6'=>'required|numeric|min:0|max:45',
            'fecha'=>'required|date' ]);

        if($v->fails()){
            Session::flash('message-errors', 'Error al intentar guardar los datos!!');    
            return redirect('/cargar')->withErrors($v)->withInput();
        }

        Number::create($request->all());
        Session::flash('message', 'Números guardados correctamente!');
        return Redirect::to('/cargar');  

    }

        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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


    /* para algoritmo de prediccion */

    protected function prediccion(){

        for($i=0; $i<4 ;$i++){
            for ($j=0; $j<6 ; $j++) { 
                $this->filas[$i][$j]=random_int(0, 45);
            } 
        }

        $seis = array('0' => 99,'1' => 99,'2' => 99,'3' => 99, '4' => 99, '5' => 99 );

        /* Validar que no se repitan los numeros de la fila */
        for($j=0; $j<4 ;$j++){          // las 4 filas de numeros
            for ($i=0; $i <6 ; $i++){   // las 6 bolillas de cada fila

                if($i==0){
                    $nuevo=random_int(0, 45);
                    $this->filas[$j][$i]=$nuevo;
                    $seis[0]=$nuevo;    
                }
                

                //se guarda el primer valor de la fila ($nuevo) y luego los otros 5 se tiene que preguntar si estan repetidos
                if($i!=0){
                    $otro=random_int(0, 45);
                    $n=0;
                                
                    while( $n<6 ){ 

                        if($seis[$n]==$otro){
                            $otro=random_int(0, 45);
                            $n=0;   
                        }

                        if($seis[$n]!=$otro) $n++;
                    }

                    $seis[$i]=$otro;
                    $this->filas[$j][$i]=$otro;

                }
                  
            }
        }
    }


}
