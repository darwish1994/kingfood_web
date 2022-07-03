<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use App\Models\HeaderMenu;
use App\Models\Offer;
use App\Models\Section;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();

        $offers = Offer::all()->take(3);

        return View('index', compact('sections', 'offers'));


    }


    public static function getHeaderMenu()
    {


        if (Auth::check())
            switch (Auth::user()->role_id) {

                case 1:
                    $header = HeaderMenu::all();
                    break;
                case 2:
                    $header = HeaderMenu::whereIn('role', [0, 2])->get();
                    break;

                case 3:
                    $header = HeaderMenu::where('role', 3)->get();
                    break;

            }

        else
            $header = HeaderMenu::where('role', 0)->get();

        return $header;

    }


    public static function getContact()
    {

        return ContactDetail::all();

    }


    public function getHome()
    {

        $home["section"] = Section::all();
        $home["offer"] = Offer::all();

        $data["data"] = $home;

        return response()->json($data, 200);


    }

}
