<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Checkout</h2>

    <form method="POST" action="/place-order">
        <?php echo csrf_field(); ?>

        <input class="form-control mb-3" type="text" placeholder="Your Name">
        <input class="form-control mb-3" type="text" placeholder="Phone Number">
        <input class="form-control mb-3" type="text" placeholder="Address">

        <select class="form-control mb-3">
            <option>Cash on Delivery</option>
            <option>Bkash</option>
            <option>Nagad</option>
        </select>

        <button class="btn btn-primary w-100">Place Order</button>
    </form>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\spray21\resources\views/checkout.blade.php ENDPATH**/ ?>