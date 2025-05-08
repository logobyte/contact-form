@extends('layouts.app') {{-- Make sure you have a layouts/app.blade.php --}}

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h2 class="text-2xl font-bold mb-4">Contact Form Inquiries</h2>


<!-- 🔍 Search Form -->
<form method="GET" action="{{ route('admin.dashboard') }}" class="mb-4">
    <input type="text" name="search" placeholder="Search by name, email, or subject"
           value="{{ request('search') }}"
           class="border border-gray-300 rounded px-4 py-2 w-1/3 focus:outline-none focus:ring" style="margin-left: 70%;">
    <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded ml-2 btn btn-primary" >
        Search
    </button>
</form>


<div class="overflow-x-auto bg-white rounded shadow p-4 max-w-6xl mx-auto" >
<table class="min-w-full bg-white border rounded shadow" >
    <thead class="bg-gray-100 text-gray-700" >
        <tr>
            <th class="px-4 py-2 text-left">Name</th>
            <th class="px-4 py-2 text-left">Email</th>
            <th class="px-4 py-2 text-left">Message</th>
            <th class="px-4 py-2 text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inquiries as $inquiry)
        <tr class="border-t hover:bg-gray-50">
            <td class="px-4 py-2">{{ $inquiry->name }}</td>
            <td class="px-4 py-2">{{ $inquiry->email }}</td>
            <td class="px-4 py-2">{{ $inquiry->message }}</td>
            <td class="px-4 py-2 text-right">
                <form action="{{ route('inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm btn btn-danger">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<!-- <table class="w-full border table-auto">
        
        <thead class="bg-gray-100">

        
            <tr>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Subject</th>
                <th class="px-4 py-2 border">Message</th>
                <th class="px-4 py-2 border">Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inquiries as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $item->name }}</td>
                    <td class="px-4 py-2 border">{{ $item->email }}</td>
                    <td class="px-4 py-2 border">{{ $item->subject }}</td>
                    <td class="px-4 py-2 border">{{ $item->message }}</td>
                    <td class="px-4 py-2 border">{{ $item->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">No inquiries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table> -->




</div>
@endsection
