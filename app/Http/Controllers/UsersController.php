<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use \App\User;

class UsersController extends Controller
{
    public function index()
    {
      // dd('hello');

      // $users = DB::table('users')->paginate(20);
      $users = DB::table('users')->simplePaginate(20);
      // $users = DB::table('users')->get();
      // $users = User::all();
      // $users = User::all()->paginate(20);

      // dd($users);

      return view('users.index', compact('users'));

    }
}
