<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Plan;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Models\Invoice;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index() {
        $previousMonth = Carbon::now()->subMonth();

        $users = User::count();
        $visitors = Visitor::count();
        $plans = Plan::paginate(10);
        $plans_count = Plan::count();
        $invoices = Invoice::with("plan")->orderByDesc('id')->limit(10)->get();
        $invoices_count = Invoice::count();
        $invoices_sum = Invoice::sum('amount');

        $users_count_last_month = User::whereMonth('created_at', $previousMonth->month)
                              ->whereYear('created_at', $previousMonth->year)->count();
        $users_count_this_month = User::whereMonth('created_at', Carbon::now()->month)
                             ->whereYear('created_at', Carbon::now()->year)->count();

        $visitors_count_last_month = Visitor::whereMonth('created_at', $previousMonth->month)
                              ->whereYear('created_at', $previousMonth->year)->count();
        $visitors_count_this_month = Visitor::whereMonth('created_at', Carbon::now()->month)
                             ->whereYear('created_at', Carbon::now()->year)->count();

        $plans_count_last_month = Plan::whereMonth('created_at', $previousMonth->month)
                              ->whereYear('created_at', $previousMonth->year)->count();
        $plans_count_this_month = Plan::whereMonth('created_at', Carbon::now()->month)
                             ->whereYear('created_at', Carbon::now()->year)->count();

        $invoice_count_last_month = Invoice::whereMonth('created_at', $previousMonth->month)
                              ->whereYear('created_at', $previousMonth->year)->count();
        $invoice_count_this_month = Invoice::whereMonth('created_at', Carbon::now()->month)
                             ->whereYear('created_at', Carbon::now()->year)->count();

        $invoice_sales_last_month = Invoice::whereMonth('created_at', $previousMonth->month)
                              ->whereYear('created_at', $previousMonth->year)->sum('amount');
        $invoice_sales_this_month = Invoice::whereMonth('created_at', Carbon::now()->month)
                             ->whereYear('created_at', Carbon::now()->year)->sum('amount');

        // return inertia view
        return Inertia::render('Dashboard/Dashboard', [
           "data" => [
                'users'=>$users,
                'visitors'=>$visitors,
                'plans' => $plans,
                'plan_count'=>$plans_count,
                'invoices'=>$invoices,
                'invoice_count'=>$invoices_count,
                'invoice_sum'=>$invoices_sum,

                "users_count_last_month" => $users_count_last_month,
                "users_count_this_month" => $users_count_this_month,
                "visitors_count_last_month" => $visitors_count_last_month,
                "visitors_count_this_month" => $visitors_count_this_month,
                "plans_count_last_month" => $plans_count_last_month,
                "plans_count_this_month" => $plans_count_this_month,
                "invoice_count_last_month" => $invoice_count_last_month,
                "invoice_count_this_month" => $invoice_count_this_month,
                "invoice_sales_last_month" => $invoice_sales_last_month,
                "invoice_sales_this_month" => $invoice_sales_this_month,
            ]
        ]);
    }
}
