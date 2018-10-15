<?php $__env->startSection('title', 'index'); ?>
<?php $__env->startSection('body'); ?>
  <form class="col-lg-6 col-sm-8 col-xs-12" action="/semester-category/students-list" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="exampleFormControlSelect1"><b>Select Semester:</b></label>
      <select class="form-control" name="semester">
        <option>...</option>
        <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option>
            <?php echo e($semester->semester); ?>

          </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
    <div class="form-group">
    	<input type="submit" name="sub_btn" class="btn btn-primary" value="submit">
    </div>
  </form>
  <?php echo $__env->make('messages.session_success', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.structure', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>