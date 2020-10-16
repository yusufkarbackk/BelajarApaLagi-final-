<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\Courses;
USE App\Models\User;
USE App\Models\Gallery;
USE App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        $courses = Courses::all();
        $transactions = Transaction::all();
        $processed = Transaction::where('transaction_status', 'processed');
        $in_cart = Transaction::where('transaction_status', 'IN_CART');
        $success = Transaction::where('transaction_status', 'SUCCESS');
        return view('pages.admin.dashboard', [
            'users' => $users,
            'courses' => $courses,
            'transactions' => $transactions,
            'processed' => $processed,
            'in_cart' => $in_cart,
            'success' => $success,
        ]);
    }
}
