<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContactForm()
    {
        return view('pages.contactUs');
    }
}
