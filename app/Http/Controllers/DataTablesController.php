<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\lead_source;
use App\Reports\MyReport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataTablesController extends Controller
{
    public function __contruct()
    {
        $this->middleware("guest");
    }
    function allDataGet()
    {
        $report = new MyReport;
        return view("dataShow",["report"=>$report]);
        // $report->run();
        // $data= DB::table('leads')
        // ->join('campaigns','campaigns.id','=','leads.user_id')
        // ->join('lead_quotes','lead_quotes.lead_id','=','leads.id')
        // ->join('quotes','quotes.id','=','lead_quotes.quote_id')
        // ->where('leads.user_id','=','users.id')
        // ->select(
            // 'campaigns.id as person_leads_id',
            // 'campaigns'
            // )
            // ->get();
    }
}
