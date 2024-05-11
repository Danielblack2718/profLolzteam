<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Transactions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('login');
        $password = $request->input('password');
        if ($username == "admin" && $password == "admin") {
            $request->session()->put('admin', true);
            return response()->json(['status' => 'success', 'message' => 'Logged in successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid credentials']);
        }
    }



    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect()->route('admin.login');
    }

    public function rate(Request $request)
    {
        $rate = Settings::first();
        $rate->rate = $request->input('rate');
        $rate->save();
        return response()->json(['status' => 'success', 'message' => 'Rate changed successfully']);
    }

    public function index(Request $request)
    {
        $spentRobuxToDay = Transactions::where('created_at', '>=', date('Y-m-d 00:00:00'))->where('status', 'success')->sum('sumRobux');
        $sumRubToDay = Transactions::where('created_at', '>=', date('Y-m-d 00:00:00'))->where('status', 'success')->sum('sum');

        $errorTransactions = Transactions::where('status', 'success_pay')->get();

        $rate = Settings::first();

        return view('admin', 
            [
                'spentRobuxToDay' => $spentRobuxToDay,
                'sumRubToDay' => $sumRubToDay,
                'errorTransactions' => $errorTransactions,
                'rate' => $rate
            ]);
    }

    public function retry(Request $request)
    {
        $id = $request->input('id');
        $transaction = Transactions::find($id);

        function findValidAccount()
        {
            $checkedAccounts = [];
            while (true) {
                $account = Accounts::whereNotIn('id', $checkedAccounts)
                    ->orderBy('rate', 'asc')
                    ->first();

                if (!$account) {
                    $response = [
                        'status' => 'error',
                        'message' => 'No valid account found'
                    ];
                    return response($response);
                }

                $responseCheckCookie = Http::post("https://apt-heartily-lamprey.ngrok-free.app/check_cookies/", [
                    'cookie' => $account->cookie,
                ]);

                if ($responseCheckCookie->status() === 200 && isset($responseCheckCookie->json()['status'])) {
                    return $account;
                }

                $checkedAccounts[] = $account->id;
            }
        }

        $validAccount = findValidAccount();

        $response = Http::post("https://apt-heartily-lamprey.ngrok-free.app/buy_a_gamepass/", [
            'userId' => $transaction->userIdAccount,
            'cookie' => $validAccount->cookie,
            'price' => $transaction->sumRobux,
        ]);

        if ($response->status() !== 200 && $transaction->status != 'success') {
            return response()->json(['status' => 'error', 'message' => 'Error while retrying transaction']);
        }

        $transaction->status = 'success';
        $transaction->save();
        return response()->json(['status' => 'success', 'message' => 'Transaction retried successfully']);
    }


}
