<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Courses;

use App\Mail\AfterMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;


class AfterEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'afterEmail:dailyAt';

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

        $TranSuccess = Transaction::with('user', 'course')->where('transaction_status', 'SUCCESS')->get();
        
        foreach ($TranSuccess as $data) {
            if (date('Y-m-d') == $data->course->date) {
                Mail::to($data->user)->send(new AfterMail($data));
                $this->info('After email has sent to the users');
            }
            else {
                $this->info('Tidak ada kelas hari ini');
            }
        }
        $this->info('Appreciation email has sent to the users');
    }
}
