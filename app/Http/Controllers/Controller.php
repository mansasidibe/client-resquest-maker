<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getGuzzleRequest()
    {

    }

    public function postGuzzleRequest(Request $req)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get($req->url);
        $response = $request->getBody()->getContents();

        dd($response);
    }
}
