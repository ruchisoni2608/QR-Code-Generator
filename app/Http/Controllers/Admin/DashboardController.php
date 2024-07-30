<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $products = 0;
        return view('admin.dashboard', compact('products'));
    }


    public function loadNotifications()
    {
        $notifications = Auth::user()->unreadNotifications;
        $html = view('components.notification-list', compact('notifications'))->render();
        $count = count($notifications);

        return response()->json(['html' => $html, 'count' => $count]);
    }
}
