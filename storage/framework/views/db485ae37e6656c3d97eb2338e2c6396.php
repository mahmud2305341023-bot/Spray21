<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand">21 Spray</span>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Add New Perfume</h2>

    <form method="POST" action="/add">
        <?php echo csrf_field(); ?>

        <input class="form-control mb-3" type="text" name="name" placeholder="Perfume Name">
        <input class="form-control mb-3" type="text" name="price" placeholder="Price (BDT)">

        <button class="btn btn-primary">Save Product</button>
    </form>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\spray21\resources\views/add.blade.php ENDPATH**/ ?>