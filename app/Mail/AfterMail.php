<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Courses;


class AfterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $after_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transaction $after_email)
    {
        $this->after_email = $after_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank You')
                    ->view('email.transaction-success');
    }
}
