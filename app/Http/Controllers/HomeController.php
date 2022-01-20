<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place as PlaceModel;
use App\Models\User as UserModel;
use App\Models\Orders as OrderModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $place = PlaceModel::join('category', 'category.id', 'category_id')
                            ->where('category.id', 1)
                            ->get();
        return view('home', ['place'=>$place]);
    }
}
