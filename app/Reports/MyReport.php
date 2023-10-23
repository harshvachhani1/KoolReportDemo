<?php
namespace App\Reports;
use App\Models\Lead;
use koolreport\laravel\Friendship;

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
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
            ->select('campaigns.number_of_accounts',
            'campaigns.number_of_appointment_set',
            'campaigns.budgeted_cost',
            'campaigns.name',
            'campaigns.number_of_contacts',
            'campaigns.number_of_converted_leads',
            'campaigns.end_date',
            'campaigns.expected_response',
            'campaigns.expected_revenue',
            'campaigns.number_of_proposed_quotes',
            'campaigns.number_of_responses',
            'campaigns.start_date',
            'campaigns.amount_all_quotes',
            'campaigns.amount_won_quotes',
            'campaigns.number_of_won_quotes',
            'quotes.subject',
            'quotes.description',
            'quotes.billing_address',
            'quotes.shipping_address',
            'quotes.discount_percent',
            'quotes.discount_amount',
            'quotes.tax_amount',
            'quotes.adjustment_amount',
            'quotes.sub_total',
            'quotes.grand_total',
            'quotes.expired_at',
            'quotes.created_at',
            'quotes.updated_at',
            'quotes.stripe_payment_status',
            'quotes.esign_document_expires_at',
            'quotes.stripe_invoice_sent',
            'quotes.stripe_invoice_date',
            'quotes.quote_phone',
            'quotes.quote_billing_name',
            'quotes.quote_validity',
            'quotes.quote_type',
            'quotes.total_quote_fte',
            'quotes.total_quote_amount',
            'quotes.start_at',)
            // ->take(10)
            )
        ->pipe($this->dataStore("leads"));
    }
}
