<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoutesDashboardController extends Controller
{
    public function indexContentCMS(){
        return Inertia::render('Dashboards/DashboardCMS');
    }
}
