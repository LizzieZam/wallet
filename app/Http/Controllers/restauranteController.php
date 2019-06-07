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
		$imgNombre=\App\restaurante::latest('id')->get('id')->first()['id'];
		$imgNombre="restaurante".($imgNombre+1). '.' . $request->file('imagen')->getClientOriginalExtension();
		$imagen = Image::make($request->file('imagen'));
		$imagen->save(public_path()."/images/" . $imgNombre, 100);
		$data['imagen']= "/images/" . $imgNombre;

		return \App\restaurante::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\restaurante::findOrFail($id);
        $row->update($request->all());
		return $row;
	}
	public function delete($id){
		$row=\App\restaurante::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
