<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalServicesController extends Controller {
    public function medicalServices() {
        return view('pages/medicalServices');
    }
}