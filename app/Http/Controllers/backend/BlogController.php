<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function create()
    {
        return view('backend.blog.create');
    }

    function store(Request $request)
    {

      dd($request->all);

        $request->validate(
            [
                'user_name' => 'required|min:5|max:30',
                'email' => 'required|email|min:5|max:500|unique: table_name',
                'password' => 'required|password|',
                'detail' => 'required|'
            ],
            [
                'user_name.required'=> 'Please Enter Your Name',
                'user_name.max'=> 'Maximam charecter 30',
                'email.required'=> 'Please Enter a valid email address',
                'password.required'=> 'Please Enter Your password',
                'detail.required'=> 'Please Enter Your detail',
                'detail.min'=> 'Your detail Minmam 10 charecter  ',
            ]
        );


        // DB::table('Blog')->insert([
        //     'user_name' =>$request->user_name,
        //     'email' =>$request->email,
        //     'password' =>$request->password,
        //     'detail' =>$request->detail,
        // ]);

        $user = new Blog();

        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->detail = $request->detail;

        $user->save();    

        // return back()->with('success','User Inserted Successfully');

    }

    function all(){

        return view('backend.blog.all');
    }
}



