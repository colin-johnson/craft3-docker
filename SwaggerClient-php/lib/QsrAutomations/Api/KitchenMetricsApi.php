<?php
/**
 * KitchenMetricsApi
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
 * KitchenMetricsApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KitchenMetricsApi
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
     * @return KitchenMetricsApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation kitchenMetricsGetBinUsageMetrics
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage
     */
    public function kitchenMetricsGetBinUsageMetrics($site_uid, $start_time, $end_time, $token = null)
    {
        list($response) = $this->kitchenMetricsGetBinUsageMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token);
        return $response;
    }

    /**
     * Operation kitchenMetricsGetBinUsageMetricsWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage, HTTP status code, HTTP response headers (array of strings)
     */
    public function kitchenMetricsGetBinUsageMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling kitchenMetricsGetBinUsageMetrics');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling kitchenMetricsGetBinUsageMetrics');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling kitchenMetricsGetBinUsageMetrics');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Metrics/BinUsage";
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
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage',
                '/Site/{siteUID}/Metrics/BinUsage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation kitchenMetricsGetDisplayGroupsMetrics
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage
     */
    public function kitchenMetricsGetDisplayGroupsMetrics($site_uid, $start_time, $end_time, $token = null)
    {
        list($response) = $this->kitchenMetricsGetDisplayGroupsMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token);
        return $response;
    }

    /**
     * Operation kitchenMetricsGetDisplayGroupsMetricsWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function kitchenMetricsGetDisplayGroupsMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling kitchenMetricsGetDisplayGroupsMetrics');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling kitchenMetricsGetDisplayGroupsMetrics');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling kitchenMetricsGetDisplayGroupsMetrics');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Metrics/DisplayGroups";
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
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage',
                '/Site/{siteUID}/Metrics/DisplayGroups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation kitchenMetricsGetSpeedOfService
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage
     */
    public function kitchenMetricsGetSpeedOfService($site_uid, $start_time, $end_time, $token = null)
    {
        list($response) = $this->kitchenMetricsGetSpeedOfServiceWithHttpInfo($site_uid, $start_time, $end_time, $token);
        return $response;
    }

    /**
     * Operation kitchenMetricsGetSpeedOfServiceWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage, HTTP status code, HTTP response headers (array of strings)
     */
    public function kitchenMetricsGetSpeedOfServiceWithHttpInfo($site_uid, $start_time, $end_time, $token = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling kitchenMetricsGetSpeedOfService');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling kitchenMetricsGetSpeedOfService');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling kitchenMetricsGetSpeedOfService');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Metrics/SpeedOfService";
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
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage',
                '/Site/{siteUID}/Metrics/SpeedOfService'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation kitchenMetricsGetViewMetrics
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage
     */
    public function kitchenMetricsGetViewMetrics($site_uid, $start_time, $end_time, $token = null)
    {
        list($response) = $this->kitchenMetricsGetViewMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token);
        return $response;
    }

    /**
     * Operation kitchenMetricsGetViewMetricsWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @param \DateTime $end_time  (required)
     * @param string $token  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function kitchenMetricsGetViewMetricsWithHttpInfo($site_uid, $start_time, $end_time, $token = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling kitchenMetricsGetViewMetrics');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling kitchenMetricsGetViewMetrics');
        }
        // verify the required parameter 'end_time' is set
        if ($end_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_time when calling kitchenMetricsGetViewMetrics');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Metrics/ViewMetrics";
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
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage',
                '/Site/{siteUID}/Metrics/ViewMetrics'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
