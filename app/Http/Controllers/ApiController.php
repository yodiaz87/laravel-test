<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    /**
     * Get github users
     *
     * @return [json] user[]
     */
    public function githubUsers(Request $request)
    {
        $client = new Client();
        $res = $client->get('https://api.github.com/users');

        return $res->getBody();
    }
}
