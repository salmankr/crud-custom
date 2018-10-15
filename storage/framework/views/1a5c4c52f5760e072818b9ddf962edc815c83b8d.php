<?php $__env->startSection('structure'); ?>
<div class="container-fluid">
	<div class="row">
  	    <div class="col-sm-12">
				<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="/">Home</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="/semester-category">Index</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="/add-new-student">Create</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			<div class="d-flex flex-column justify-content-center align-items-center">
    	        <?php $__env->startSection('body'); ?>
  		        <?php echo $__env->yieldSection(); ?>
  	        </div>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('bootstrap.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>