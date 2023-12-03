<!DOCTYPE html>
<html>
<head>
    <title>Список книг</title>
</head>
<body>
    <h1>Список книг</h1>
    <ul>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($book->title); ?> (<?php echo e($book->genres->implode('name', ', ')); ?>)</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH D:\laravel\example-app\resources\views/books/index.blade.php ENDPATH**/ ?>