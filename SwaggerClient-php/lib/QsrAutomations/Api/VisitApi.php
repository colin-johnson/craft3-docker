<?php
/**
 * VisitApi
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
 * VisitApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisitApi
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
     * @return VisitApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation visitFindVisitByPhoneNumber
     *
     * @param string $site_uid  (required)
     * @param string $phone_number  (required)
     * @param string $country_code  (required)
     * @param string $status  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[]
     */
    public function visitFindVisitByPhoneNumber($site_uid, $phone_number, $country_code, $status = null)
    {
        list($response) = $this->visitFindVisitByPhoneNumberWithHttpInfo($site_uid, $phone_number, $country_code, $status);
        return $response;
    }

    /**
     * Operation visitFindVisitByPhoneNumberWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param string $phone_number  (required)
     * @param string $country_code  (required)
     * @param string $status  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[], HTTP status code, HTTP response headers (array of strings)
     */
    public function visitFindVisitByPhoneNumberWithHttpInfo($site_uid, $phone_number, $country_code, $status = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitFindVisitByPhoneNumber');
        }
        // verify the required parameter 'phone_number' is set
        if ($phone_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_number when calling visitFindVisitByPhoneNumber');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling visitFindVisitByPhoneNumber');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/Visit";
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
        if ($phone_number !== null) {
            $queryParams['PhoneNumber'] = $this->apiClient->getSerializer()->toQueryValue($phone_number);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['CountryCode'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['Status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[]',
                '/Site/{SiteUID}/Visit'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitGetVisitByExternalID
     *
     * @param string $site_uid  (required)
     * @param string $external_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance
     */
    public function visitGetVisitByExternalID($site_uid, $external_id)
    {
        list($response) = $this->visitGetVisitByExternalIDWithHttpInfo($site_uid, $external_id);
        return $response;
    }

    /**
     * Operation visitGetVisitByExternalIDWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param string $external_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitGetVisitByExternalIDWithHttpInfo($site_uid, $external_id)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitGetVisitByExternalID');
        }
        // verify the required parameter 'external_id' is set
        if ($external_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $external_id when calling visitGetVisitByExternalID');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visit/ExternalID/{externalID}";
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
        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                "{" . "externalID" . "}",
                $this->apiClient->getSerializer()->toPathValue($external_id),
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance',
                '/Site/{siteUID}/Visit/ExternalID/{externalID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitGetVisitByID
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance
     */
    public function visitGetVisitByID($site_uid, $visit_id)
    {
        list($response) = $this->visitGetVisitByIDWithHttpInfo($site_uid, $visit_id);
        return $response;
    }

    /**
     * Operation visitGetVisitByIDWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitGetVisitByIDWithHttpInfo($site_uid, $visit_id)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitGetVisitByID');
        }
        // verify the required parameter 'visit_id' is set
        if ($visit_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $visit_id when calling visitGetVisitByID');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visit/{visitID}";
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
        // path params
        if ($visit_id !== null) {
            $resourcePath = str_replace(
                "{" . "visitID" . "}",
                $this->apiClient->getSerializer()->toPathValue($visit_id),
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance',
                '/Site/{siteUID}/Visit/{visitID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitMergeVisitData
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsCommandPatchVisitCommand $command  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance
     */
    public function visitMergeVisitData($site_uid, $visit_id, $command)
    {
        list($response) = $this->visitMergeVisitDataWithHttpInfo($site_uid, $visit_id, $command);
        return $response;
    }

    /**
     * Operation visitMergeVisitDataWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsCommandPatchVisitCommand $command  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitMergeVisitDataWithHttpInfo($site_uid, $visit_id, $command)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitMergeVisitData');
        }
        // verify the required parameter 'visit_id' is set
        if ($visit_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $visit_id when calling visitMergeVisitData');
        }
        // verify the required parameter 'command' is set
        if ($command === null) {
            throw new \InvalidArgumentException('Missing the required parameter $command when calling visitMergeVisitData');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visit/{visitID}";
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
        // path params
        if ($visit_id !== null) {
            $resourcePath = str_replace(
                "{" . "visitID" . "}",
                $this->apiClient->getSerializer()->toPathValue($visit_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($command)) {
            $_tempBody = $command;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance',
                '/Site/{siteUID}/Visit/{visitID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitPollVisits
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start  (required)
     * @param \DateTime $stop  (required)
     * @param string $sync_source  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse
     */
    public function visitPollVisits($site_uid, $start, $stop, $sync_source = null)
    {
        list($response) = $this->visitPollVisitsWithHttpInfo($site_uid, $start, $stop, $sync_source);
        return $response;
    }

    /**
     * Operation visitPollVisitsWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \DateTime $start  (required)
     * @param \DateTime $stop  (required)
     * @param string $sync_source  (optional)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitPollVisitsWithHttpInfo($site_uid, $start, $stop, $sync_source = null)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitPollVisits');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling visitPollVisits');
        }
        // verify the required parameter 'stop' is set
        if ($stop === null) {
            throw new \InvalidArgumentException('Missing the required parameter $stop when calling visitPollVisits');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visits";
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
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($stop !== null) {
            $queryParams['stop'] = $this->apiClient->getSerializer()->toQueryValue($stop);
        }
        // query params
        if ($sync_source !== null) {
            $queryParams['syncSource'] = $this->apiClient->getSerializer()->toQueryValue($sync_source);
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse',
                '/Site/{siteUID}/Visits'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitRaiseTableEvent
     *
     * Raise a table event
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent $table_event  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return void
     */
    public function visitRaiseTableEvent($site_uid, $table_event)
    {
        list($response) = $this->visitRaiseTableEventWithHttpInfo($site_uid, $table_event);
        return $response;
    }

    /**
     * Operation visitRaiseTableEventWithHttpInfo
     *
     * Raise a table event
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent $table_event  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitRaiseTableEventWithHttpInfo($site_uid, $table_event)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitRaiseTableEvent');
        }
        // verify the required parameter 'table_event' is set
        if ($table_event === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_event when calling visitRaiseTableEvent');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visit/TableEvent";
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
        if (isset($table_event)) {
            $_tempBody = $table_event;
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
                null,
                '/Site/{siteUID}/Visit/TableEvent'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation visitUpdatePartyMix
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsTypesVisitPartyMix $party_mix  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance
     */
    public function visitUpdatePartyMix($site_uid, $visit_id, $party_mix)
    {
        list($response) = $this->visitUpdatePartyMixWithHttpInfo($site_uid, $visit_id, $party_mix);
        return $response;
    }

    /**
     * Operation visitUpdatePartyMixWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsTypesVisitPartyMix $party_mix  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitUpdatePartyMixWithHttpInfo($site_uid, $visit_id, $party_mix)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitUpdatePartyMix');
        }
        // verify the required parameter 'visit_id' is set
        if ($visit_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $visit_id when calling visitUpdatePartyMix');
        }
        // verify the required parameter 'party_mix' is set
        if ($party_mix === null) {
            throw new \InvalidArgumentException('Missing the required parameter $party_mix when calling visitUpdatePartyMix');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/Visit/{visitID}/PartyMix";
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
        // path params
        if ($visit_id !== null) {
            $resourcePath = str_replace(
                "{" . "visitID" . "}",
                $this->apiClient->getSerializer()->toPathValue($visit_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($party_mix)) {
            $_tempBody = $party_mix;
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance',
                '/Site/{siteUID}/Visit/{visitID}/PartyMix'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation visitUpdateVisitProximity
     *
     * Stuff
     *
     * @param \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand $patch_command  (required)
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return string
     */
    public function visitUpdateVisitProximity($patch_command, $site_uid, $visit_id)
    {
        list($response) = $this->visitUpdateVisitProximityWithHttpInfo($patch_command, $site_uid, $visit_id);
        return $response;
    }

    /**
     * Operation visitUpdateVisitProximityWithHttpInfo
     *
     * Stuff
     *
     * @param \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand $patch_command  (required)
     * @param string $site_uid  (required)
     * @param string $visit_id  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function visitUpdateVisitProximityWithHttpInfo($patch_command, $site_uid, $visit_id)
    {
        // verify the required parameter 'patch_command' is set
        if ($patch_command === null) {
            throw new \InvalidArgumentException('Missing the required parameter $patch_command when calling visitUpdateVisitProximity');
        }
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling visitUpdateVisitProximity');
        }
        // verify the required parameter 'visit_id' is set
        if ($visit_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $visit_id when calling visitUpdateVisitProximity');
        }
        // parse inputs
        $resourcePath = "/Site/{SiteUID}/Visit/{VisitID}/Proximity";
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
                "{" . "SiteUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_uid),
                $resourcePath
            );
        }
        // path params
        if ($visit_id !== null) {
            $resourcePath = str_replace(
                "{" . "VisitID" . "}",
                $this->apiClient->getSerializer()->toPathValue($visit_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($patch_command)) {
            $_tempBody = $patch_command;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/Site/{SiteUID}/Visit/{VisitID}/Proximity'
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
}