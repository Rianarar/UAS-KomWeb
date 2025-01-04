<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function book(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'consultation_date' => 'required|date',
            'consultation_time' => 'required|date_format:H:i',
        ]);

        Consultation::create([
            'name' => $request->name,
            'consultation_date' => $request->consultation_date,
            'consultation_time' => $request->consultation_time,
        ]);

        return redirect()->back()->with('success', 'Consultation booked successfully.');
    }
}
