<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\juego;
class juegoController extends Controller
{
    public function __construct( juego $juego )
    {
		
      
        $this->juego = $juego;
    }

    public function index(){
		return \App\juego::latest('id')->first();
		//return \App\juego::latest('id')->get('puntos')->first()['puntos'];
		
	}
	public function show($id){
		return \App\juego::find($id);
	}
	public function store(Request $request){
        $data =$request->all();
    
		return \App\juego::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\juego::findOrFail($id);
        
		return $row;
	}
	public function delete($id){
		$row=\App\juego::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
