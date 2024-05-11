<?php

namespace App\Http\Controllers;

use App\Models\Proxies;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Accounts;

class DashboardController extends Controller
{
    public function panel()
    {
        $user = auth()->user();
        $proxies = Proxies::where('userId', auth()->user()->id)->get();
        $accounts = Accounts::where('userId', auth()->user()->id)->get();
        $lowestRate = Accounts::where('userId', auth()->user()->id)->min('rate');
        $moneyEarned = Transactions::where('userId', auth()->user()->id)->sum('sum');
        $robuxSold = Transactions::where('userId', auth()->user()->id)->sum('sumRobux');
        return view('panel', [
            'proxies' =>  $proxies,
            'user' => $user, 
            'accounts' => $accounts
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
