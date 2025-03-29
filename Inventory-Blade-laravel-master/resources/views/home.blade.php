<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  <!-- Link to your app styles (if any) -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto text-center py-12">
        <h1 class="text-4xl font-semibold mb-4">Welcome to the Inventory Management System</h1>
        <p class="text-lg mb-6">Manage your inventory easily and efficiently.</p>

        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h2 class="text-2xl font-medium mb-4">Quick Links</h2>
            <ul class="list-none">
                <li><a href="{{ route('items.index') }}" class="text-blue-500 hover:underline">View Inventory</a></li>
                <!-- Add any other links here as necessary -->
            </ul>
        </div>

        <footer class="mt-12 text-sm text-gray-500">
            <p>&copy; 2025 Inventory System. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>
