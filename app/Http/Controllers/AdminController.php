<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\Assort;
use App\Models\Persons;
use App\Models\Review;
use App\Models\Services;
use App\Models\Visitors;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function login()
    {
        return view('admins.admin_login')->with('content_type', 'main');
    }

    function check(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'passwd' => 'required'
        ]);

        $admin = Admins::where('name', '=', $request->name)->first();

        if (!$admin) {
            return back()->with('fail', 'No such prefers');
        } else {
            $a = Hash::make($admin->passwd);
            if (Hash::check($request->passwd, $a)) {
                $request->session()->put('LoggedAdmin', $admin->name);
                $request->session()->put('LoggedAdminID', $admin->id);
                return redirect('adminpanel/addassorty');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }


    }

    function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            session()->pull('LoggedAdminID');
            return redirect('/adminpanel');
        }
    }


    function settings()
    {
        $data = ['LoggedAdmin' => Admins::where('name', '=', session('LoggedAdmin'))->first()];
        return view('admins.admin_settings', $data);
    }



    function showrev()
    {
        $review = Review::all();
        return view('admins.admin_review', compact('review'));
    }
    /*
       Lichnyy cabinet
       */
    function lkedit()
    {
        return view('admins.admin_settings');
    }




    /*
     *
     * Assorty
     *
     * */
    function showassorty()
    {
        $assorty = Assort::all();
        return view('admins.admin_assorty', compact('assorty'));
    }

    function asscheck(Request $request1)
    {
        $request1->validate([
            'title' => 'required|max: 80',
            'price' => 'required|max: 255',
        ]);

        $vis = new Assort();
        $vis->title = $request1->title;
        $vis->price = $request1->price;


        $visitor = Assort::where('title', '=', $request1->title)->first();

        if (!$visitor) {

            $save = $vis->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения поля Email');
            }

        } else {
            return back()->with('fail', 'This assorty is already here');
        }


        return view('admins.admin_assorty', compact('assorty'));

    }

    function assedit($id)
    {
        $pers = new Assort();
        return view('admins.admin_assortyedit', ['data' => $pers->find($id)]);

    }

    function asseditsubmit(Request $request, $id)
    {
        $pers = Assort::find($id);
        $pers->title = $request->title;
        $pers->price = $request->price;

        $pers->save();

        return redirect()->route('adminpanel.assorty');

    }

    function assdelete($id)
    {
        Assort::find($id)->delete();
        return redirect()->route('adminpanel.assorty');

    }

    function revdelete($id)
    {
        Review::find($id)->delete();
        return redirect()->route('adminpanel.review');

    }

    function servcheck(Request $request1)
    {
        $request1->validate([
            'title' => 'required|max: 80',
            'price' => 'required|max: 5',
            'length' => 'required|max: 4'
        ]);

        $serv = new Services();
        $serv->title = $request1->title;
        $serv->price = $request1->price;
        $serv->length = $request1->length;


        $service = Services::where('title', '=', $serv->title)->first();

        if (!$service) {

            $save = $serv->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения поля Email');
            }

        } else {
            return back()->with('fail', 'This visitor is already here');
        }


        return view('admin.admin_services', compact('service'));

    }

    function servedit($id)
    {
        $serv = new Services();
        return view('admin.admin_servicesedit', ['data' => $serv->find($id)]);

    }

    function serveditsubmit(Request $request, $id)
    {
        $serv = Services::find($id);
        $serv->title = $request->title;
        $serv->price = $request->price;
        $serv->length = $request->length;

        $serv->save();

        return redirect()->route('adminpanel.services');

    }

    function servdelete($id)
    {
        Services::find($id)->delete();
        return redirect()->route('adminpanel.services');

    }

}
