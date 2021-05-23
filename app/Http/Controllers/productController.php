<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




}
