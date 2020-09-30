<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function key(){
        return '1f54bd990f1cdfb230adb312546d765d';
    }

    public function getLancamentos(){

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/latest?api_key='.$this->key().'&language=en-US');
       // echo $response->getStatusCode();
       // echo $response->getHeaderLine('content-type');
        echo $response->getBody();
    }


    public function getBemAvaliados(){

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/top_rated?api_key='.$this->key().'&language=en-US&page=1');

        echo $response->getBody();
    }

    public function getByID($id){

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/'.$id.'?api_key='.$this->key().'&language=en-US');

        echo $response->getBody();
    }

    public function getVideo($id){

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/'.$id.'/videos?api_key='.$this->key().'&language=en-US');

        echo $response->getBody();
    }










}
