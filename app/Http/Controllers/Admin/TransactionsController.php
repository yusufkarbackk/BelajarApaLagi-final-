<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Transaction;
use App\Model\User;
use App\Mail\TransactionSuccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class TransactionsController extends Controller

{
    public $admin_transaction = '/admin/transactions';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('pages.admin.transactions.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transactions = Transaction::find($id);
        return view('pages.admin.transactions.edit', ['transactions' => $transactions]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::with(['user', 'course.gallery'])->find($id);
        
        $transaction->transaction_status = "SUCCESS";

        $transaction->save();

        Mail::to($transaction->user)->send(new TransactionSuccess($transaction));
        return redirect($this->admin_transaction);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transactions = Transaction::find($id);

        $transactions->delete();
        return redirect($this->admin_transaction);

    }
}
