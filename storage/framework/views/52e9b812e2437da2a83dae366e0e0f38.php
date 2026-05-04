<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Your Cart</h2>

    <?php $total = 0; ?>

    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $total += $item['price']; ?>
        <div class="card p-3 mb-2">
            <h5><?php echo e($item['name']); ?></h5>
            <p><?php echo e($item['price']); ?> BDT</p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h4>Total: <?php echo e($total); ?> BDT</h4>

    <a href="/checkout" class="btn btn-success mt-3">Proceed to Checkout</a>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\spray21\resources\views/cart.blade.php ENDPATH**/ ?>