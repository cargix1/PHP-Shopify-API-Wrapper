<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        "createFulfillmentEvent" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/fulfillments/{fulfilment_id}/events.json",
            "summary" => "Create a fulfilment event.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order.",
                    "required" => true
                ),
                "fulfilment_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The fulfillment ID number of the order.",
                    "required" => true
                ),
                "event" => array(
                    "location" => "json",
                    "parameters" => array(
						"status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),    
                    )
                )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);