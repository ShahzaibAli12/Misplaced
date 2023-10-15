<?php

namespace App\Http\Controllers\AdminControllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class Dashboard extends Controller
{
    public function dashboard()
    {

        $users = User::select('created_at')
            ->orderBy('created_at')
            ->get();

// Format the data for Chart.js
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'x' => $user->created_at->format('Y-m-d'), // Format the timestamp as needed
                'y' => 1, // Each user represents a value of 1 on the y-axis
            ];
        }
        $totalLost = 200;
        $totalFound = 120;
        $recovered = 80;
        $unrecovered = 100;
        $totalProfit = 8120;
        $totalCustomer = count($data);
        return view('AdminViews.Dashboard.index', compact(['totalLost', 'totalFound', 'recovered', 'unrecovered', 'totalCustomer', 'totalProfit', 'data']));
    }
}
