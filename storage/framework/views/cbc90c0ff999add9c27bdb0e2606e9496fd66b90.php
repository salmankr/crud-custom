<?php $__env->startSection('title', 'data'); ?>
<?php $__env->startSection('body'); ?>
<div class="row w-100 pt-3">
	<div class="col-lg-6">
		<img class="img-thumbnail rounded-circle" src="<?php echo e(url('/images', $student->img_name)); ?>">
	</div>
	<div class="col-lg-6">
		<h3 class="text-muted">Name</h3><p><?php echo e($student->name); ?></p>
		<h3 class="text-muted">Semeseter</h3><p><?php echo e($student->semester); ?></p>
		<h3 class="text-muted">Registration No#</h3><p><?php echo e($student->reg_no); ?></p>
	</div>
</div>
<?php echo $__env->make('messages.session_success', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.structure', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>