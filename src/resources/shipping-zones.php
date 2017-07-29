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

      /**
         *    getShippingZones() method
         *
         *    reference: https://help.shopify.com/api/reference/shipping_zone
         */
        "getShippingZones" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/shipping_zones.json",
            "summary" => "Receive a list of all shipping zones.",
            "responseModel" => "defaultJsonResponse"
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
