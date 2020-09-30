<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class GeneroController extends Controller
{

    public function getGeneros()
    {
        $key = '1f54bd990f1cdfb230adb312546d765d';
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/genre/movie/list?api_key='.$key.'&language=en-US');

        echo $response->getBody();
    }
}
