<?php
/**
 * SearchApi
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
 * Swagger Codegen version: 2.4.43
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
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
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
     * Operation searchRestaurants
     *
     * @param  string $query query (required)
     * @param  string $country_id country_id (required)
     * @param  string $include_archived_stores include_archived_stores (optional)
     * @param  string $search_type search_type (optional)
     * @param  string $published_status published_status (optional)
     * @param  int $page page (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Flipdish\\Client\Models\RestApiPaginationResultRestaurant
     */
    public function searchRestaurants($query, $country_id, $include_archived_stores = null, $search_type = null, $published_status = null, $page = null, $limit = null)
    {
        list($response) = $this->searchRestaurantsWithHttpInfo($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit);
        return $response;
    }

    /**
     * Operation searchRestaurantsWithHttpInfo
     *
     * @param  string $query (required)
     * @param  string $country_id (required)
     * @param  string $include_archived_stores (optional)
     * @param  string $search_type (optional)
     * @param  string $published_status (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Flipdish\\Client\Models\RestApiPaginationResultRestaurant, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchRestaurantsWithHttpInfo($query, $country_id, $include_archived_stores = null, $search_type = null, $published_status = null, $page = null, $limit = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiPaginationResultRestaurant';
        $request = $this->searchRestaurantsRequest($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit);

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
                        '\Flipdish\\Client\Models\RestApiPaginationResultRestaurant',
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
            }
            throw $e;
        }
    }

    /**
     * Operation searchRestaurantsAsync
     *
     * 
     *
     * @param  string $query (required)
     * @param  string $country_id (required)
     * @param  string $include_archived_stores (optional)
     * @param  string $search_type (optional)
     * @param  string $published_status (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchRestaurantsAsync($query, $country_id, $include_archived_stores = null, $search_type = null, $published_status = null, $page = null, $limit = null)
    {
        return $this->searchRestaurantsAsyncWithHttpInfo($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchRestaurantsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $query (required)
     * @param  string $country_id (required)
     * @param  string $include_archived_stores (optional)
     * @param  string $search_type (optional)
     * @param  string $published_status (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchRestaurantsAsyncWithHttpInfo($query, $country_id, $include_archived_stores = null, $search_type = null, $published_status = null, $page = null, $limit = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiPaginationResultRestaurant';
        $request = $this->searchRestaurantsRequest($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit);

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
     * Create request for operation 'searchRestaurants'
     *
     * @param  string $query (required)
     * @param  string $country_id (required)
     * @param  string $include_archived_stores (optional)
     * @param  string $search_type (optional)
     * @param  string $published_status (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchRestaurantsRequest($query, $country_id, $include_archived_stores = null, $search_type = null, $published_status = null, $page = null, $limit = null)
    {
        // verify the required parameter 'query' is set
        if ($query === null || (is_array($query) && count($query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling searchRestaurants'
            );
        }
        // verify the required parameter 'country_id' is set
        if ($country_id === null || (is_array($country_id) && count($country_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country_id when calling searchRestaurants'
            );
        }

        $resourcePath = '/api/v1.0/search/restaurants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($country_id !== null) {
            $queryParams['countryId'] = ObjectSerializer::toQueryValue($country_id);
        }
        // query params
        if ($include_archived_stores !== null) {
            $queryParams['includeArchivedStores'] = ObjectSerializer::toQueryValue($include_archived_stores);
        }
        // query params
        if ($search_type !== null) {
            $queryParams['searchType'] = ObjectSerializer::toQueryValue($search_type);
        }
        // query params
        if ($published_status !== null) {
            $queryParams['publishedStatus'] = ObjectSerializer::toQueryValue($published_status);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
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
