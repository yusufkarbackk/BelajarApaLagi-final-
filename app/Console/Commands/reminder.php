<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Courses;
use App\Models\Transaction;
use App\Mail\reminderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class reminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:dailyAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a reminder to user for confirming payment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $nowDate = date('Y-m-d');
        
        $Tran_InCart = Transaction::with(['user', 'course'])->where('transaction_status', 'IN_CART')->get();

        foreach ($Tran_InCart as $data) {
            if ($nowDate == date('Y-m-d', strtotime('-2 days', strtotime($data->course->date)))) {
                
                Mail::to($data->user)->send(new reminderMail($data));
            }
            $this->info('Reminder has sent to all users');
        }

    }
}
