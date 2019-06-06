<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Formulraio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!--scripts-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <!-- Styles -->
    <link   href="{{URL::asset('resources/css/Styles.css')}} rel="stylesheet" type="text/css">
    </head>
<body>
<div class="row">
      <div class="medium-12 large-12 columns">
      <form  method="post" id="form" action="{{route('Create')}}" enctype="multipart/form-data">
         
       
        <div class="medium-4  columns">
            <label>Nombre</label>
            <input name="nombre" type="text" id="nombre" placeholder="Nombres">
            <small class="error">{{$errors->first('nombre')}}</small>
          </div><br/>
          <div class="medium-4  columns">
            <label>Celular</label>
            <input name="tipo" type="text" id="tipo" placeholder="plato fuerte"  >
            <small class="error">{{$errors->first('tipo')}}</small>
          </div><br/>
          <div class="medium-4  columns">
            <label>E-mail</label>
            <input name="precio" type="text" id="precio" placeholder="2.50" >
            <small class="error">{{$errors->first('precio')}}</small>
          </div><br/>
          <div class="medium-4  columns">
            <label>imagen</label>
            <input name="imagen" type="file" id="imagen"  >s
            <small class="error">{{$errors->first('imagen')}}</small>
          </div><br/>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" id="submit"type="submit" disabled>
          </div>
        
        </form>
      </div>
    </div>
           
    </body>
</html>