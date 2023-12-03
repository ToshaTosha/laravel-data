<form action="<?php echo e(route('books.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>

  <div class="form-group">
    <label for="title">Заголовок:</label>
    <input type="text" placeholder="title" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label>Жанры:</label>
    <select name="genres[]" class="form-control" multiple>
      <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>

  <button type="submit">Отправить</button>
</form>
<?php /**PATH D:\laravel\example-app\resources\views/books/create.blade.php ENDPATH**/ ?>