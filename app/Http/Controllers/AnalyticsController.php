<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function index(){
    	$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(8))->first();
    	
    	return $analyticsData;
    }
}
