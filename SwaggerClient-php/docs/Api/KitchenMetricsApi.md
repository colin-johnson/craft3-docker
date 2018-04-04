# QsrAutomations\Api\KitchenMetricsApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kitchenMetricsGetBinUsageMetrics**](KitchenMetricsApi.md#kitchenMetricsGetBinUsageMetrics) | **GET** /Site/{siteUID}/Metrics/BinUsage | 
[**kitchenMetricsGetDisplayGroupsMetrics**](KitchenMetricsApi.md#kitchenMetricsGetDisplayGroupsMetrics) | **GET** /Site/{siteUID}/Metrics/DisplayGroups | 
[**kitchenMetricsGetSpeedOfService**](KitchenMetricsApi.md#kitchenMetricsGetSpeedOfService) | **GET** /Site/{siteUID}/Metrics/SpeedOfService | 
[**kitchenMetricsGetViewMetrics**](KitchenMetricsApi.md#kitchenMetricsGetViewMetrics) | **GET** /Site/{siteUID}/Metrics/ViewMetrics | 


# **kitchenMetricsGetBinUsageMetrics**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage kitchenMetricsGetBinUsageMetrics($site_uid, $start_time, $end_time, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\KitchenMetricsApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$token = "token_example"; // string | 

try {
    $result = $api_instance->kitchenMetricsGetBinUsageMetrics($site_uid, $start_time, $end_time, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitchenMetricsApi->kitchenMetricsGetBinUsageMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |
 **token** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenBinUsagePage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitchenMetricsGetDisplayGroupsMetrics**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage kitchenMetricsGetDisplayGroupsMetrics($site_uid, $start_time, $end_time, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\KitchenMetricsApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$token = "token_example"; // string | 

try {
    $result = $api_instance->kitchenMetricsGetDisplayGroupsMetrics($site_uid, $start_time, $end_time, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitchenMetricsApi->kitchenMetricsGetDisplayGroupsMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |
 **token** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenDisplayGroupPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitchenMetricsGetSpeedOfService**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage kitchenMetricsGetSpeedOfService($site_uid, $start_time, $end_time, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\KitchenMetricsApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$token = "token_example"; // string | 

try {
    $result = $api_instance->kitchenMetricsGetSpeedOfService($site_uid, $start_time, $end_time, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitchenMetricsApi->kitchenMetricsGetSpeedOfService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |
 **token** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenSpeedOfServicePage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kitchenMetricsGetViewMetrics**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage kitchenMetricsGetViewMetrics($site_uid, $start_time, $end_time, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\KitchenMetricsApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$token = "token_example"; // string | 

try {
    $result = $api_instance->kitchenMetricsGetViewMetrics($site_uid, $start_time, $end_time, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitchenMetricsApi->kitchenMetricsGetViewMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |
 **token** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

