<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ACController extends Controller
{
    public function fish() {
                $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://acnhapi.com/v1/fish/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $response=json_decode($response);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        return view('preview', [
        'response'=>$response]
        );
        }

    }
    public function fishUnit($name) {
        $curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://acnhapi.com/v1/fish/".$name,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
]);

$response = curl_exec($curl);
$response=json_decode($response);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  return view('fishUnit', [
    'response'=>$response]
    );
}
    }
    public function sea() {
        $curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://acnhapi.com/v1/sea",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/x-www-form-urlencoded"
  ],
]);

$response = curl_exec($curl);
$response=json_decode($response);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  return view('preview', [
    'response'=>$response]
    );
}
    }
    public function seaUnit($name) {
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://acnhapi.com/v1/sea/".$name,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ],
        ]);
        
        $response = curl_exec($curl);
        $response=json_decode($response);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return view('seaUnit', [
            'response'=>$response]);
        }
    }
    public function bugs() {
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://acnhapi.com/v1/bugs",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ],
        ]);
        
        $response = curl_exec($curl);
        $response=json_decode($response);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return view('preview', [
            'response'=>$response]
            );
        }
    }
    public function bugsUnit($name) {
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://acnhapi.com/v1/bugs/".$name,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ],
        ]);
        
        $response = curl_exec($curl);
        $response=json_decode($response);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return view('bugsUnit', [
            'response'=>$response]);
        }
    }
}
