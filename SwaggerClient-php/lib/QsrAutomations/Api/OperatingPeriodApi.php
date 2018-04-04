<?php
/**
 * OperatingPeriodApi
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
 * OperatingPeriodApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperatingPeriodApi
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
     * @return OperatingPeriodApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation operatingPeriodApplyOperatingInfoTemplate
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfoData $template  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return string
     */
    public function operatingPeriodApplyOperatingInfoTemplate($site_uid, $template)
    {
        list($response) = $this->operatingPeriodApplyOperatingInfoTemplateWithHttpInfo($site_uid, $template);
        return $response;
    }

    /**
     * Operation operatingPeriodApplyOperatingInfoTemplateWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfoData $template  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function operatingPeriodApplyOperatingInfoTemplateWithHttpInfo($site_uid, $template)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling operatingPeriodApplyOperatingInfoTemplate');
        }
        // verify the required parameter 'template' is set
        if ($template === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template when calling operatingPeriodApplyOperatingInfoTemplate');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/operatinginfo/template";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']);

        // path params
        if ($site_uid !== null) {
            $resourcePath = str_replace(
                "{" . "siteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($template)) {
            $_tempBody = $template;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/Site/{siteUID}/operatinginfo/template'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation operatingPeriodGetOperatingInfo
     *
     * @param string $site_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo
     */
    public function operatingPeriodGetOperatingInfo($site_uid)
    {
        list($response) = $this->operatingPeriodGetOperatingInfoWithHttpInfo($site_uid);
        return $response;
    }

    /**
     * Operation operatingPeriodGetOperatingInfoWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function operatingPeriodGetOperatingInfoWithHttpInfo($site_uid)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling operatingPeriodGetOperatingInfo');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/operatinginfo";
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo',
                '/Site/{siteUID}/operatinginfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation operatingPeriodGetOperatingPeriodByDate
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[]
     */
    public function operatingPeriodGetOperatingPeriodByDate($site_uid, $start_time)
    {
        list($response) = $this->operatingPeriodGetOperatingPeriodByDateWithHttpInfo($site_uid, $start_time);
        return $response;
    }

    /**
     * Operation operatingPeriodGetOperatingPeriodByDateWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start_time  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[], HTTP status code, HTTP response headers (array of strings)
     */
    public function operatingPeriodGetOperatingPeriodByDateWithHttpInfo($site_uid, $start_time)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling operatingPeriodGetOperatingPeriodByDate');
        }
        // verify the required parameter 'start_time' is set
        if ($start_time === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_time when calling operatingPeriodGetOperatingPeriodByDate');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/OperatingPeriods";
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[]',
                '/Site/{SiteUID}/OperatingPeriods'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}