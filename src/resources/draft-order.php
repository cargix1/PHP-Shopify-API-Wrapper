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
         *    getDraftOrders() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "getDraftOrders" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/draft_orders.json",
            "summary" => "Retrieve a list of Draft Orders",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show orders last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show orders last updated before date (format: 2008-12-31 03:00)."
                ),
                "ids" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        /**
         *    getDraftOrder() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "getDraftOrder" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/draft_orders/{id}.json",
            "summary" => "Retrieve a specific draft order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the draft order."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        /**
         *    updateDraftOrder() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "updateDraftOrder" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/draft_orders/{id}.json",
            "summary" => "Change a draft order’s attributes",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the draft order."
                ),
                "draft_order" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the draft order."
                        ),
                        "note_attributes" => array(
                            "type" => "array",
                            "location" => "json",
                            "description" => ""
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        )
                    )
                )
            )
        ),

        /**
         *    getDraftOrderCount() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "getDraftOrderCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/draft_orders/count.json",
            "summary" => "Retrieve a count of all the draft orders.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                ),

            )
        ),
        

        /**
         *    sendDraftOrderInvoice() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "sendDraftOrderInvoice" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/draft_orders/{id}/send_invoice.json",
            "summary" => "Close an order",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the draft order."
                )
            )
        ),


        /**
         *    deleteDraftOrder() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "deleteDraftOrder" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/draft_orders/{id}.json",
            "summary" => "Delete a draft order",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the draft order."
                )
            )
        ),


        /**
         *    completeDraftOrder() method
         *
         *    reference: http://docs.shopify.com/api/draftorder
         */
        "completeDraftOrder" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/orders/{id}/complete.json",
            "summary" => "Complete a draft order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the draft order"
                ),
                "payment_pending" => array(
                    "type" => "boolean",
                    "location" => "query",
                    "description" => ""
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
