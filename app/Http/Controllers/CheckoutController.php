<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;
use App\Models\Transaction;
use App\Models\User;
use App\Mail\TransactionConfirm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{
    public function index($id)
    {
        $transaction = Transaction::with(['user', 'course'])->find($id);
        
        $total = $transaction->course->price + $transaction->id;
        return view('pages.checkout', ['transaction' => $transaction,
                                        'total' => $total,                           
        ]);
    }

    public function proccess (Request $request, $id)
    {

        $transaction = new Transaction;

        $transaction->name = Auth::user()->name;
        $transaction->email = Auth::user()->email;
        $transaction->course_id = $id;
        $transaction->transaction_status = 'IN_CART';
        $transaction->users_id = Auth::user()->id;
        $transaction->save();

        return redirect()->route('checkout', $transaction->id);


    }

    public function confirm ($id)
    {
        $confirm = Transaction::with(['user', 'course.gallery'])->find($id);
        $confirm->transaction_status = 'PROCESSED';
        $confirm->save();

        Mail::to($confirm->user)->send(new TransactionConfirm($confirm));
        return view('pages.success');
    }
}
