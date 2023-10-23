<?php
namespace App\Reports;

use App\Models\Lead;
use koolreport\laravel\Friendship;

class MyReport extends \koolreport\KoolReport
{
    use Friendship;
    // By adding above statement, you have claim the friendship between two frameworks
    // As a result, this report will be able to accessed all databases of Laravel
    // There are no need to define the settings() function anymore
    // while you can do so if you have other datasources rather than those
    // defined in Laravel.
    function settings()
    {
        return array(
            "dataSources"=>array(
                "elo"=>array(
                    "class"=>'\koolreport\laravel\Eloquent', // This is important
                )
            )
        );
    }

    function setup()
    {
        // Let say, you have "sale_database" is defined in Laravel's database settings.
        // Now you can use that database without any futher setitngs.
        $this->src("elo")->query(
            Lead::join('campaigns','campaigns.id','=','leads.user_id')
            ->join('lead_quotes','lead_quotes.lead_id','=','leads.id')
            ->join('quotes','quotes.id','=','lead_quotes.quote_id')
            ->select('campaigns.number_of_accounts','campaigns.number_of_appointment_set','campaigns.budgeted_cost','campaigns.name','campaigns.number_of_contacts','campaigns.number_of_converted_leads','campaigns.end_date','campaigns.expected_response','campaigns.expected_revenue','campaigns.number_of_proposed_quotes','campaigns.number_of_responses','campaigns.start_date','campaigns.amount_all_quotes','campaigns.amount_won_quotes','campaigns.number_of_won_quotes')
            ->take(5)
            )
        ->pipe($this->dataStore("leads"));
    }
}
