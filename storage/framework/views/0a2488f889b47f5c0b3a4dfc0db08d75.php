<!DOCTYPE html>
<html>
<head>
    <title>Создать жанр</title>
</head>
<body>
    <h1>Создать новый жанр</h1>

    <form action="<?php echo e(route('genres.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">Название жанра:</label>
            <input type="text" id="name" name="name">
        </div>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
<?php /**PATH D:\laravel\example-app\resources\views/genres/create.blade.php ENDPATH**/ ?>