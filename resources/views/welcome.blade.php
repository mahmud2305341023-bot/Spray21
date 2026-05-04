<!DOCTYPE html>
<html>
<head>
    <title>21 Spray</title>
</head>
<body>

<h1>21 Spray - Perfume Shop</h1>

<a href="/add">Add Product</a>

@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }} BDT</p>
    </div>
@endforeach

</body>
</html>
