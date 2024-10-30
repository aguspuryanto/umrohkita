<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        $xml = file_get_contents(FCPATH . "data/data.json"); 
        $jsonData = json_decode($xml, true);

        return view('home', ['data' => $jsonData]);
    }
}
