<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */




    public function getLogin()
    {

        return  view('dashboard.login');
        // $data = Auth::user();
        // $username = $data->name;
        // return view('dashboard.admin.layout',['user'=>$username]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        // validate uder data
        //   dd($request);
        $validation = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
            ]);
            //  get only email & password
            $user_data = $request->only('email', 'password');
            // use Auth to check if data existe i database
            // Authentication passed...
            Auth::guard('admin')->attempt($user_data);
            if($user_data) {
            // Alert::success('Successfuly', 'login');
            return redirect('/admin');
        } else {
            return redirect()->to('/admin/login')->with('fail', 'User Not Register.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
