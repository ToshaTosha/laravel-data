<!DOCTYPE html>
<html>
<head>
    <title>Добавить автора</title>
</head>
<body>
    <h1>Добавить новго автора</h1>

    <form action="<?php echo e(route('authors.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">Автор:</label>
            <input type="text" id="name" name="name">
        </div>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
<?php /**PATH D:\laravel\example-app\resources\views/authors/create.blade.php ENDPATH**/ ?>