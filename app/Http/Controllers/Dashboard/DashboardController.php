<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('cadmin');
    // }

    public function index(){
        return view('dashboard.index');
    }

    // public function products(){

    //     return view('dashboard.ecommerce.add');
    // }


}
