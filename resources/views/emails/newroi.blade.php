Hello {{ $demo->receiver_name }},
This is a notification of a new return on investment (ROI) on your investment account with Solflextrading.
 
ROI information:
 
Plan: {{ $demo->receiver_plan }}

Amount: {{ $demo->received_amount }}

Date: {{ $demo->date }}
 
 
Kind regards,

{{ $demo->sender }}.