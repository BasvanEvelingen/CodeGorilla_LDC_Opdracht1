<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class QuestionsController extends Controller
{

    public function getQuestions()
    {

        $json = Storage::disk('local')->get('ldc_getquestions.json');

        $client = new Client();
        $URI = 'https://staging.ldc.nl';
        $headers = ['Content-Type' => 'application/json'];
        $promise = $client->requestAsync('POST', $URI, ['headers' => $headers, 'body' => $json])->then(
            function ($response) {
                return $response->getBody();
            }, function ($exception) {
                return $exception->getMessage();
            }
        );
        $response = $promise->wait();
        return view('questions')->with('data', json_decode($response, true));
    }
}
