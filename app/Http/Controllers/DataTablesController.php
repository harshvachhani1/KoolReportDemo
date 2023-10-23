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
    }
}
