<!DOCTYPE html>
<html>
<head>
    <title>Список жанров</title>
</head>
<body>
    <h1>Список жанров</h1>

    <ul>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($genre->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH D:\laravel\example-app\resources\views/genres/index.blade.php ENDPATH**/ ?>