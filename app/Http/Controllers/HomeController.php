<?php

namespace App\Http\Controllers;

use App\Models\User;
use AzuraCast\Api\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function Dashboard()
    {
        return view('dashboard');
    }

    public function NowPlaying()
    {
        $api = Client::create(
            'https://azuracast.casthost.net',
            'af4571e92bf86f25:a674a91ef59dfdd699d98eae1f658af1'
        );
        $nowPlaying = $api->stations();

        print_r($nowPlaying);
        die;
    }
}
