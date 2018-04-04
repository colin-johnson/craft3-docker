<?php
/**
 * CompanyApi
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
 * CompanyApi Class Doc Comment
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyApi
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
     * @return CompanyApi
     */
    public function setApiClient(\QsrAutomations\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation companyGetAllActiveCompanies
     *
     * @param bool $active  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage
     */
    public function companyGetAllActiveCompanies($active)
    {
        list($response) = $this->companyGetAllActiveCompaniesWithHttpInfo($active);
        return $response;
    }

    /**
     * Operation companyGetAllActiveCompaniesWithHttpInfo
     *
     * @param bool $active  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyGetAllActiveCompaniesWithHttpInfo($active)
    {
        // verify the required parameter 'active' is set
        if ($active === null) {
            throw new \InvalidArgumentException('Missing the required parameter $active when calling companyGetAllActiveCompanies');
        }
        // parse inputs
        $resourcePath = "/Companies";
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
        if ($active !== null) {
            $queryParams['active'] = $this->apiClient->getSerializer()->toQueryValue($active);
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage',
                '/Companies'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyGetBrandsForCompany
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[]
     */
    public function companyGetBrandsForCompany($company_uid)
    {
        list($response) = $this->companyGetBrandsForCompanyWithHttpInfo($company_uid);
        return $response;
    }

    /**
     * Operation companyGetBrandsForCompanyWithHttpInfo
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyGetBrandsForCompanyWithHttpInfo($company_uid)
    {
        // verify the required parameter 'company_uid' is set
        if ($company_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company_uid when calling companyGetBrandsForCompany');
        }
        // parse inputs
        $resourcePath = "/Companies/{companyUID}/Brands";
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
        if ($company_uid !== null) {
            $resourcePath = str_replace(
                "{" . "companyUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($company_uid),
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[]',
                '/Companies/{companyUID}/Brands'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyGetSiteInfoByCompanyGuid
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[]
     */
    public function companyGetSiteInfoByCompanyGuid($company_uid)
    {
        list($response) = $this->companyGetSiteInfoByCompanyGuidWithHttpInfo($company_uid);
        return $response;
    }

    /**
     * Operation companyGetSiteInfoByCompanyGuidWithHttpInfo
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyGetSiteInfoByCompanyGuidWithHttpInfo($company_uid)
    {
        // verify the required parameter 'company_uid' is set
        if ($company_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company_uid when calling companyGetSiteInfoByCompanyGuid');
        }
        // parse inputs
        $resourcePath = "/Company/{companyUID}/Sites";
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
        if ($company_uid !== null) {
            $resourcePath = str_replace(
                "{" . "companyUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($company_uid),
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
                '\QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[]',
                '/Company/{companyUID}/Sites'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyGetSiteUIDLookupByCompanySiteId
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[]
     */
    public function companyGetSiteUIDLookupByCompanySiteId($company_uid)
    {
        list($response) = $this->companyGetSiteUIDLookupByCompanySiteIdWithHttpInfo($company_uid);
        return $response;
    }

    /**
     * Operation companyGetSiteUIDLookupByCompanySiteIdWithHttpInfo
     *
     * @param string $company_uid  (required)
     * @throws \QsrAutomations\Api\ApiException on non-2xx response
     * @return array of \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyGetSiteUIDLookupByCompanySiteIdWithHttpInfo($company_uid)
    {
        // verify the required parameter 'company_uid' is set
        if ($company_uid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company_uid when calling companyGetSiteUIDLookupByCompanySiteId');
        }
        // parse inputs
        $resourcePath = "/Company/{companyUID}/Sites/CustomerSiteIdMap";
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
        if ($company_uid !== null) {
            $resourcePath = str_replace(
                "{" . "companyUID" . "}",
                $this->apiClient->getSerializer()->toPathValue($company_uid),
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
                '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[]',
                '/Company/{companyUID}/Sites/CustomerSiteIdMap'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}