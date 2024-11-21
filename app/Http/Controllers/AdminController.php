<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $contacts =Contact::latest()->get();
        $newsletters =Newsletter::latest()->get();
        return view('admin.dashboard',compact('contacts', 'newsletters'));
    }
}
