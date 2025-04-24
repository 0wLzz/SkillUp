<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TutorStatusMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $status;
    public $password;

    /**
     * Buat instance baru untuk mail
     */
    public function __construct($status, $name, $password = null)
    {
        $this->name = $name;
        $this->status = $status;
        $this->password = $password;
    }

    /**
     * Bangun email dengan view yang akan digunakan
     */
    public function build()
    {
        return $this->subject('Status Pendaftaran Tutor')
                    ->view('emails.tutor-status')
                    ->with([
                        'name' => $this->name,
                        'status' => $this->status,
                        'password' => $this->password,
                    ]);
    }
}
