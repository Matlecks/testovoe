<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $users = User::all();
        $transactions = Transaction::all();


        return view('index', compact('users', 'transactions'));
    }

    public function add_money(Request $request, $id)
    {
        $user = User::find($id);
        $user_balance = $user->balance + $request->cost;
        $user->balance = $user_balance;
        $user->save();

        $transaction = new Transaction();
        $transaction->user_id = $id;
        $transaction->amount = $request->cost;

        $transaction->save();

        return redirect()->back();
    }
}
