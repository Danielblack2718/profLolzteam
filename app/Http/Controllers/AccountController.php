<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Accounts;

class AccountController extends Controller
{
    public function add(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "cookie" => "required|string",
            "rate" => "required|numeric",
            "proxy" => "required|numeric"
        ]);

        

        if ($validator->fails()) {
            $response = [
                "status" => "error",
                "message" => "Validation failed",
                "errors" => $validator->errors()
            ];
            return response($response);
        }

        $cookie = $request->input("cookie");

        $responseCheckCookie = Http::post("https://apt-heartily-lamprey.ngrok-free.app/check_cookies/", [
            'cookie' => $cookie,
        ]);

        if ($responseCheckCookie->status() !== 200 && !isset($responseCheckCookie->json()['status'])) {
            $response = [
                "status" => "error",
                "message" => "Failed to check cookie"
            ];
            return response($response);
        }

        $rate = $request->input("rate");

        $proxy = $request->input("proxy");

        $account = new Accounts();
        $account->userId = auth()->user()->id;


        $account->robuxSpent = 0;
        $account->cookie = $cookie;
        $account->rate = $rate;
        $account->proxy = $proxy;

        $responseCheck = Http::post("https://apt-heartily-lamprey.ngrok-free.app/get_info/", [
            'cookie' => $cookie,
        ]);

        if ($responseCheckCookie->status() !== 200 && !isset($responseCheckCookie->json()['status'])) {
            $response = [
                "status" => "error",
                "message" => "Failed to check cookie"
            ];
            return response($response);
        }


        $account->userIdAccount = $responseCheck->user_id;
        $account->robuxLeft = $responseCheck->robux;
        $account->avatar = $responseCheck->photo_url;
        $account->nickname = $responseCheck->name;
        $account->save();

        $response = [
            "status" => "success",
            "message" => "Account added successfully",
            "data" => [
                "rate" => $rate,
                "proxy" => $proxy
            ]
        ];

        return response($response)->withCookie(cookie("last_rate", $rate))->withCookie(cookie("last_proxy", $proxy));
    }
}
