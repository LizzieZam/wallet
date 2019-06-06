<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedido;
class pedidoController extends Controller
{
    public function __construct( pedido $pedido )
    {
		
      
        $this->pedido = $pedido;
    }

    public function index(){
		
		return \App\pedido::all();
		
	}
	public function show($id){
		return \App\pedido::find($id);
	}
	public function store(Request $request){
        $data =$request->all();
    
		return \App\pedido::create($data);
		
	}
	public function update(Request $request,$id){
        $row=\App\pedido::findOrFail($id);
        $row->update($request->all());
		return $row;
	}
	public function delete($id){
		$row=\App\pedido::findOrFail($id);
		$row->delete();
		return 204;
    }
   
}
