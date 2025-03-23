<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function profile(){
        return view("pages.dashboard.profile-page");
    }
    public function category(){
        return view("pages.dashboard.category-page");
    }
    public function product(){
        return view("pages.dashboard.product-page");
    }
    public function invoice(){
        return view("pages.dashboard.invoice-page");
    }
    public function dashboard(){
        return view("pages.dashboard.dashboard-page");
    }
           public function report(){
        return view("pages.dashboard.report-page");
    }
  
}
