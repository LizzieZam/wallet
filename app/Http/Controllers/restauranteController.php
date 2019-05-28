<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurante;
class restauranteController extends Controller
{
    public function __construct( restaurante $restaurante )
    {
		
      
        $this->restaurante = $restaurante;
    }

    public function index(){
	
		return \App\restaurante::all();
		
	}
	public function show($id){
		return \App\restaurante::find($id);
	}
	public function store(Request $request){
        $data =$request->all();

     
		return \App\restaurante::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\restaurante::findOrFail($id);
        
		return $row;
	}
	public function delete($id){
		$row=\App\restaurante::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
