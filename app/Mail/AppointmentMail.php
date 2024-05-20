<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this->view('emails.appointment')
            ->subject('New Appointment Request')
            ->with([
                'department' => $this->appointment->department,
                'date' => $this->appointment->date,
                'time' => $this->appointment->time,
                'name' => $this->appointment->name,
                'phone' => $this->appointment->phone,
                'message' => $this->appointment->message,
            ]);
    }
}
