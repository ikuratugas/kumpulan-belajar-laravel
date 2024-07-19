<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CafeIkura</title>
</head>
<body>
  <h1>Home CafeIkura</h1>

  <h2>Data produk</h2>
  <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <h4> <?php echo e($produk->name); ?></h4> 
     <p>harga : <?php echo e($produk->price); ?></p>
     <p>deskripsi : <?php echo e($produk->description); ?></p>
     <a href="<?php echo e(route('product.edit', ['id' => $produk->id])); ?>">Edit</a> 
     <form method="post" action="<?php echo e(route('product.destroy', ["id" =>$produk->id])); ?>">
      <?php echo method_field('delete'); ?>
      <?php echo csrf_field(); ?>
      <button>Hapus</button>
     </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH /home/ikura/laravel/cafe88rahmat/resources/views/product/index.blade.php ENDPATH**/ ?>