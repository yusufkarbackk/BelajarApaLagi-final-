<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $transaction = Transaction::with(['transaction_belongs', 'course'])->find($id);
        dd($transaction);
        return view('pages.checkout', ['transaction' => $transaction]);
    }

    public function proccess (Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'course_id' => 'required',
            'transaction_status' => 'required',
        ]);

        $transaction = new Transaction;

        $transaction->name = Auth::user()->name;
        $transaction->email = Auth::user()->email;
        $transaction->course_id = $id;
        $transaction->transaction_status = 'IN_CART';
        $transaction->save();

        dd($id);

        return redirect()->route('checkout', $transaction->id);


    }

    public function success()
    {
        return view('pages.success');
    }
}
