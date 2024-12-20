<?php
namespace App\Http\Controllers;


class MainController extends Controller {
    public function home() {
        return view('pages/home');
    }
    public function appointments() {
        return view('pages/appointments');
    }
    public function posCustomerOrder() {
        return view('pages/pos-customer-order');
    }
}
