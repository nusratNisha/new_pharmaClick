<?php
namespace App\Http\Controllers;


class MedicineOrderController extends Controller {
    public function medicineOrder() {
        return view('pages/medicineOrder');
    }
}