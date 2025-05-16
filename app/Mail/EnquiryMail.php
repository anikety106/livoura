<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiryData;

    public function __construct($enquiryData)
    {
        $this->enquiryData = $enquiryData;
    }

    public function build()
    {
        return $this->subject('New Enquiry Received')
                    ->view('emails.enquiry')
                    ->with('data', $this->enquiryData);
    }
}