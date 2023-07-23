<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\User;
use App\Models\specialist;
use App\Models\Service;
use PhpParser\Node\Expr\FuncCall;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDoctor = Doctor::count();
        $totalPatient = Patient::count();
        $totalRegister = User::count();
        $totalStaff = User::count();
        $totalspecialist = Specialist::count();
        $totalService = Service::count();
        return view('admin.dashboard.index', compact('totalDoctor', 'totalPatient', 'totalRegister', 'totalStaff', 'totalspecialist', 'totalService'));
    }
    public function test()
    {
        echo "test this";
    }
}
