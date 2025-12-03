<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('notification');
    }

    public function markAsRead($id)
    {
        return back()->with('success', 'Notification marked as read');
    }

    public function markAllAsRead()
    {
        return back()->with('success', 'All notifications marked as read');
    }
}
