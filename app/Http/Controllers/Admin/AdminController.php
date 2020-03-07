<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $adminsCount = User::role('admin')->count();
        $usersCount = User::all()->count() - $adminsCount;
        return view('admin.index',['usersCount'=>$usersCount]);
    }
}
