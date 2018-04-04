# QsrAutomations\Api\OperatingPeriodApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operatingPeriodApplyOperatingInfoTemplate**](OperatingPeriodApi.md#operatingPeriodApplyOperatingInfoTemplate) | **POST** /Site/{siteUID}/operatinginfo/template | 
[**operatingPeriodGetOperatingInfo**](OperatingPeriodApi.md#operatingPeriodGetOperatingInfo) | **GET** /Site/{siteUID}/operatinginfo | 
[**operatingPeriodGetOperatingPeriodByDate**](OperatingPeriodApi.md#operatingPeriodGetOperatingPeriodByDate) | **GET** /Site/{SiteUID}/OperatingPeriods | 


# **operatingPeriodApplyOperatingInfoTemplate**
> string operatingPeriodApplyOperatingInfoTemplate($site_uid, $template)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\OperatingPeriodApi();
$site_uid = "site_uid_example"; // string | 
$template = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Contracts.OperatingPeriod.Types.IOperatingInfoData(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfoData | 

try {
    $result = $api_instance->operatingPeriodApplyOperatingInfoTemplate($site_uid, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingPeriodApi->operatingPeriodApplyOperatingInfoTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **template** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfoData**](../Model/QsrAutomations.DineTime.Contracts.OperatingPeriod.Types.IOperatingInfoData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingPeriodGetOperatingInfo**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo operatingPeriodGetOperatingInfo($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\OperatingPeriodApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->operatingPeriodGetOperatingInfo($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingPeriodApi->operatingPeriodGetOperatingInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo**](../Model/QsrAutomationsDineTimeContractsOperatingPeriodTypesIOperatingInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingPeriodGetOperatingPeriodByDate**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[] operatingPeriodGetOperatingPeriodByDate($site_uid, $start_time)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\OperatingPeriodApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->operatingPeriodGetOperatingPeriodByDate($site_uid, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingPeriodApi->operatingPeriodGetOperatingPeriodByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual[]**](../Model/QsrAutomationsDineTimeOperatingPeriodTypesOperatingPeriodActual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

