<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="../js/app.js"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-semibold mb-6" style="display: inline-block">Product Dashboard</h2>
        <h3 class="text-2xl font-semibold mb-6 text-red-700" style="display: inline-block; float: right; cursor: pointer;" onclick="window.location.href = 'logout'";>Logout</h3>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded shadow-md">
                    <h3 class="text-lg font-semibold mb-2">{{ $product['name'] }}</h3>
                    <p class="text-gray-600 mb-2">Stock: {{ $product['quantity'] }}</p>
                    <p class="text-gray-600">Price: {{ $product['price'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
