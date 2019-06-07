<?php $__env->startSection('content'); ?>
			<img src="<?php echo e($data['imagen']); ?>" id="logo" >
	
	<article>
			<h1><?php echo e($data['nombre']); ?></h1>
			<p><?php echo e($data['precio']); ?></p>
			<p><?php echo e($data['tipo']); ?></p>
	</article>
     
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CATO\SEMESTRE 2019 01\Nuevas Tecnicas de programación\payfood\resources\views/pages/prueba.blade.php ENDPATH**/ ?>