<?php
/**
 * ExportControllerApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Apis;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MailSlurp\ApiException;
use MailSlurp\Configuration;
use MailSlurp\HeaderSelector;
use MailSlurp\ObjectSerializer;

/**
 * ExportControllerApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportControllerApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation exportEntities
     *
     * Export inboxes link callable via browser
     *
     * @param  string $export_type export_type (required)
     * @param  string $api_key api_key (required)
     * @param  string $output_format output_format (required)
     * @param  string $filter filter (optional)
     * @param  string $list_separator_token list_separator_token (optional)
     * @param  bool $exclude_previously_exported exclude_previously_exported (optional)
     * @param  \DateTime $created_earliest_time created_earliest_time (optional)
     * @param  \DateTime $created_oldest_time created_oldest_time (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string[]
     */
    public function exportEntities($export_type, $api_key, $output_format, $filter = null, $list_separator_token = null, $exclude_previously_exported = null, $created_earliest_time = null, $created_oldest_time = null)
    {
        list($response) = $this->exportEntitiesWithHttpInfo($export_type, $api_key, $output_format, $filter, $list_separator_token, $exclude_previously_exported, $created_earliest_time, $created_oldest_time);
        return $response;
    }

    /**
     * Operation exportEntitiesWithHttpInfo
     *
     * Export inboxes link callable via browser
     *
     * @param  string $export_type (required)
     * @param  string $api_key (required)
     * @param  string $output_format (required)
     * @param  string $filter (optional)
     * @param  string $list_separator_token (optional)
     * @param  bool $exclude_previously_exported (optional)
     * @param  \DateTime $created_earliest_time (optional)
     * @param  \DateTime $created_oldest_time (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function exportEntitiesWithHttpInfo($export_type, $api_key, $output_format, $filter = null, $list_separator_token = null, $exclude_previously_exported = null, $created_earliest_time = null, $created_oldest_time = null)
    {
        $request = $this->exportEntitiesRequest($export_type, $api_key, $output_format, $filter, $list_separator_token, $exclude_previously_exported, $created_earliest_time, $created_oldest_time);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation exportEntitiesAsync
     *
     * Export inboxes link callable via browser
     *
     * @param  string $export_type (required)
     * @param  string $api_key (required)
     * @param  string $output_format (required)
     * @param  string $filter (optional)
     * @param  string $list_separator_token (optional)
     * @param  bool $exclude_previously_exported (optional)
     * @param  \DateTime $created_earliest_time (optional)
     * @param  \DateTime $created_oldest_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportEntitiesAsync($export_type, $api_key, $output_format, $filter = null, $list_separator_token = null, $exclude_previously_exported = null, $created_earliest_time = null, $created_oldest_time = null)
    {
        return $this->exportEntitiesAsyncWithHttpInfo($export_type, $api_key, $output_format, $filter, $list_separator_token, $exclude_previously_exported, $created_earliest_time, $created_oldest_time)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exportEntitiesAsyncWithHttpInfo
     *
     * Export inboxes link callable via browser
     *
     * @param  string $export_type (required)
     * @param  string $api_key (required)
     * @param  string $output_format (required)
     * @param  string $filter (optional)
     * @param  string $list_separator_token (optional)
     * @param  bool $exclude_previously_exported (optional)
     * @param  \DateTime $created_earliest_time (optional)
     * @param  \DateTime $created_oldest_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportEntitiesAsyncWithHttpInfo($export_type, $api_key, $output_format, $filter = null, $list_separator_token = null, $exclude_previously_exported = null, $created_earliest_time = null, $created_oldest_time = null)
    {
        $returnType = 'string[]';
        $request = $this->exportEntitiesRequest($export_type, $api_key, $output_format, $filter, $list_separator_token, $exclude_previously_exported, $created_earliest_time, $created_oldest_time);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'exportEntities'
     *
     * @param  string $export_type (required)
     * @param  string $api_key (required)
     * @param  string $output_format (required)
     * @param  string $filter (optional)
     * @param  string $list_separator_token (optional)
     * @param  bool $exclude_previously_exported (optional)
     * @param  \DateTime $created_earliest_time (optional)
     * @param  \DateTime $created_oldest_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exportEntitiesRequest($export_type, $api_key, $output_format, $filter = null, $list_separator_token = null, $exclude_previously_exported = null, $created_earliest_time = null, $created_oldest_time = null)
    {
        // verify the required parameter 'export_type' is set
        if ($export_type === null || (is_array($export_type) && count($export_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $export_type when calling exportEntities'
            );
        }
        // verify the required parameter 'api_key' is set
        if ($api_key === null || (is_array($api_key) && count($api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_key when calling exportEntities'
            );
        }
        // verify the required parameter 'output_format' is set
        if ($output_format === null || (is_array($output_format) && count($output_format) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $output_format when calling exportEntities'
            );
        }

        $resourcePath = '/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($export_type !== null) {
            if('form' === 'form' && is_array($export_type)) {
                foreach($export_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['exportType'] = $export_type;
            }
        }
        // query params
        if ($api_key !== null) {
            if('form' === 'form' && is_array($api_key)) {
                foreach($api_key as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['apiKey'] = $api_key;
            }
        }
        // query params
        if ($output_format !== null) {
            if('form' === 'form' && is_array($output_format)) {
                foreach($output_format as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['outputFormat'] = $output_format;
            }
        }
        // query params
        if ($filter !== null) {
            if('form' === 'form' && is_array($filter)) {
                foreach($filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter'] = $filter;
            }
        }
        // query params
        if ($list_separator_token !== null) {
            if('form' === 'form' && is_array($list_separator_token)) {
                foreach($list_separator_token as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['listSeparatorToken'] = $list_separator_token;
            }
        }
        // query params
        if ($exclude_previously_exported !== null) {
            if('form' === 'form' && is_array($exclude_previously_exported)) {
                foreach($exclude_previously_exported as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['excludePreviouslyExported'] = $exclude_previously_exported;
            }
        }
        // query params
        if ($created_earliest_time !== null) {
            if('form' === 'form' && is_array($created_earliest_time)) {
                foreach($created_earliest_time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['createdEarliestTime'] = $created_earliest_time;
            }
        }
        // query params
        if ($created_oldest_time !== null) {
            if('form' === 'form' && is_array($created_oldest_time)) {
                foreach($created_oldest_time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['createdOldestTime'] = $created_oldest_time;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
     * Operation getExportLink
     *
     * Get export link
     *
     * @param  string $export_type export_type (required)
     * @param  \MailSlurp\Models\ExportOptions $export_options export_options (required)
     * @param  string $api_key api_key (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\ExportLink
     */
    public function getExportLink($export_type, $export_options, $api_key = null)
    {
        list($response) = $this->getExportLinkWithHttpInfo($export_type, $export_options, $api_key);
        return $response;
    }

    /**
     * Operation getExportLinkWithHttpInfo
     *
     * Get export link
     *
     * @param  string $export_type (required)
     * @param  \MailSlurp\Models\ExportOptions $export_options (required)
     * @param  string $api_key (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\ExportLink, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExportLinkWithHttpInfo($export_type, $export_options, $api_key = null)
    {
        $request = $this->getExportLinkRequest($export_type, $export_options, $api_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\ExportLink' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\ExportLink', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\ExportLink';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\MailSlurp\Models\ExportLink',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getExportLinkAsync
     *
     * Get export link
     *
     * @param  string $export_type (required)
     * @param  \MailSlurp\Models\ExportOptions $export_options (required)
     * @param  string $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExportLinkAsync($export_type, $export_options, $api_key = null)
    {
        return $this->getExportLinkAsyncWithHttpInfo($export_type, $export_options, $api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExportLinkAsyncWithHttpInfo
     *
     * Get export link
     *
     * @param  string $export_type (required)
     * @param  \MailSlurp\Models\ExportOptions $export_options (required)
     * @param  string $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExportLinkAsyncWithHttpInfo($export_type, $export_options, $api_key = null)
    {
        $returnType = '\MailSlurp\Models\ExportLink';
        $request = $this->getExportLinkRequest($export_type, $export_options, $api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getExportLink'
     *
     * @param  string $export_type (required)
     * @param  \MailSlurp\Models\ExportOptions $export_options (required)
     * @param  string $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getExportLinkRequest($export_type, $export_options, $api_key = null)
    {
        // verify the required parameter 'export_type' is set
        if ($export_type === null || (is_array($export_type) && count($export_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $export_type when calling getExportLink'
            );
        }
        // verify the required parameter 'export_options' is set
        if ($export_options === null || (is_array($export_options) && count($export_options) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $export_options when calling getExportLink'
            );
        }

        $resourcePath = '/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($export_type !== null) {
            if('form' === 'form' && is_array($export_type)) {
                foreach($export_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['exportType'] = $export_type;
            }
        }
        // query params
        if ($api_key !== null) {
            if('form' === 'form' && is_array($api_key)) {
                foreach($api_key as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['apiKey'] = $api_key;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($export_options)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($export_options));
            } else {
                $httpBody = $export_options;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
