<?php

namespace App\Http\Controllers;

use App\Models\OauthAccessTokens;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
     

       
    }


    public function show(Request $request)
    {
        return OauthAccessTokens::find($request->get("token"));
    }

    public function find($id)
    {
        $this->user = $this->user::find($id);

        return $this->user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
