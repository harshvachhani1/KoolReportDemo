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
        // $report->run();
        return view("dataShow",["report"=>$report]);
        // $data = Lead::all();
        // $data = Lead::paginate(10);
        // $data = Lead::join('lead_sources', 'lead_sources.id', '=', 'leads.lead_source_id ')->gelead_owner_idt();

        $data= DB::table('leads')
        ->join('campaigns','campaigns.id','=','leads.user_id')
        ->join('lead_quotes','lead_quotes.lead_id','=','leads.id')
        ->join('quotes','quotes.id','=','lead_quotes.quote_id')
        // ->where('leads.user_id','=','users.id')
        // ->select(
        // 'campaigns.id as person_leads_id',
        // 'campaigns'
        // )
        ->get();
        // ->get();

        return view('dataShow', ['getUserData' => $data]);
    }


    // function showUser(){
    //     return "hello";
    // }
}
