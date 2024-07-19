<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>CafeIkura</h1>

  <h3>Tambah Product</h3>

  <?php if($errors->any()): ?>
     <?php $__currentLoopData = $errors-> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($e); ?></li> 
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

  <form method="post" action=" <?php echo e(route('store')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('post'); ?>
    <label for="name">Nama Produk</label>
    <input type="text" name="name" id="product">
    <br>
    <label for="price">Harga</label>
    <input type="number" name="price" id="price">
    <br>
    <textarea name="description" placeholder="Masukan Deskripsi" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Send">
  </form>
</body>
</html><?php /**PATH /home/ikura/laravel/cafe88rahmat/resources/views/product/create.blade.php ENDPATH**/ ?>