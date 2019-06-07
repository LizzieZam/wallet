<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

use App\plato;

class platoController extends Controller
{
    public function __construct( plato $plato )
    {
		
      
        $this->plato = $plato;
    }

    public function index(){
		return  \App\plato::all();
		
	}
	public function show($id){
		return \App\plato::find($id);
	}
	public function store(Request $request){
		$data =$request->all();   
		$imgNombre=\App\plato::latest('id')->get('id')->first()['id'];
		$imgNombre="comida".($imgNombre+1). '.' . $request->file('imagen')->getClientOriginalExtension();
		$imagen = Image::make($request->file('imagen'));
		$imagen->save(public_path()."/images/" . $imgNombre, 100);
		$data['imagen']= "/images/" . $imgNombre;
		return \App\plato::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\plato::findOrFail($id);
        $row->update($request->all());
		return $row;
	}
	public function delete($id){
		$row=\App\plato::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
