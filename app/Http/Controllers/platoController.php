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
		return \App\plato::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\plato::findOrFail($id);
        $row=$request->all();
        var_dump($row);
        $row->save();
		return $row;
	}
	public function delete($id){
		$row=\App\plato::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
