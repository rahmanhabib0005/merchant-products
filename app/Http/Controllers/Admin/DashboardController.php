<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $merchants = Merchant::all();
        return view('dashboard.dashboard',['merchants' => $merchants]);
    }
}
