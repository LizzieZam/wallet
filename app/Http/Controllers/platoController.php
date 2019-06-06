<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
		$imgNombre=$imgNombre+1;
		
		$file = $request -> file('imagen'); 
        $sub_path = 'images'; 
       
		$data['imagen']= Storage::putFile($imgNombre.'.jpg', $request->file('imagen'));
		var_dump(data);
		$row= \App\plato::create($data);
		return view('pages.prueba',["data"=>$row]);
		
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
