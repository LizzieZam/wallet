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
		
		$file = $request -> file('imagen'); //line 1
        $sub_path = 'images'; //line 2
        $real_name = $file -> getClientOriginalName(); //line 3
		$destination_path = public_path($sub_path);  //line 4
		$data['imagen']= $destination_path."/". $real_name;
             
        $file->move($destination_path,  $real_name);  //line 5
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
