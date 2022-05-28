<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
// use GuzzleHttp\Client;
// $client = new GuzzleHttp();
// $res = $client->request('GET', 'http://localhost:1111/V1/loginuser');

// namespace App\Validators;
// use GuzzleHttp\Client;
// class ReCaptcha
// {
//     public function validate($attribute, $value, $parameters, $validator)
//     {
//         echo 'asd';
//         // $client = new Client;
//         // $response = $client->post('http://localhost:1111/V1/loginuser');
//         // $body = json_decode((string)$response->getBody());
//         // return $body->success;
//     }
// }
// echo 'a';
// class testuser {
//    public function test()
// {
//     // $uri = "http://localhost:1111/V1/loginuser";
//     // $response = Request::get($uri)->send();
//     // $this->assertEquals("application/json", $response->headers["Content-Type"]);
//     // $this->assertContains("Amsterdam", $response->body);
    
//     // return $response->body;

// }
// }

$uri = "http://localhost:1111/V1/loginuser";
$response = Request::get($uri)->send();
$this->assertEquals("application/json", $response->headers["Content-Type"]);
$this->assertContains("Amsterdam", $response->body);
