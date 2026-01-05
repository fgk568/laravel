<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Exercise;
use App\Models\Food;
use App\Models\Activity;
use App\Models\Meal;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'customers' => Customer::count(),
            'exercises' => Exercise::count(),
            'foods' => Food::count(),
            'activities' => Activity::count(),
            'meals' => Meal::count(),
        ];

        return view('dashboard', compact('counts'));
    }
}