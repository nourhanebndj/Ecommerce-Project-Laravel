<?php

namespace App\Http\Controllers;
use App\Models\Category; 


use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function Contact(){
        $categories = Category::all();

        return view('guest.contact', compact('categories'));    }
}