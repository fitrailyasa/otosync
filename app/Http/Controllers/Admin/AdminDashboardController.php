<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin dashboard, which shows a count of all the available resources.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all()->count();
        $roles = Role::all()->count();

        return view('admin.dashboard', compact('users', 'roles'));
    }
}
