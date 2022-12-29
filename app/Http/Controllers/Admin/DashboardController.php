<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function orderQuantityByYear(Request $request)
    {
        $year = 0;
        $year = $request['year'];
        $result = DB::table('orders')
            ->whereNull('deleted_at')
            ->where('status', 'Đã giao')
            ->whereYear('created_at', $year)
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as qty'))
            ->groupBy('month')->get();
        return response()->json([
            'data' => $result
        ]);
    }

    public function turnoverByYear(Request $request)
    {
        $year = 0;
        $year = $request['year'];
        $result = DB::table('orders')
            ->whereNull('deleted_at')
            ->where('status', 'Đã giao')
            ->whereYear('created_at', $year)
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(total) as total'))
            ->groupBy('month')->get();
        return response()->json([
            'data' => $result
        ]);
    }
}
