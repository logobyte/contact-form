<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;



class AdminController extends Controller
{
    public function dashboard(Request $request)
{
    $search = $request->input('search');

    $inquiries = Contact::when($search, function ($query, $search) {
        return $query->where('name', 'like', "%{$search}%")
                     ->orWhere('email', 'like', "%{$search}%")
                     ->orWhere('subject', 'like', "%{$search}%");
    })
    ->orderBy('created_at', 'desc')
    ->paginate(10);

    return view('admin.dashboard', compact('inquiries', 'search'));
}

public function destroy($id)
{
    $inquiry = Contact::findOrFail($id);
    $inquiry->delete();

    return redirect()->back()->with('success', 'Inquiry deleted successfully.');
}

}
