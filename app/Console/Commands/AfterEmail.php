<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Transaction;
use App\Model\User;
use App\Mail\AfterMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AfterEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dailyAt:after';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email after the class is ended';

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
        $date = date_default_timezone_set('Asia/Jakarta');

        $TranSuccess = Transaction::where('transaction_status', 'SUCCESS')->get();
        $CourseDate = Courses::all();
        
        if ($TranSuccess && $date == $CourseDate->date) {
            
            Mail::to($after_email->user)->send(new TransactionSuccess($transaction));

        }

    }
}
