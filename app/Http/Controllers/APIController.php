<?php

namespace App\Http\Controllers;

use Validator, Redirect, Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Team;
use App\Models\User;
use Users;
use Blogs;
use Auth;
use DB;

class APIController extends Controller {

    public function indexAPI() {
        $username = "ID01ID82519210660158";
        $password = "password";
        $url = 'https://uatbbps.idbibank.com/APIService/biller-category-list/urn:tenantId:ID01/';

        $response = Http::withoutVerifying()
            ->withBasicAuth($username, $password)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->post($url);
        
        // $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');
        $statusCode = $response->status();
        $responseContent = $response->body();
        $header = $response->headers();

        var_dump($header);
        echo "Status Code: $statusCode<br>";
        echo "Response Content: $responseContent";

        // Use dd() to display the structured response content
        dd(json_decode($responseContent));
    }

    public function apicall123() {
        $username = "ID01ID82519210660158";
        $password = "password";
        $remote_url = 'https://uatbbps.idbibank.com/APIService/biller-list/urn:tenantId:ID01';

        // Create a stream
        $opts = array(
            'http' => array(
                'method' => "POST",
                'header' => "Authorization: Basic " . base64_encode("$username:$password"),
                'content' => http_build_query([
                    // Add any POST data here if required
                ])
            )
        );
        $context = stream_context_create($opts);
        // Open the URL using the HTTP headers and POST data set above
        $file = file_get_contents($remote_url, false, $context);
        if ($file !== false) {
            echo $file;
        } else {
            echo "API request failed.";
        }
    }

    public function apiCall() {
        $username = "ID01ID82519210660158";
        $password = "password";
        $remote_url = 'https://uatbbps.idbibank.com/APIService/biller-list/urn:tenantId:ID01';

        $response = Http::withHeaders([
            'Authorization' => 'Basic SUQwMUlEODI1MTkyMTA2NjAxNTg6cGFzc3dvcmQ=',
            'Content-Type' => 'application/json',
        ])->post ( $remote_url); // Replace with your API endpoint

        if ($response->successful()) {
            $responseData = $response->json();
            // Handle the API response
            } else {
            // Handle API request failure
            echo $response->body();
        }

        // $response = Http::withHeaders([
        //     'Authorization' => 'Basic SUQwMUlEODI1MTkyMTA2NjAxNTg6cGFzc3dvcmQ=',
        //     // Add any other request headers as needed
        // ])->post($remote_url, [
        //     // Add any POST data here if required
        // ]);
        // if ($response->successful()) {
        //     // Handle the API response here, e.g., print it or process it further
        //     echo $response->body();
        // } else {
        //     // Handle the case where the request fails
        //     echo "API request failed.";
        // }
    }
}