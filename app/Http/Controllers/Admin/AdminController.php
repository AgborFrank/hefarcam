<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   public function dashboard(){

    $pageTitle = 'Dashboard';
        return view('backend.admin.dashboard', compact('pageTitle'));
   }
}
