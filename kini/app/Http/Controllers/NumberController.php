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


// 12/3 sigue fallando el control de numeros repetidos en la fila!!!!!!!!!!!!!!

class NumberController extends Controller
{

    protected $cuenta_repeticiones=array();
    protected $cant_num_repet;
    protected $filas= array();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        /* Setea variables a cero*/
        $this->cant_num_repet=0;

        for ($i=0; $i<46 ; $i++){
            $this->cuenta_repeticiones[$i]=0;
        }
        
        $this->prediccion();
        //$this->cuenta_repetidos();

        $this->cambia_repetidos();

        return view('index',['filas'=>$this->filas]);
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
        
        Validator::make($request->all(), ['valor'=>'required|numeric|min:0|max:45']);

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
                $this->cuenta_repeticiones[$this->filas[$i][$j]]++; // va contando la cantidad de repeticiones!!
            } 
        }
        /* Validar que no se repitan los numeros de la fila */
        for($j=0; $j<4 ;$j++){          
            for ($i=0; $i <6 ; $i++){

                $buscado= $this->filas[$j][$i];

                for ($k=0; $k<6 ; $k++) { 
                    if($buscado == $this->filas[$j][$k] && $i!=$k ){
                        $flag=1;
                        for($h=0; $flag!=0 ; $h++) { 

                            $nuevo=random_int(0, 45);

                            if($this->cuenta_repeticiones[$nuevo]==0){     
                                $this->filas[$j][$i]=$h;
                                $this->cuenta_repeticiones[$h]++;
                                $flag=0; 
                            }    
                        }
                    } 
                }  
            }
        }
    }

    /* Contar repeticiones */
    /*protected function cuenta_repetidos(){

        for ($i=0; $i<4 ; $i++) { 
        
            for ($j=0; $j<6 ; $j++){ 
                
                $num=$this->filas[$i][$j];

                $this->cuenta_repeticiones[$num]++;
            }
        }
    } */           
               

    protected function cambia_repetidos(){

        $cantidad=0;
        $valores=array();
        $j=0;

        for ($i=0; $i <46 ; $i++) { 
            if($this->cuenta_repeticiones[$i]>1){
                $cantidad++;
                $valores[$j]=$i;
                $j++;
            }
        }

        if($cantidad >3){
            $this->localiza_valor($valores, $cantidad);

        }
    }

    protected function localiza_valor(array $valores,int $cantidad){
        $flag=1;

        for ($i=0; $i<4 && $flag!=0 ; $i++) {
            for ($j=0; $j<6 && $flag!=0 ; $j++){
                for ($k=0; $k<$cantidad && $flag!=0 ; $k++) { 
                    if($this->filas[$i][$j]==$valores[$k]){
                        
                        for($h=0; $h<46 && $flag!=0 ; $h++) { 
                           if($this->cuenta_repeticiones[$h]==0)     
                                $this->filas[$i][$j]=$h;
                                $flag=0; 
                        }
                    }
                } 
            }
        }
    }



}
