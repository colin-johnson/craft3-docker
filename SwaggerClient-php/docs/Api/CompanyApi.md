# QsrAutomations\Api\CompanyApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyGetAllActiveCompanies**](CompanyApi.md#companyGetAllActiveCompanies) | **GET** /Companies | 
[**companyGetBrandsForCompany**](CompanyApi.md#companyGetBrandsForCompany) | **GET** /Companies/{companyUID}/Brands | 
[**companyGetSiteInfoByCompanyGuid**](CompanyApi.md#companyGetSiteInfoByCompanyGuid) | **GET** /Company/{companyUID}/Sites | 
[**companyGetSiteUIDLookupByCompanySiteId**](CompanyApi.md#companyGetSiteUIDLookupByCompanySiteId) | **GET** /Company/{companyUID}/Sites/CustomerSiteIdMap | 


# **companyGetAllActiveCompanies**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage companyGetAllActiveCompanies($active)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CompanyApi();
$active = true; // bool | 

try {
    $result = $api_instance->companyGetAllActiveCompanies($active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetAllActiveCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **bool**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCompanyLookupPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetBrandsForCompany**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[] companyGetBrandsForCompany($company_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CompanyApi();
$company_uid = "company_uid_example"; // string | 

try {
    $result = $api_instance->companyGetBrandsForCompany($company_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetBrandsForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO[]**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetSiteInfoByCompanyGuid**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[] companyGetSiteInfoByCompanyGuid($company_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CompanyApi();
$company_uid = "company_uid_example"; // string | 

try {
    $result = $api_instance->companyGetSiteInfoByCompanyGuid($company_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetSiteInfoByCompanyGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeSitesTypesSite[]**](../Model/QsrAutomationsDineTimeSitesTypesSite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetSiteUIDLookupByCompanySiteId**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[] companyGetSiteUIDLookupByCompanySiteId($company_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CompanyApi();
$company_uid = "company_uid_example"; // string | 

try {
    $result = $api_instance->companyGetSiteUIDLookupByCompanySiteId($company_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetSiteUIDLookupByCompanySiteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup[]**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesCompanyCustomerSiteLookup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

