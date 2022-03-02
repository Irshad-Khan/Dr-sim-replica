<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\DashboardInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboardInterface;

    public function __construct(DashboardInterface $dashboardInterface)
    {
        $this->dashboardInterface = $dashboardInterface;
    }

    public function index()
    {
        return view('dashboard.index', [
            'data' => $this->dashboardInterface->index()
        ]);
    }
}
