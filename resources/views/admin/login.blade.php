<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Admin Login</h2>

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required autofocus
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                Login to Dashboard
            </button>
        </form>
    </div>
</body>
</html>
