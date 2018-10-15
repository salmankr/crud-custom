<?php $__env->startSection('title', 'update'); ?>
<?php $__env->startSection('body'); ?>
    <h2 class="text-muted">Update form for <?php echo e($student->name); ?></h2>
	<form class="col-lg-6 col-sm-8 col-xs-12" action="/semester-category/students-list/<?php echo e($student->id); ?>/update" method="post" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name">
	  </div>
	  <div class="form-group">
	    <label for="semester">Enter Semester Number</label>
	    <input type="number" class="form-control" value="<?php echo e($student->semester); ?>" name="semester">
	  </div>
	  <div class="form-group">
	    <label for="registrationnumber">Reg. Number</label>
	    <input type="number" class="form-control" value="<?php echo e($student->reg_no); ?>" name="reg_no">
	  </div>
	  <div class="form-group">
	    <label for="image">Upload image</label>
	    <input class="d-block" type="file" name="image" required="required">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
<?php echo $__env->make('messages.validationerr', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.structure', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>