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
 * Do not edit the class manually.
 * Extend this class with your controller. You can inject dependencies via class constructor,
 * @see https://github.com/PHP-DI/Slim-Bridge basic example.
 */
namespace OpenAPIServer\Api;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpNotImplementedException;

/**
 * AbstractPetApi Class Doc Comment
 *
 * @package OpenAPIServer\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractPetApi
{
    /**
     * POST addPet
     * Summary: Add a new pet to the store
     * Notes: Add a new pet to the store
     * Output-Formats: [application/json, application/xml]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function addPet(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $message = "How about implementing addPet as a POST method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE deletePet
     * Summary: Deletes a pet
     * Notes: delete a pet
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param int $petId Pet id to delete
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deletePet(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $headers = $request->getHeaders();
        $apiKey = $request->hasHeader('api_key') ? $headers['api_key'] : null;
        $message = "How about implementing deletePet as a DELETE method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET findPetsByStatus
     * Summary: Finds Pets by status
     * Notes: Multiple status values can be provided with comma separated strings
     * Output-Formats: [application/json, application/xml]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function findPetsByStatus(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $status = (key_exists('status', $queryParams)) ? $queryParams['status'] : null;
        $message = "How about implementing findPetsByStatus as a GET method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET findPetsByTags
     * Summary: Finds Pets by tags
     * Notes: Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
     * Output-Formats: [application/json, application/xml]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function findPetsByTags(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $tags = (key_exists('tags', $queryParams)) ? $queryParams['tags'] : null;
        $message = "How about implementing findPetsByTags as a GET method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getPetById
     * Summary: Find pet by ID
     * Notes: Returns a single pet
     * Output-Formats: [application/json, application/xml]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param int $petId ID of pet to return
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getPetById(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $message = "How about implementing getPetById as a GET method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updatePet
     * Summary: Update an existing pet
     * Notes: Update an existing pet by Id
     * Output-Formats: [application/json, application/xml]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updatePet(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $message = "How about implementing updatePet as a PUT method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST updatePetWithForm
     * Summary: Updates a pet in the store with form data
     * Notes: 
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param int $petId ID of pet that needs to be updated
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updatePetWithForm(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $name = (key_exists('name', $queryParams)) ? $queryParams['name'] : null;
        $status = (key_exists('status', $queryParams)) ? $queryParams['status'] : null;
        $message = "How about implementing updatePetWithForm as a POST method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST uploadFile
     * Summary: uploads an image
     * Notes: 
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param int $petId ID of pet to update
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function uploadFile(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $additionalMetadata = (key_exists('additionalMetadata', $queryParams)) ? $queryParams['additionalMetadata'] : null;
        $body = $request->getParsedBody();
        $message = "How about implementing uploadFile as a POST method in OpenAPIServer\Api\PetApi class?";
        throw new HttpNotImplementedException($request, $message);
    }
}