<?php
/**
 * TableApi
 * PHP version 5
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QSR Automations API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QsrAutomations\Api\QsrAutomations.Api;

use \QsrAutomations\Api\ApiClient;
use \QsrAutomations\Api\ApiException;
use \QsrAutomations\Api\Configuration;
use \QsrAutomations\Api\ObjectSerializer;

/**
 * TableApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TableApi
{
    /**
     * API Client
     *
     * @var \QsrAutomations\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \QsrAutomations\Api\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\QsrAutomations\Api\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \QsrAutomations\Api\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \QsrAutomations\Api\ApiClient $apiClient set the API client
     *
     * @return TableApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation tableGetTableEventsByTime
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage
     */
    public function tableGetTableEventsByTime($site_uid, $start_time, $end_time)
    {
        list($response) = $this->tableGetTableEventsByTimeWithHttpInfo($site_uid, $start_time, $end_time);
        return $response;
    }

    /**
     * Operation tableGetTableEventsByTimeWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function tableGetTableEventsByTimeWithHttpInfo($site_uid, $start_time, $end_time)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling tableGetTableEventsByTime');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling tableGetTableEventsByTime');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling tableGetTableEventsByTime');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Tables/Events";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // path params
        if ($site_uid !== null) {
            $resourcePath = str_replace(
                "{" . "siteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage',
                '/Site/{siteUID}/Tables/Events'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tableGetTableHistoryBySiteAndTime
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage
     */
    public function tableGetTableHistoryBySiteAndTime($site_uid, $start_time, $end_time)
    {
        list($response) = $this->tableGetTableHistoryBySiteAndTimeWithHttpInfo($site_uid, $start_time, $end_time);
        return $response;
    }

    /**
     * Operation tableGetTableHistoryBySiteAndTimeWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function tableGetTableHistoryBySiteAndTimeWithHttpInfo($site_uid, $start_time, $end_time)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling tableGetTableHistoryBySiteAndTime');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling tableGetTableHistoryBySiteAndTime');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling tableGetTableHistoryBySiteAndTime');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/Tables/History";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // path params
        if ($site_uid !== null) {
            $resourcePath = str_replace(
                "{" . "SiteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage',
                '/Site/{SiteUID}/Tables/History'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tableGetTableStatusBySiteAndTime
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage
     */
    public function tableGetTableStatusBySiteAndTime($site_uid, $start_time, $end_time)
    {
        list($response) = $this->tableGetTableStatusBySiteAndTimeWithHttpInfo($site_uid, $start_time, $end_time);
        return $response;
    }

    /**
     * Operation tableGetTableStatusBySiteAndTimeWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function tableGetTableStatusBySiteAndTimeWithHttpInfo($site_uid, $start_time, $end_time)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling tableGetTableStatusBySiteAndTime');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling tableGetTableStatusBySiteAndTime');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling tableGetTableStatusBySiteAndTime');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/Tables/Status";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // path params
        if ($site_uid !== null) {
            $resourcePath = str_replace(
                "{" . "SiteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage',
                '/Site/{SiteUID}/Tables/Status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tableGetTables
     *
     * @param string $site_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[]
     */
    public function tableGetTables($site_uid)
    {
        list($response) = $this->tableGetTablesWithHttpInfo($site_uid);
        return $response;
    }

    /**
     * Operation tableGetTablesWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tableGetTablesWithHttpInfo($site_uid)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling tableGetTables');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/Tables";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($site_uid !== null) {
            $resourcePath = str_replace(
                "{" . "SiteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[]',
                '/Site/{SiteUID}/Tables'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
