<?php

namespace App\Http\Controllers;

use App\Models\User;
use AzuraCast\Api\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function CreateStation()
    {
        $data = [
            "name" => "AzuraTest Radio",
            "short_name" => "azuratest_radioo",
            "is_enabled" => true,
            "frontend_type" => "icecast",
            "frontend_config" => [
                "string"
            ],
            "backend_type" => "liquidsoap",
            "backend_config" => [
                "string"
            ],
            "description" => "A sample radio station.",
            "url" => "https://azuracast.casthost.net/",
            "genre" => "Various",
            "radio_base_dir" => "/var/azuracast/stations/azuratest_radioo",
            "enable_requests" => true,
            "request_delay" => 5,
            "request_threshold" => 15,
            "disconnect_deactivate_streamer" => 0,
            "enable_streamers" => false,
            "is_streamer_live" => false,
            "enable_public_page" => true,
            "enable_on_demand" => true,
            "enable_on_demand_download" => true,
            "enable_hls" => true,
            "api_history_items" => 5,
            "timezone" => "UTC",
            "branding_config" => [
                "string"
            ]
        ];

        $json_data = json_encode($data);
        $url = "https://azuracast.casthost.net/api/admin/stations";
        $ch = curl_init();
        $authorization = "Authorization: Bearer af4571e92bf86f25:a674a91ef59dfdd699d98eae1f658af1";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($ch));
        print_r($response);
        curl_close($ch);
    }
}
