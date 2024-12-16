<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{

    // Super Admin
    public function index_superadmin()
    {
        $title = 'Dashboard';
        return view('dashboard.superadmin.index', compact('title'));
    }
    // Admin
    public function index_admin()
    {
        $title = 'Dashboard';
        return view('dashboard.admin.index', compact('title'));
    }
    // User
    public function index_user()
    {
        $title = 'Dashboard';
        return view('dashboard.user.index', compact('title'));
    }
}
