<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == "admin"){
            return view('dashboard');
        } else {
            return view('userdashboard');
        } 
    }
}
