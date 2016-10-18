<?php

namespace Advance\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/Content');

    }

    public function user(){

       return view('admin/add_user');
    }

    public function manage_user(){
        $data = User::all();

        return view('admin/manage_user')->withData($data);
    }

    public function edit_user($id){
       $data= User::find($id);

        return view('admin/edit_user')->withData($data);
    }

    public function delete_user($id){
        $data= User::find($id);
        $data->delete();

        return back()->withInput();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   

    public function register_user(Request $request){

        $user =new User;
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
         $user->save();
        
        // User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]);

        return back()->withInput();
    }
}
