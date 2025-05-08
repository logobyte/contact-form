<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register Admin</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.register.submit') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
                Register
            </button>
        </form>
    </div>
</body>
</html>
