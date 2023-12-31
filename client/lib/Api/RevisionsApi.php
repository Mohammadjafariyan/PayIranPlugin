<?php
/**
 * RevisionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dynamic API Specification
 *
 * This is a dynamically generated API specification for all endpoints existing on the current project.
 *
 * OpenAPI spec version: 12.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.43
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * RevisionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RevisionsApi
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
     * Operation getRevision
     *
     * Retrieve a Revision
     *
     * @param  int $id Index (required)
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20076
     */
    public function getRevision($id, $fields = null, $meta = null)
    {
        list($response) = $this->getRevisionWithHttpInfo($id, $fields, $meta);
        return $response;
    }

    /**
     * Operation getRevisionWithHttpInfo
     *
     * Retrieve a Revision
     *
     * @param  int $id Index (required)
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20076, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRevisionWithHttpInfo($id, $fields = null, $meta = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20076';
        $request = $this->getRevisionRequest($id, $fields, $meta);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\InlineResponse20076',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRevisionAsync
     *
     * Retrieve a Revision
     *
     * @param  int $id Index (required)
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRevisionAsync($id, $fields = null, $meta = null)
    {
        return $this->getRevisionAsyncWithHttpInfo($id, $fields, $meta)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRevisionAsyncWithHttpInfo
     *
     * Retrieve a Revision
     *
     * @param  int $id Index (required)
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRevisionAsyncWithHttpInfo($id, $fields = null, $meta = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20076';
        $request = $this->getRevisionRequest($id, $fields, $meta);

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
     * Create request for operation 'getRevision'
     *
     * @param  int $id Index (required)
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRevisionRequest($id, $fields = null, $meta = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getRevision'
            );
        }

        $resourcePath = '/revisions/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($fields)) {
            $fields = ObjectSerializer::serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }
        // query params
        if ($meta !== null) {
            $queryParams['meta'] = ObjectSerializer::toQueryValue($meta, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation getRevisions
     *
     * List Revisions
     *
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  int $limit A limit on the number of objects that are returned. (optional)
     * @param  int $offset How many items to skip when fetching data. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     * @param  string[] $sort How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. (optional)
     * @param  string[] $filter Select items in collection by given conditions. (optional)
     * @param  string $search Filter by items that contain the given search query in one of their fields. (optional)
     * @param  int $page Cursor for use in pagination. Often used in combination with limit. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20075
     */
    public function getRevisions($fields = null, $limit = null, $offset = null, $meta = null, $sort = null, $filter = null, $search = null, $page = null)
    {
        list($response) = $this->getRevisionsWithHttpInfo($fields, $limit, $offset, $meta, $sort, $filter, $search, $page);
        return $response;
    }

    /**
     * Operation getRevisionsWithHttpInfo
     *
     * List Revisions
     *
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  int $limit A limit on the number of objects that are returned. (optional)
     * @param  int $offset How many items to skip when fetching data. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     * @param  string[] $sort How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. (optional)
     * @param  string[] $filter Select items in collection by given conditions. (optional)
     * @param  string $search Filter by items that contain the given search query in one of their fields. (optional)
     * @param  int $page Cursor for use in pagination. Often used in combination with limit. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20075, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRevisionsWithHttpInfo($fields = null, $limit = null, $offset = null, $meta = null, $sort = null, $filter = null, $search = null, $page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20075';
        $request = $this->getRevisionsRequest($fields, $limit, $offset, $meta, $sort, $filter, $search, $page);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\InlineResponse20075',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRevisionsAsync
     *
     * List Revisions
     *
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  int $limit A limit on the number of objects that are returned. (optional)
     * @param  int $offset How many items to skip when fetching data. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     * @param  string[] $sort How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. (optional)
     * @param  string[] $filter Select items in collection by given conditions. (optional)
     * @param  string $search Filter by items that contain the given search query in one of their fields. (optional)
     * @param  int $page Cursor for use in pagination. Often used in combination with limit. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRevisionsAsync($fields = null, $limit = null, $offset = null, $meta = null, $sort = null, $filter = null, $search = null, $page = null)
    {
        return $this->getRevisionsAsyncWithHttpInfo($fields, $limit, $offset, $meta, $sort, $filter, $search, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRevisionsAsyncWithHttpInfo
     *
     * List Revisions
     *
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  int $limit A limit on the number of objects that are returned. (optional)
     * @param  int $offset How many items to skip when fetching data. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     * @param  string[] $sort How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. (optional)
     * @param  string[] $filter Select items in collection by given conditions. (optional)
     * @param  string $search Filter by items that contain the given search query in one of their fields. (optional)
     * @param  int $page Cursor for use in pagination. Often used in combination with limit. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRevisionsAsyncWithHttpInfo($fields = null, $limit = null, $offset = null, $meta = null, $sort = null, $filter = null, $search = null, $page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20075';
        $request = $this->getRevisionsRequest($fields, $limit, $offset, $meta, $sort, $filter, $search, $page);

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
     * Create request for operation 'getRevisions'
     *
     * @param  string[] $fields Control what fields are being returned in the object. (optional)
     * @param  int $limit A limit on the number of objects that are returned. (optional)
     * @param  int $offset How many items to skip when fetching data. (optional)
     * @param  string $meta What metadata to return in the response. (optional)
     * @param  string[] $sort How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. (optional)
     * @param  string[] $filter Select items in collection by given conditions. (optional)
     * @param  string $search Filter by items that contain the given search query in one of their fields. (optional)
     * @param  int $page Cursor for use in pagination. Often used in combination with limit. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRevisionsRequest($fields = null, $limit = null, $offset = null, $meta = null, $sort = null, $filter = null, $search = null, $page = null)
    {

        $resourcePath = '/revisions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($fields)) {
            $fields = ObjectSerializer::serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($meta !== null) {
            $queryParams['meta'] = ObjectSerializer::toQueryValue($meta, null);
        }
        // query params
        if (is_array($sort)) {
            $sort = ObjectSerializer::serializeCollection($sort, 'csv', true);
        }
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort, null);
        }
        // query params
        if (is_array($filter)) {
            $filter = ObjectSerializer::serializeCollection($filter, 'multi', true);
        }
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
