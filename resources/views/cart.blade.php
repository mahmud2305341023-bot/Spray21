<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Your Cart</h2>

    @php $total = 0; @endphp

    @foreach($cart as $item)
        @php $total += $item['price']; @endphp
        <div class="card p-3 mb-2">
            <h5>{{ $item['name'] }}</h5>
            <p>{{ $item['price'] }} BDT</p>
        </div>
    @endforeach

    <h4>Total: {{ $total }} BDT</h4>

    <a href="/checkout" class="btn btn-success mt-3">Proceed to Checkout</a>
</div>

</body>
</html>