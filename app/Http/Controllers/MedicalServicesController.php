<?php
namespace App\Http\Controllers;

use App\Models\MedicineOrder;
use Illuminate\Http\Request;
class MedicalServicesController extends Controller {

    public function store(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        MedicineOrder::create($request->all());

        return redirect()->route('medicineOrder.index')->with('success', 'Order placed successfully.');
    }