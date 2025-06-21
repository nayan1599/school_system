<?php

namespace App\Http\Controllers\Admin;

 
// app/Http/Controllers/Admin/DashboardController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
// app/Http/Controllers/Admin/DashboardController.php
