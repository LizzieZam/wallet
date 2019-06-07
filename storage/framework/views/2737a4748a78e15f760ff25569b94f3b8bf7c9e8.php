<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Formulraio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!--scripts-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <!-- Styles -->
    <link   href="<?php echo e(URL::asset('resources/css/Styles.css')); ?> rel="stylesheet" type="text/css">
    </head>
<body>
<div class="row">
      <div class="medium-12 large-12 columns">
      <form  method="post" id="form" action="<?php echo e(route('Create')); ?>" enctype="multipart/form-data">
         
       
        <div class="medium-4  columns">
            <label>Nombre</label>
            <input name="nombre" type="text" id="nombre" placeholder="Nombres">
            <small class="error"><?php echo e($errors->first('nombre')); ?></small>
          </div><br/>
          <div class="medium-4  columns">
            <label>Celular</label>
            <input name="tipo" type="text" id="tipo" placeholder="plato fuerte"  >
            <small class="error"><?php echo e($errors->first('tipo')); ?></small>
          </div><br/>
          <div class="medium-4  columns">
            <label>E-mail</label>
            <input name="precio" type="text" id="precio" placeholder="2.50" >
            <small class="error"><?php echo e($errors->first('precio')); ?></small>
          </div><br/>
          <div class="medium-4  columns">
            <label>imagen</label>
            <input name="imagen" type="file" id="imagen"  >s
            <small class="error"><?php echo e($errors->first('imagen')); ?></small>
          </div><br/>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" id="submit"type="submit" >
          </div>
        
        </form>
      </div>
    </div>
           
    </body>
</html><?php /**PATH E:\CATO\SEMESTRE 2019 01\Nuevas Tecnicas de programación\payfood\resources\views/pages/form.blade.php ENDPATH**/ ?>