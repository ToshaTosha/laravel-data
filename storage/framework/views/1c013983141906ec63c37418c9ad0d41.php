
<?php $__env->startSection('content'); ?>
  <h1>All posts</h1>   
  <?php if(count($posts) == 0): ?>
    <p>Поcтов нет</p>
  <?php else: ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($post->content); ?><p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  <?php endif; ?>=<?php /**PATH D:\laravel\example-app\resources\views/posts/posts.blade.php ENDPATH**/ ?>