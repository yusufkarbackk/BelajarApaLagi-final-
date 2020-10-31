<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Courses;


class TransactionConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $confirm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transaction $confirm)
    {
        $this->confirm = $confirm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.transaction-confirm')
                    ->subject('Konfirmasi pembayaran');
    }
}
