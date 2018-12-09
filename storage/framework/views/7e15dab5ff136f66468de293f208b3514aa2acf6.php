<?php $__env->startSection('content'); ?>
<?php if(count($project)>0): ?>
    <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="jumbotron m-3 p-3">
        <h1 style="text-transform:uppercase;"><?php echo e($projects->title); ?></h1>
        <small><?php echo e($projects->created_at); ?></small>
        <p><?php echo e($projects->body); ?></p>
        <a href="/show/<?php echo e($projects->id); ?>" class="btn btn-warning">Read More</a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <h1>NO POST UPLOAD YET!!!</h1>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>