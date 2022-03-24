<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



use App\Comment; //モデルと連携 インポート

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function in()
    {
        return view('in');
    }

    public function index()
    {
        $comments=Comment::all();
        return view('index',compact('comments'));
    }
    public function explanation()
    {
        return view('explanation');
    }

    public function ito()
    {
        return view('ito');
    }




}
