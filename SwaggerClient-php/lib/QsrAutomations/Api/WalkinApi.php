<?php
/**
 * WalkinApi
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
 * WalkinApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WalkinApi
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
     * @return WalkinApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation walkinAddWalkIn
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWalkinCommand $command  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance
     */
    public function walkinAddWalkIn($site_uid, $command)
    {
        list($response) = $this->walkinAddWalkInWithHttpInfo($site_uid, $command);
        return $response;
    }

    /**
     * Operation walkinAddWalkInWithHttpInfo
     *
     * @param string $site_uid  (required)
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWalkinCommand $command  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance, HTTP status code, HTTP response headers (array of strings)
     */
    public function walkinAddWalkInWithHttpInfo($site_uid, $command)
    {
        // verify the required parameter 'site_uid' is set
        if ($site_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_uid when calling walkinAddWalkIn');
        }
        // verify the required parameter 'command' is set
        if ($command === null) {
            throw new \InvalidArgumentException('Missing the required parameter $command when calling walkinAddWalkIn');
        }
        // parse inputs
        $resourcePath = "/Site/{siteUID}/WalkIn";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance',
                '/Site/{siteUID}/WalkIn'
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
}
