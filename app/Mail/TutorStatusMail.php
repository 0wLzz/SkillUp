<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TutorStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $status;
    public $messages;
    public $password;

    /**
     * Buat instance baru untuk mail
     */
    public function __construct($status, $name, $password = null, $email = null)
    {
        $this->name = $name;
        $this->status = $status;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * Bangun email dengan view yang akan digunakan
     */
    public function build()
    {
        return $this->subject('Status Pendaftaran Tutor - ' . ucfirst($this->status))
            ->view('emails.tutor-status')
            ->with([
                'name' => $this->name,
                'status' => $this->status,
                'email' => $this->email,
                'contact_email' => 'managment@example.com',
                'company_name' => 'SkillUp'
            ]);
    }
}
