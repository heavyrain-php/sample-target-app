<?php

/**
 * Swagger Petstore - OpenAPI 3.0
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */

namespace OpenAPIServer\Model;

use OpenAPIServer\BaseModel;

/**
 * Pet
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class Pet extends BaseModel
{
    /**
     * @var string Models namespace.
     * Can be required for data deserialization when model contains referenced schemas.
     */
    protected const MODELS_NAMESPACE = '\OpenAPIServer\Model';

    /**
     * @var string Constant with OAS schema of current class.
     * Should be overwritten by inherited class.
     */
    protected const MODEL_SCHEMA = <<<'SCHEMA'
{
  "required" : [ "name", "photoUrls" ],
  "type" : "object",
  "properties" : {
    "id" : {
      "type" : "integer",
      "format" : "int64",
      "example" : 10
    },
    "name" : {
      "type" : "string",
      "example" : "doggie"
    },
    "category" : {
      "$ref" : "#/components/schemas/Category"
    },
    "photoUrls" : {
      "type" : "array",
      "xml" : {
        "wrapped" : true
      },
      "items" : {
        "type" : "string",
        "xml" : {
          "name" : "photoUrl"
        }
      }
    },
    "tags" : {
      "type" : "array",
      "xml" : {
        "wrapped" : true
      },
      "items" : {
        "$ref" : "#/components/schemas/Tag"
      }
    },
    "status" : {
      "type" : "string",
      "description" : "pet status in the store",
      "enum" : [ "available", "pending", "sold" ]
    }
  },
  "xml" : {
    "name" : "pet"
  }
}
SCHEMA;
}
