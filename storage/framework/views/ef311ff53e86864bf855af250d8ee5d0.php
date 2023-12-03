<html>
    <body>
    <h2>Create Project</h2>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Create Project</button>
    </form>
    </body>
</html>
<?php /**PATH D:\laravel\example-app\resources\views/posts/create.blade.php ENDPATH**/ ?>