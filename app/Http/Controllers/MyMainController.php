<?php

namespace App\Http\Controllers;

use App\Models\Assort;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\DB;

class MyMainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function hto()
    {
        return view('hto');
    }

    /*public function nomen()
    {
        return view('nomen');
    }
*/
    public function nomen()
    {
        $nomen = Assort::all();
        return view('nomen', compact('nomen'));

    }


}
