<!DOCTYPE html>
<html>
<head>
    <title>Список авторов</title>
</head>
<body>
    <h1>Список авторов</h1>

    <ul>
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($author->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH D:\laravel\example-app\resources\views/authors/index.blade.php ENDPATH**/ ?>