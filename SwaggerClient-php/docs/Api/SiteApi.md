# QsrAutomations\Api\SiteApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteGetSiteBySiteGuid**](SiteApi.md#siteGetSiteBySiteGuid) | **GET** /Site/{siteUID} | 


# **siteGetSiteBySiteGuid**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsSitesTypesISiteInstance siteGetSiteBySiteGuid($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\SiteApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->siteGetSiteBySiteGuid($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSiteBySiteGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsSitesTypesISiteInstance**](../Model/QsrAutomationsDineTimeContractsSitesTypesISiteInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

