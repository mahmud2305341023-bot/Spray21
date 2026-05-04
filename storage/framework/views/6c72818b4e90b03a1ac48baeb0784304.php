<!DOCTYPE html>
<html>
<head>
    <title>21 Spray</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand">21 Spray</span>
    <div>
        <a href="/" class="btn btn-outline-light btn-sm">Home</a>
        <a href="/add" class="btn btn-outline-light btn-sm">Add Product</a>
        <a href="/cart" class="btn btn-warning btn-sm">Cart</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Perfume Collection</h2>

    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                        <p class="card-text"><?php echo e($product->price); ?> BDT</p>

                        <form method="POST" action="/cart/<?php echo e($product->id); ?>">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-success w-100">Add to Cart</button>
                        </form>
                        <a href="/delete/<?php echo e($product->id); ?>" class="btn btn-danger btn-sm mt-2">Delete</a>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\spray21\resources\views/home.blade.php ENDPATH**/ ?>