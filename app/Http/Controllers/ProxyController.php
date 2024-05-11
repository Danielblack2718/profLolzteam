<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Proxies;

class ProxyController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'proxy' => 'required|string', // Assuming the proxy details will be posted as a string
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ];
            return response($response);
        }

        $proxyString = $request->input('proxy');
        $proxyDetails = explode(':', $proxyString);

        if (count($proxyDetails) !== 5) {
            $response = [
                'status' => 'error',
                'message' => 'Invalid proxy format. Please provide protocol, host, port, username, and password separated by colons.'
            ];
            return response($response);
        }

        list($protocol, $host, $port, $username, $password) = $proxyDetails;

        if (!in_array($protocol, ['http', 'https'])) {
            $response = [
                'status' => 'error',
                'message' => 'Invalid protocol provided. Please use either http or https.'
            ];
            return response($response);
        }

        $proxy = new Proxies();
        $proxy->protocol = $protocol;
        $proxy->host = $host;
        $proxy->port = $port;
        $proxy->username = $username;
        $proxy->password = $password;
        $proxy->userId = auth()->user()->id;
        $proxy->save();

        $response = [
            'status' => 'success',
            'message' => 'Proxy added successfully',
            'data' => [
                'protocol' => $protocol,
                'host' => $host,
                'port' => $port,
                'username' => $username,
                'password' => $password
            ]
        ];

        return response($response);
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ];
            return response($response);
        }

        $proxyId = $request->input('id');
        $proxy = Proxies::find($proxyId);

        if (!$proxy) {
            $response = [
                'status' => 'error',
                'message' => 'Proxy not found'
            ];
            return response($response);
        }

        $proxy->delete();

        $response = [
            'status' => 'success',
            'message' => 'Proxy deleted successfully'
        ];

        return response($response);
    }
}
