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

declare(strict_types=1);

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPIServer\App;

use Neomerx\Cors\Contracts\AnalysisResultInterface;
use Neomerx\Cors\Contracts\AnalyzerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;
use Slim\Exception\HttpBadRequestException;
use Slim\Middleware\ErrorMiddleware;
use Slim\ResponseEmitter as SlimResponseEmitter;

/**
 * Custom response emitter to support lazy CORS.
 * @see https://github.com/slimphp/Slim-Skeleton/blob/037cfa2b6885301fc32a5b18a00a251a534aac81/src/Application/ResponseEmitter/ResponseEmitter.php
 */
class ResponseEmitter extends SlimResponseEmitter
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ErrorMiddleware
     */
    protected $errorMiddleware;

    /**
     * @var AnalyzerInterface
     */
    protected $analyzer;

    /**
     * Set request.
     * @param RequestInterface $request
     * @return ResponseEmitter
     */
    public function setRequest(RequestInterface $request): ResponseEmitter
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Set error middleware.
     * @param ErrorMiddleware $errorMiddleware
     * @return ResponseEmitter
     */
    public function setErrorMiddleware(ErrorMiddleware $errorMiddleware): ResponseEmitter
    {
        $this->errorMiddleware = $errorMiddleware;
        return $this;
    }

    /**
     * Set CORS request analyzer.
     * @param AnalyzerInterface $analyzer
     * @return ResponseEmitter
     */
    public function setAnalyzer(AnalyzerInterface $analyzer): ResponseEmitter
    {
        $this->analyzer = $analyzer;
        return $this;
    }

    /**
     * Send the response the client
     *
     * @param ResponseInterface $response
     * @return void
     */
    public function emit(ResponseInterface $response): void
    {
        // slightly modified CORS handler from package documentation example
        // @see https://github.com/neomerx/cors-psr7#sample-usage
        $cors = $this->analyzer->analyze($this->request);
        $errorMsg = null;

        switch ($cors->getRequestType()) {
            case AnalysisResultInterface::ERR_NO_HOST_HEADER:
                $errorMsg = 'CORS no host header in request';
                break;
            case AnalysisResultInterface::ERR_ORIGIN_NOT_ALLOWED:
                $errorMsg = 'CORS request origin is not allowed';
                break;
            case AnalysisResultInterface::ERR_METHOD_NOT_SUPPORTED:
                $errorMsg = 'CORS requested method is not supported';
                break;
            case AnalysisResultInterface::ERR_HEADERS_NOT_SUPPORTED:
                $errorMsg = 'CORS requested header is not allowed';
                break;
            case AnalysisResultInterface::TYPE_REQUEST_OUT_OF_CORS_SCOPE:
                // do nothing
                break;
            case AnalysisResultInterface::TYPE_PRE_FLIGHT_REQUEST:
            default:
                // actual CORS request
                $corsHeaders = $cors->getResponseHeaders();

                // add CORS headers to Response $response
                foreach ($corsHeaders as $name => $value) {
                    $response = $response->withHeader($name, $value);
                }
        }

        if (!empty($errorMsg)) {
            $exception = new HttpBadRequestException($this->request, sprintf('%s.', $errorMsg));
            $exception->setTitle(\sprintf('%d %s', $exception->getCode(), $errorMsg));
            $exception->setDescription($exception->getMessage());
            $response = $this->errorMiddleware->handleException($this->request, $exception);
        }

        if (ob_get_contents()) {
            ob_clean();
        }

        parent::emit($response);
    }
}
