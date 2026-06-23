<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'new_users' => User::where('created_at', '>=', now()->subDays(7))->count(),
            'active_sessions' => 12, // Dummy data
            'revenue' => '$12,500' // Dummy data
        ];

        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentUsers'));
    }
}
