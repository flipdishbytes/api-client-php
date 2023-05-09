<?php
/**
 * HttpRequestResponseLogsApi
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
 * HttpRequestResponseLogsApi Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpRequestResponseLogsApi
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
     * Operation getLogs
     *
     * @param  \DateTime $start start (required)
     * @param  \DateTime $end end (required)
     * @param  string $app_id app_id (required)
     * @param  int $filter_by_user_id filter_by_user_id (optional)
     * @param  string $guid guid (optional)
     * @param  int $page page (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Flipdish\\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog
     */
    public function getLogs($start, $end, $app_id, $filter_by_user_id = null, $guid = null, $page = null, $limit = null)
    {
        list($response) = $this->getLogsWithHttpInfo($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit);
        return $response;
    }

    /**
     * Operation getLogsWithHttpInfo
     *
     * @param  \DateTime $start (required)
     * @param  \DateTime $end (required)
     * @param  string $app_id (required)
     * @param  int $filter_by_user_id (optional)
     * @param  string $guid (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Flipdish\\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogsWithHttpInfo($start, $end, $app_id, $filter_by_user_id = null, $guid = null, $page = null, $limit = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog';
        $request = $this->getLogsRequest($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit);

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
                        '\Flipdish\\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog',
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
     * Operation getLogsAsync
     *
     * 
     *
     * @param  \DateTime $start (required)
     * @param  \DateTime $end (required)
     * @param  string $app_id (required)
     * @param  int $filter_by_user_id (optional)
     * @param  string $guid (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogsAsync($start, $end, $app_id, $filter_by_user_id = null, $guid = null, $page = null, $limit = null)
    {
        return $this->getLogsAsyncWithHttpInfo($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \DateTime $start (required)
     * @param  \DateTime $end (required)
     * @param  string $app_id (required)
     * @param  int $filter_by_user_id (optional)
     * @param  string $guid (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogsAsyncWithHttpInfo($start, $end, $app_id, $filter_by_user_id = null, $guid = null, $page = null, $limit = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog';
        $request = $this->getLogsRequest($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit);

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
     * Create request for operation 'getLogs'
     *
     * @param  \DateTime $start (required)
     * @param  \DateTime $end (required)
     * @param  string $app_id (required)
     * @param  int $filter_by_user_id (optional)
     * @param  string $guid (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLogsRequest($start, $end, $app_id, $filter_by_user_id = null, $guid = null, $page = null, $limit = null)
    {
        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling getLogs'
            );
        }
        // verify the required parameter 'end' is set
        if ($end === null || (is_array($end) && count($end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end when calling getLogs'
            );
        }
        // verify the required parameter 'app_id' is set
        if ($app_id === null || (is_array($app_id) && count($app_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app_id when calling getLogs'
            );
        }

        $resourcePath = '/api/v1.0/{appId}/interactions/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end);
        }
        // query params
        if ($filter_by_user_id !== null) {
            $queryParams['filterByUserId'] = ObjectSerializer::toQueryValue($filter_by_user_id);
        }
        // query params
        if ($guid !== null) {
            $queryParams['guid'] = ObjectSerializer::toQueryValue($guid);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }

        // path params
        if ($app_id !== null) {
            $resourcePath = str_replace(
                '{' . 'appId' . '}',
                ObjectSerializer::toPathValue($app_id),
                $resourcePath
            );
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
