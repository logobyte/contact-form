<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">


<!-- <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit"
        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
        Logout
    </button>
</form> -->



    <div class="min-h-screen">
        



        {{-- Navigation (optional) --}}
        {{-- Header (optional) --}}
        
        <header class="bg-white shadow">
            
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"> 
                <h1 class="text-xl font-semibold">Admin Dashboard</h1>
                    

                <!-- Logout Button -->
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm btn btn-danger" style="margin-left: 90%; ">
                Logout
            </button>
        </form>
            </div>
        </header>

        {{-- Main content --}}
        <main class="py-6 px-4 max-w-7xl mx-auto">
            @yield('content')
        </main>

        {{-- Footer (optional) --}}
        <footer class="bg-white border-t mt-12">
            <div class="max-w-7xl mx-auto px-4 py-4 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} Admin Panel. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
