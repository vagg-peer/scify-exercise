<?php

namespace App\Http\Controllers;
use App\Helpers\CsvHandler;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        if (session('username'))
        {
            return redirect()->route('users.activity');
        }

        return redirect()->route('login.page');
    }

    public function usersActivity()
    {
        
        $data=[];

        if (!session('username')){
            return redirect()->route('login.page');
        }
        try
        {
            $url = 'https://docs.google.com/spreadsheets/d/1LZ-3N3Qqkqq4bLHasZGX8VGg5c_f3ljCz8F0vsgm6fY/export?gid=605276642&format=csv';
            $data = CsvHandler::csvToarray($url);

        }
        catch (\Exception $e) 
        {
            $data = false;
        }
        return view('users_activity', ['data' => $data]);
    }

    public function login()
    {
        if (session('username'))
        {
            return redirect()->route('users.activity');
        }

        return view('login');
    }

    

}
