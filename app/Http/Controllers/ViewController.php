<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Proxies;
use App\Models\Accounts;

class ViewController extends Controller
{
    public function index(Request $request)
    {
        $transactionLast7 = Transactions::orderBy('created_at', 'desc')->take(7)->get();

        return view('index', [
            'username' => $request->cookie("username"),
            'transactionLast7' => $transactionLast7
        ]);
    }

    public function buy(Request $request)
    {
        $transactionsLast4 = Transactions::orderBy('created_at', 'desc')->take(4)->get();
        $robuxSpent = Accounts::sum('robuxSpent');
        return view('buy',  [
            'username' => $request->cookie("username"), 
            'transactionsLast4' => $transactionsLast4, 
            'robuxSpent' => $robuxSpent
        ]);
    }

    public function faq(Request $request)
    {
        return view('faq',  [
            'username' => $request->cookie("username")
        ]);
    }

    public function purchases(Request $request)
    {
        $transactions = Transactions::where('username', $request->cookie("username"))->get();
        return view('purchases',  [
            'username' => $request->cookie("username"), 
            'transactions' => $transactions
        ]);
    }

}
