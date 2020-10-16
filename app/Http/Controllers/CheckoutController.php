<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $transaction = Transaction::with(['user', 'course'])->find($id);
        
        return view('pages.checkout', ['transaction' => $transaction]);
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

    public function success ($id)
    {
        $transaction = Transaction::find($id);
        $transaction->transaction_status = 'PROCESSED';
        $transaction->save();
        return view('pages.success');
    }
}
