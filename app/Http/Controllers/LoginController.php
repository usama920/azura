<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function LoginPage()
    {
        $whmcsUrl = "https://portal.casthost.net/";
        $api_identifier = "s1xS6qAtUE0z5HoYdFVnE2wO3HXfHQ2g";
        $api_secret = "XzBYD7151kGeMaU7ApoFKkLgXZKEc9QC";

        // Set post values
        $postfields = array(
            'identifier' => 'Usama',
            'secret' => md5('TempPass12!'),
            'action' => 'GetStats',
            'responsetype' => 'json',
        );

        // Call the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
        $response = curl_exec($ch);
        // if (curl_error($ch)) {
        //     die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        // }
        curl_close($ch);

        // Decode response
        // $jsonData = json_decode($response, true);

        // Dump array structure for inspection
        // var_dump($jsonData);
        echo "<pre>";
        print_r($response);
        die;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://portal.casthost.net/includes/api.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(
                array(
                    'action' => 'GetProducts',
                    'username' => 's1xS6qAtUE0z5HoYdFVnE2wO3HXfHQ2g',
                    'password' => 'XzBYD7151kGeMaU7ApoFKkLgXZKEc9QC',
                    'pid' => '81',
                    'responsetype' => 'json',
                )
            )
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        echo "<pre>";
        print_r($response);
        die;

        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function TryLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = ["username" => $request->username, "password" => $request->password];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            Session::flash('message', 'Invalid Credentials');
            Session::flash('alert-type', 'error');
            return redirect()->back();
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
