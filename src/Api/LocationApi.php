<?php
/**
 * LocationApi
 * PHP version 5
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flipdish Open API v1.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Flipdish\\Client\ApiException;
use Flipdish\\Client\Configuration;
use Flipdish\\Client\HeaderSelector;
use Flipdish\\Client\ObjectSerializer;

/**
 * LocationApi Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createLocation
     *
     * Create a Location i.e: Table, Hotel Room, Car park space
     *
     * @param  \Flipdish\\Client\Models\CreateLocation $create_location_input Input data for creating the Location (required)
     * @param  int $location_area_id Id of the Location area where the Location belongs (required)
     * @param  string $app_id AppId i.e: (fd1234) (required)
     * @param  int $store_id Id of the Store (required)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function createLocation($create_location_input, $location_area_id, $app_id, $store_id)
    {
        list($response) = $this->createLocationWithHttpInfo($create_location_input, $location_area_id, $app_id, $store_id);
        return $response;
    }

    /**
     * Operation createLocationWithHttpInfo
     *
     * Create a Location i.e: Table, Hotel Room, Car park space
     *
     * @param  \Flipdish\\Client\Models\CreateLocation $create_location_input Input data for creating the Location (required)
     * @param  int $location_area_id Id of the Location area where the Location belongs (required)
     * @param  string $app_id AppId i.e: (fd1234) (required)
     * @param  int $store_id Id of the Store (required)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLocationWithHttpInfo($create_location_input, $location_area_id, $app_id, $store_id)
    {
        $returnType = 'object';
        $request = $this->createLocationRequest($create_location_input, $location_area_id, $app_id, $store_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Flipdish\\Client\Models\LocationAreaLocation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Flipdish\\Client\Models\RestApiErrorResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Flipdish\\Client\Models\RestApiUnauthorizedResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Flipdish\\Client\Models\RestApiForbiddenResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Flipdish\\Client\Models\RestApiErrorResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createLocationAsync
     *
     * Create a Location i.e: Table, Hotel Room, Car park space
     *
     * @param  \Flipdish\\Client\Models\CreateLocation $create_location_input Input data for creating the Location (required)
     * @param  int $location_area_id Id of the Location area where the Location belongs (required)
     * @param  string $app_id AppId i.e: (fd1234) (required)
     * @param  int $store_id Id of the Store (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLocationAsync($create_location_input, $location_area_id, $app_id, $store_id)
    {
        return $this->createLocationAsyncWithHttpInfo($create_location_input, $location_area_id, $app_id, $store_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLocationAsyncWithHttpInfo
     *
     * Create a Location i.e: Table, Hotel Room, Car park space
     *
     * @param  \Flipdish\\Client\Models\CreateLocation $create_location_input Input data for creating the Location (required)
     * @param  int $location_area_id Id of the Location area where the Location belongs (required)
     * @param  string $app_id AppId i.e: (fd1234) (required)
     * @param  int $store_id Id of the Store (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLocationAsyncWithHttpInfo($create_location_input, $location_area_id, $app_id, $store_id)
    {
        $returnType = 'object';
        $request = $this->createLocationRequest($create_location_input, $location_area_id, $app_id, $store_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createLocation'
     *
     * @param  \Flipdish\\Client\Models\CreateLocation $create_location_input Input data for creating the Location (required)
     * @param  int $location_area_id Id of the Location area where the Location belongs (required)
     * @param  string $app_id AppId i.e: (fd1234) (required)
     * @param  int $store_id Id of the Store (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createLocationRequest($create_location_input, $location_area_id, $app_id, $store_id)
    {
        // verify the required parameter 'create_location_input' is set
        if ($create_location_input === null || (is_array($create_location_input) && count($create_location_input) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_location_input when calling createLocation'
            );
        }
        // verify the required parameter 'location_area_id' is set
        if ($location_area_id === null || (is_array($location_area_id) && count($location_area_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $location_area_id when calling createLocation'
            );
        }
        // verify the required parameter 'app_id' is set
        if ($app_id === null || (is_array($app_id) && count($app_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app_id when calling createLocation'
            );
        }
        // verify the required parameter 'store_id' is set
        if ($store_id === null || (is_array($store_id) && count($store_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_id when calling createLocation'
            );
        }

        $resourcePath = '/api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($location_area_id !== null) {
            $resourcePath = str_replace(
                '{' . 'locationAreaId' . '}',
                ObjectSerializer::toPathValue($location_area_id),
                $resourcePath
            );
        }
        // path params
        if ($app_id !== null) {
            $resourcePath = str_replace(
                '{' . 'appId' . '}',
                ObjectSerializer::toPathValue($app_id),
                $resourcePath
            );
        }
        // path params
        if ($store_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeId' . '}',
                ObjectSerializer::toPathValue($store_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($create_location_input)) {
            $_tempBody = $create_location_input;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
