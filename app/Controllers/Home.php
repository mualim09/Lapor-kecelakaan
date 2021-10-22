<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();
    }

    public function get_youtube_title($ref)
    {
        $json = file_get_contents('http://www.youtube.com/embed?url=http://www.youtube.com/watch?v=' . $ref . '&format=json');

        //get JSON video details
        $details = json_decode($json, true);

        //parse the JSON into an array
        return $details['title']; //return the video title
    }

    public function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }


    public function index()
    {
        $data = [
            'request' => $this->request,
            'db' => $this->db,
            'title' => 'LANDING PAGE',
        ];
        return view('landing/main/views', $data);
    }

    public function choose_user()
    {
        $data = [
            'request' => $this->request,
            'db' => $this->db,
            'title' => 'Masuk Sebagai',
        ];
        return view('landing/main/choose-user', $data);
    }
}
