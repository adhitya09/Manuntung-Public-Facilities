<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{

    // Super Admin
    public function index_superadmin()
    {
        $title = 'Dashboard';
        return view('dashboard.superadmin.index', compact('title'));
    }

    // User
    public function index_Users()
    {
        $users = User::where('role', 'user')->get();
        $title = 'Users';
        return view('dashboard.superadmin.users.index', compact('title', 'users'));
    }

    public function destroy_Users(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', 'Gagal menghapus user.');
        }
    }

    // Admin
    public function index_Admin()
    {
        $title = 'Admin';
        return view('dashboard.superadmin.admin.index', compact('title'));
    }

    // Admin
    public function admin()
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
