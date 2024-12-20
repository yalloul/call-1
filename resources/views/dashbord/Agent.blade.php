<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Dashboard</title>
    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4 flex">
        <nav class="w-1/4 mr-4">
            <ul class="space-y-4">
                <li><a href="{{ url('/SA') }}" class="block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">SA Dashboard</a></li>
                <li><a href="/" class="block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">Tasks</a></li>
                <li><a href="/" class="block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">Performance</a></li>
                <li><a href="/" class="block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">Logout</a></li>
            </ul>
        </nav>
        <div class="content bg-white p-6 rounded shadow w-3/4">
            <h1 class="text-3xl font-bold mb-4">Welcome to the Agent Dashboard</h1>
            <p>This is where agents can manage their tasks and view their performance metrics.</p>
            <!-- Dashboard content goes here -->
        </div>
    </div>
    <!-- Add your JS files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>