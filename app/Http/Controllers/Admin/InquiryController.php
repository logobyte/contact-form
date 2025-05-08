<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = Contact::latest()->paginate(10);
        return view('admin.dashboard', compact('inquiries'));
    }
}
