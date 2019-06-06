@extends('templates.layout')
@section('content')
			<img src="{{$data['imagen']}}" id="logo" >
	
	<article>
			<h1>{{$data['nombre']}}</h1>
			<p>{{$data['precio']}}</p>
			<p>{{$data['tipo']}}</p>
	</article>
     
  @endsection

