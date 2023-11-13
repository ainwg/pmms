<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ViewWeeklyReport(){
        return view('GenerateReport.WeeklyReportPage');
    }

    public function ViewMonthlyReport(){
        return view('GenerateReport.MonthlyReportPage');
    }

    public function ViewYearlyReport(){
        return view('GenerateReport.YearlyReportPage');
    }

    public function ViewStockReport(){
        return view('GenerateReport.StockReportPage');
    }

}
