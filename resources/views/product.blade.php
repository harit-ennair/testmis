<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@forelse ($product as $prod)
    <li>{{ $prod->name }}</li>
@empty
    <p>No product</p>
@endforelse
</body>
</html>