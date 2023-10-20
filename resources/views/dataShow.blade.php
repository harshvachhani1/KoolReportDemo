<?php $report->render(); ?>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        tr:nth-child(even) {
            background-color: #f1efef;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 align="center">User Data</h1>
    <table class="table table-bordered">
        <tr>
            <td>campaignsId</td>
            <td>number_of_accounts</td>
            <td>number_of_appointment_set</td>
            <td>budgeted_cost</td>
            <td>name</td>
            <td>number_of_contacts</td>
            <td>number_of_converted_leads</td>
            <td>end_date</td>
            <td>expected_response</td>
            <td>expected_revenue</td>
            <td>number_of_proposed_quotes</td>
            <td>number_of_responses</td>
            <td>start_date</td>
            <td>amount_all_quotes</td>
            <td>amount_won_quotes</td>
            <td>number_of_won_quotes</td>

            <td>quotes_subject</td>
            <td>quotes_description</td>
            <td>quotes_billing_address</td>
            <td>quotes_shipping_address</td>
            <td>quotes_discount_percent</td>
            <td>quotes_discount_amount</td>
            <td>quotes_tax_amount</td>
            <td>quotes_adjustment_amount</td>
            <td>quotes_sub_total</td>
            <td>quotes_grand_total</td>
            <td>quotes_expired_at</td>
            <td>quotes_created_at</td>
            <td>quotes_updated_at</td>
            <td>quotes_stripe_payment_status</td>
            <td>quotes_esign_status</td>
            <td>quotes_esign_document_expires_at</td>
            <td>quotes_stripe_invoice_sent</td>
            <td>quotes_stripe_invoice_date</td>
            <td>quotes_quote_phone</td>
            <td>quotes_quote_billing_name</td>
            <td>quotes_quote_validity</td>
            <td>quotes_quote_type</td>
            <td>quotes_total_quote_fte</td>
            <td>quotes_total_quote_amount</td>
            <td>quotes_start_at</td>
        </tr>
        {{-- @dd($getUserData); --}}
        {{-- @foreach ($getUserData as $userData)
            <tr> --}}
                {{-- @dd($userData->id); --}}
                {{-- <td>{{ $userData->id }}</td>
                <td>{{ $userData->number_of_accounts }}</td>
                <td>{{ $userData->number_of_appointment_set }}</td>
                <td>{{ $userData->budgeted_cost }}</td>
                <td>{{ $userData->name }}</td>
                <td>{{ $userData->number_of_contacts }}</td>
                <td>{{ $userData->number_of_converted_leads }}</td>
                <td>{{ $userData->end_date }}</td>
                <td>{{ $userData->expected_response }}</td>
                <td>{{ $userData->expected_revenue }}</td>
                <td>{{ $userData->number_of_proposed_quotes }}</td>
                <td>{{ $userData->number_of_responses }}</td>
                <td>{{ $userData->start_date }}</td>
                <td>{{ $userData->amount_all_quotes }}</td>
                <td>{{ $userData->amount_won_quotes }}</td>
                <td>{{ $userData->number_of_won_quotes }}</td>

                <td>{{ $userData->subject}}</td>
                <td>{{ $userData->description }}</td>
                <td>{{ $userData->billing_address }}</td>
                <td>{{ $userData->shipping_address }}</td>
                <td>{{ $userData->discount_percent }}</td>
                <td>{{ $userData->discount_amount }}</td>
                <td>{{ $userData->tax_amount }}</td>
                <td>{{ $userData->adjustment_amount }}</td>
                <td>{{ $userData->sub_total }}</td>
                <td>{{ $userData->grand_total }}</td>
                <td>{{ $userData->expired_at }}</td>
                <td>{{ $userData->created_at }}</td>
                <td>{{ $userData->updated_at }}</td>
                <td>{{ $userData->stripe_payment_status }}</td>
                {{-- <td>{{ $userData->stripe_payment_status_logs }}</td> --}}
                {{-- <td>{{ $userData->esign_status }}</td> --}}
                {{-- <td>{{ $userData->envelope_id }}</td> --}}
                {{-- <td>{{ $userData->esign_api_response  }}</td> --}}
                {{-- <td>{{ $userData->esign_document_expires_at }}</td>
                <td>{{ $userData->stripe_invoice_sent }}</td>
                <td>{{ $userData->stripe_invoice_date }}</td>
                <td>{{ $userData->quote_phone }}</td>
                <td>{{ $userData->quote_billing_name }}</td>
                <td>{{ $userData->quote_validity }}</td>
                <td>{{ $userData->quote_type}}</td>
                <td>{{ $userData->total_quote_fte }}</td>
                <td>{{ $userData->total_quote_amount }}</td>
                <td>{{ $userData->start_at }}</td>
            </tr>
        @endforeach
        {!! $getUserData->links() !!}
    </table>
</div>
</body>
</html>  --}}

