<?php

namespace App\Http\Controllers\Site;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function index(){
        return 'This is Site';
    }
    // public function login()
    // {
    //     return view("dashboard.login");
    // }

    public function postlogin(Request $request)
    {
        // validate uder data
        $validation = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        //  get only email & password
        $user_data = $request->only('email', 'password');
        // use Auth to check if data existe i database
        // Authentication passed...

        if (Auth::attempt($user_data)) {
            Alert::success('Successfuly', 'login');
            return redirect('/admin');
        } else {
            return redirect()->to('/login')->with('fail','User Not Register.');
        }
    }

    public function register()
    {
        return view("dashboard.register");
    }

    public function postregister(Request $request)
    {
        // data validation
        $user_data = $request->validate([
            'name' => ['required'],
            'email' => ['email', 'required', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        // use the module user tyo save to database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {

            session()->flash('message', ' successfully submit.');
        } else {
            session()->flash('message', 'submit falier!.');
        }

        return redirect()->to('/register');
    }


    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }
}
