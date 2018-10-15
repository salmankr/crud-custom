<?php $__env->startSection('title' , 'students'); ?>
<?php $__env->startSection('body'); ?>
    <div class="list-group col-lg-8">
        <h3>List of available students in semester <?php echo e($semester); ?></h3>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <div class="list-group-item list-group-item-action d-flex justify-content-between">
	       	    <a href="/semester-category/students-list/<?php echo e($student->id); ?>" class="h3"><?php echo e($student->name); ?></a>
	       	   <p class="d-inline">Added <?php echo e($student->created_at->diffForHumans()); ?></p>
	       	   <p class="d-inline">Updated <?php echo e($student->updated_at->diffForHumans()); ?></p>
	       	    <a href="/semester-category/students-list/<?php echo e($student->id); ?>/update" class="btn btn-info">Update</a>
	       	    <form action="/semester-category/students-list/<?php echo e($student->id); ?>/delete" method="post">
	       	    	<?php echo e(csrf_field()); ?>

	       	    	<?php echo e(method_field('DELETE')); ?>

	       	    	<input class="btn btn-danger" type="submit" name="delete" value="Delete">
	       	    </form>
	        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.structure', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>