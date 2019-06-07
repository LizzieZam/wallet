<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pago;
use App\pagoDetalle;
class pagoController extends Controller
{
    public function __construct( pago $pago )
    {
		
      
        $this->pago = $pago;
    }

    public function index(){
		$pago= \App\pago::all();
		$detalle= \App\pagoDetalle::all();
		$data['pago']=$pago;
		$data['detalle']=$detalle;
		return $data;
		
	}
	public function show($id){
		$pago= \App\pago::find($id);
		$detalle= \App\pagoDetalle::where('idPago',$id);
		$data['pago']=$pago;
		$data['detalle']=$detalle;
		return $data;
	}
	public function store(Request $request){
		$dataP['subtotal'] =$request['subtotal'];
		$dataP['iva'] =$request['iva'];
		$dataP['descuento'] =$request['descuento'];
		$dataP['total'] =$request['total'];
		$dataP['fecha'] =date('Y-m-d H:i:s');
				
		$row=\App\pago::create($dataP);
		$dataDP['idPedido']=$request['idPedido'];
		$dataDP['cantidad']=$request['cantidad'];
		$dataDP['precio']=$request['precio'];
		$dataDP['idPago']=$row['id'];
		$dataDP['fecha']=date('Y-m-d H:i:s');
		$row2=\App\pagoDetalle::create($dataDP);
		return "Pago registrado exitosamente";
	}
	public function update(Request $request,$id){
        $dataP=\App\pago::findOrFail($id);
		$dataP['subtotal'] =$request['subtotal'];
		$dataP['iva'] =$request['iva'];
		$dataP['descuento'] =$request['descuento'];
		$dataP['total'] =$request['total'];
		$dataP['fecha'] =date('Y-m-d H:i:s');
		
		$dataP->save();
		$row=\App\pagoDetalle::where('idPago',$id);
		$dataDP['idPedido']=$request['idPedido'];
		$dataDP['cantidad']=$request['cantidad'];
		$dataDP['precio']=$request['precio'];
		$dataDP['idPago']=$row['id'];
		$dataDP['fecha']=date('Y-m-d H:i:s');
		$dataDP->save();
		return "Pago actualizado exitosamente";
	}
	public function delete($id){
		$pago=\App\pago::findOrFail($id);
		$pago->delete();
		$pagoDetalle=\App\pagoDetalle::where('idPago',$id);
		$pagoDetalle->delete();

		return 204;
    }
   
}
