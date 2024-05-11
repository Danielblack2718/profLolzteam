<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\Transactions;

class RobloxController extends Controller
{
    public function getRobloxAccounts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|string',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ];
            return response($response);
        }

        $nickname = $request->input('nickname');

        $response = Http::get("https://apt-heartily-lamprey.ngrok-free.app/get_users/?username=$nickname");

        if ($response->status() !== 200 && !isset($response->json()['status'])) {
            $response = [
                'status' => 'error',
                'message' => 'Failed to fetch user accounts'
            ];
            return response($response);
        }


        return response($response->json());
    }

    public function getPlaces(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ];
            return response($response);
        }

        $userId = $request->input('userId');

        $response = Http::get("https://apt-heartily-lamprey.ngrok-free.app/get_places/?user_id=$userId");

        if ($response->status() !== 200 && !isset($response->json()['status'])) {
            $response = [
                'status' => 'error',
                'message' => 'Failed to fetch user places'
            ];
            return response($response);
        }

        return response($response->json());
    }

    public function createTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userId' => 'required|string',
            'placeId' => 'required|string',
            'nickname' => 'required|string',
            'input' => 'required|string',
            'output' => 'required|string',
            'avatar' => 'required|string',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ];
            return response($response);
        }

        $userId = $request->input('userId');
        $placeId = $request->input('placeId');
        $nickname = $request->input('nickname');
        $input = $request->input('input');
        $output = $request->input('output');
        $avatar = $request->input('avatar');

        $transaction = new Transactions();
        $transaction->username = $nickname;
        $transaction->avatar = $avatar;
        $transaction->userId = $userId;
        $transaction->sum = $input;
        $settings = Settings::first();
        $transaction->sumRobux = $input * $settings->rate;
        $transaction->status = 'pending';
        $transaction->save();

        $array = array (

            $amount = $input,
            $payment = $transaction->id,
            $shop = 11866,
            $currency = 'RUB',
            $desc = 'Покупка Robux',
            $secret = '1c29a9ab2d7a2b3929f357ba41dcc847' //Узнайте свой секретный ключ в личном кабинете
            
            ); 
        // Соединение массива в строку и хеширование функцией md5
        $sign = md5(implode('|', $array));

        $url = "https://payok.io/pay?amount=$amount&payment=$payment&shop=$shop&currency=$currency&desc=$desc&sign=$sign";

        $response = response()->json([
            'status' => 'success',
            'message' => 'Transaction created',
            'url' => $url
        ]);

        return $response;
    }

    public function successTransaction(Request $request)
    {
        $payok_ips = [
            '195.64.101.191',
            '194.124.49.173',
            '45.8.156.144',
            '5.180.194.179',
            '5.180.194.127',
            '2a0b:1580:5ad7:0dea:de47:10ae:ecbf:111a'
        ];

        if (!in_array($request->ip(), $payok_ips)) {
            $response = [
                'status' => 'error',
                'message' => 'Invalid IP'
            ];
            return response($response);
        }

        $transaction = Transactions::find("id", $request->input('payment_id'));

        if (!$transaction) {
            $response = [
                'status' => 'error',
                'message' => 'Transaction not found'
            ];
            return response($response);
        }

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
        $transaction->account = $validAccount->id;
        $transaction->status = "success_pay";
        $response = Http::post("https://apt-heartily-lamprey.ngrok-free.app/buy_a_gamepass/", [
            'userId' => $transaction->userIdAccount,
            'cookie' => $validAccount->cookie,
            'price' => $transaction->sumRobux,
        ]);

        if($response->status() !== 200 && $transaction->status != 'success') {
            return response()->json(['status' => 'error', 'message' => 'Error while retrying transaction']);
        }

        $validAccount->robuxSpent += $transaction->sumRobux;
        $validAccount->save();

        $user = Accounts::find($transaction->userId);

        $dollarExchangeRate = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js');
        $dollarExchangeRate = json_decode($dollarExchangeRate);
        $dollarRate = $dollarExchangeRate->Valute->USD->Value;

        $sumToDollar = $transaction->sum / $dollarRate;

        $transaction->status = 'success';
        $user->balance += $sumToDollar;

        $transaction->save();

        return response($response->json());

    }
}
