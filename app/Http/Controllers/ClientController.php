<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function login(Request $request)
    {
        $nickname = $request->input('nickname');

        $response = response()->json([
            'message' => 'Logged in successfully',
            "redirect" => route("index")
        ]);
        $coockie =  cookie()->forever('username', $nickname);

        return $response->withCookie($coockie);
    }
}
