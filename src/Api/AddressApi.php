<?php
/**
 * AddressApi
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
 * AddressApi Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressApi
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
     * Operation formByApp
     *
     * Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.
     *
     * @param  string $app_id Application (WhiteLabel) Id (WhiteLabelId or AppNameId). (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Flipdish\\Client\Models\RestApiResultAddressFormResponse
     */
    public function formByApp($app_id, $language = null)
    {
        list($response) = $this->formByAppWithHttpInfo($app_id, $language);
        return $response;
    }

    /**
     * Operation formByAppWithHttpInfo
     *
     * Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.
     *
     * @param  string $app_id Application (WhiteLabel) Id (WhiteLabelId or AppNameId). (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Flipdish\\Client\Models\RestApiResultAddressFormResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function formByAppWithHttpInfo($app_id, $language = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formByAppRequest($app_id, $language);

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
                        '\Flipdish\\Client\Models\RestApiResultAddressFormResponse',
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
     * Operation formByAppAsync
     *
     * Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.
     *
     * @param  string $app_id Application (WhiteLabel) Id (WhiteLabelId or AppNameId). (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formByAppAsync($app_id, $language = null)
    {
        return $this->formByAppAsyncWithHttpInfo($app_id, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation formByAppAsyncWithHttpInfo
     *
     * Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.
     *
     * @param  string $app_id Application (WhiteLabel) Id (WhiteLabelId or AppNameId). (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formByAppAsyncWithHttpInfo($app_id, $language = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formByAppRequest($app_id, $language);

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
     * Create request for operation 'formByApp'
     *
     * @param  string $app_id Application (WhiteLabel) Id (WhiteLabelId or AppNameId). (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function formByAppRequest($app_id, $language = null)
    {
        // verify the required parameter 'app_id' is set
        if ($app_id === null || (is_array($app_id) && count($app_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app_id when calling formByApp'
            );
        }

        $resourcePath = '/api/v1.0/app/{appId}/address/form';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
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
     * Operation formByCountry
     *
     * Provides a dyamic form definition for the given country code, with labels localized using the provided language.
     *
     * @param  string $country_code The 2 letter ISO country code, e.g.: IE. (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Flipdish\\Client\Models\RestApiResultAddressFormResponse
     */
    public function formByCountry($country_code, $language = null)
    {
        list($response) = $this->formByCountryWithHttpInfo($country_code, $language);
        return $response;
    }

    /**
     * Operation formByCountryWithHttpInfo
     *
     * Provides a dyamic form definition for the given country code, with labels localized using the provided language.
     *
     * @param  string $country_code The 2 letter ISO country code, e.g.: IE. (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Flipdish\\Client\Models\RestApiResultAddressFormResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function formByCountryWithHttpInfo($country_code, $language = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formByCountryRequest($country_code, $language);

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
                        '\Flipdish\\Client\Models\RestApiResultAddressFormResponse',
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
     * Operation formByCountryAsync
     *
     * Provides a dyamic form definition for the given country code, with labels localized using the provided language.
     *
     * @param  string $country_code The 2 letter ISO country code, e.g.: IE. (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formByCountryAsync($country_code, $language = null)
    {
        return $this->formByCountryAsyncWithHttpInfo($country_code, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation formByCountryAsyncWithHttpInfo
     *
     * Provides a dyamic form definition for the given country code, with labels localized using the provided language.
     *
     * @param  string $country_code The 2 letter ISO country code, e.g.: IE. (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formByCountryAsyncWithHttpInfo($country_code, $language = null)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formByCountryRequest($country_code, $language);

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
     * Create request for operation 'formByCountry'
     *
     * @param  string $country_code The 2 letter ISO country code, e.g.: IE. (required)
     * @param  string $language (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function formByCountryRequest($country_code, $language = null)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country_code when calling formByCountry'
            );
        }

        $resourcePath = '/api/v1.0/address/country/{countryCode}/form';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }

        // path params
        if ($country_code !== null) {
            $resourcePath = str_replace(
                '{' . 'countryCode' . '}',
                ObjectSerializer::toPathValue($country_code),
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
     * Operation formatGoogleAddress
     *
     * Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.
     *
     * @param  \Flipdish\\Client\Models\GoogleAddress $google_address A Google address object, as it is retuned from the maps API. (required)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Flipdish\\Client\Models\RestApiResultAddressFormResponse
     */
    public function formatGoogleAddress($google_address)
    {
        list($response) = $this->formatGoogleAddressWithHttpInfo($google_address);
        return $response;
    }

    /**
     * Operation formatGoogleAddressWithHttpInfo
     *
     * Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.
     *
     * @param  \Flipdish\\Client\Models\GoogleAddress $google_address A Google address object, as it is retuned from the maps API. (required)
     *
     * @throws \Flipdish\\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Flipdish\\Client\Models\RestApiResultAddressFormResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function formatGoogleAddressWithHttpInfo($google_address)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formatGoogleAddressRequest($google_address);

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
                        '\Flipdish\\Client\Models\RestApiResultAddressFormResponse',
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
     * Operation formatGoogleAddressAsync
     *
     * Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.
     *
     * @param  \Flipdish\\Client\Models\GoogleAddress $google_address A Google address object, as it is retuned from the maps API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formatGoogleAddressAsync($google_address)
    {
        return $this->formatGoogleAddressAsyncWithHttpInfo($google_address)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation formatGoogleAddressAsyncWithHttpInfo
     *
     * Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.
     *
     * @param  \Flipdish\\Client\Models\GoogleAddress $google_address A Google address object, as it is retuned from the maps API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function formatGoogleAddressAsyncWithHttpInfo($google_address)
    {
        $returnType = '\Flipdish\\Client\Models\RestApiResultAddressFormResponse';
        $request = $this->formatGoogleAddressRequest($google_address);

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
     * Create request for operation 'formatGoogleAddress'
     *
     * @param  \Flipdish\\Client\Models\GoogleAddress $google_address A Google address object, as it is retuned from the maps API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function formatGoogleAddressRequest($google_address)
    {
        // verify the required parameter 'google_address' is set
        if ($google_address === null || (is_array($google_address) && count($google_address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $google_address when calling formatGoogleAddress'
            );
        }

        $resourcePath = '/api/v1.0/address/google';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($google_address)) {
            $_tempBody = $google_address;
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