<?php $__env->startSection('title','Zapbitz'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-center text-success">HELLO WORLD</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>