<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Banner;
use App\Section;
use App\Message;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $visitors_last_week= 0;
        $visitors_last_month= 0;

        $analyticsDataLastWeek = Analytics::fetchVisitorsAndPageViews(Period::days(9));
        $analyticsDataLastMonth = Analytics::fetchVisitorsAndPageViews(Period::months(1));

        foreach($analyticsDataLastWeek as $week) {
            $visitors_last_week += $week['visitors'];
        }

        foreach($analyticsDataLastMonth as $month) {
            $visitors_last_month += $month['visitors'];
        }

        //Actualizando array de la sesión para cambiar el numero de mensajes no leídos
        $request->session()->forget('unread_messages');

        $unread_messages = Message::where('open',0)->count();
        session(['unread_messages' => $unread_messages]);

        return view('admin.index',compact('unread_messages','visitors_last_week','visitors_last_month'));
    }	
}
