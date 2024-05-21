<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Appointment;
use App\Mail\AppointmentMail;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department' => 'required',
            'date' => 'required',
            'time' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'message' => 'nullable',
        ]);

        // Parse the date using Carbon's createFromFormat method
        try {
            // Try to parse the date with common formats
            $date = Carbon::createFromFormat('d/m/Y', $validatedData['date']) ?:
                Carbon::createFromFormat('Y-m-d', $validatedData['date']);

            // If parsing fails, set a default date or handle the error accordingly
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['date' => 'The date format is invalid. Please use dd/mm/yyyy or yyyy-mm-dd.']);
        }

        // Update the $validatedData with the parsed date
        $validatedData['date'] = $date->format('Y-m-d');

        $appointment = Appointment::create($validatedData);

        Mail::to('info.hyperverm@gmail.com')->send(new AppointmentMail($appointment));

        return redirect()->back()->with('success', 'Your appointment request has been submitted successfully.');
    }
}
