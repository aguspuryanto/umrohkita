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

    public function product($slug)
    {
        $xml = file_get_contents(FCPATH . "data/detail.json"); 
        $jsonData = json_decode($xml, true);
        $data = $jsonData['data'];
        // foreach ($data as $key => $value) {
        //     if ($value['slug'] == $slug) {
        //         return view('product', ['data' => $value]);
        //     }
        // }
        return view('product', ['data' => $data]);
    }
}
