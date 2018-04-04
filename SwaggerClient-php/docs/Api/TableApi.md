# QsrAutomations\Api\TableApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tableGetTableEventsByTime**](TableApi.md#tableGetTableEventsByTime) | **GET** /Site/{siteUID}/Tables/Events | 
[**tableGetTableHistoryBySiteAndTime**](TableApi.md#tableGetTableHistoryBySiteAndTime) | **GET** /Site/{SiteUID}/Tables/History | 
[**tableGetTableStatusBySiteAndTime**](TableApi.md#tableGetTableStatusBySiteAndTime) | **GET** /Site/{SiteUID}/Tables/Status | 
[**tableGetTables**](TableApi.md#tableGetTables) | **GET** /Site/{SiteUID}/Tables | 


# **tableGetTableEventsByTime**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage tableGetTableEventsByTime($site_uid, $start_time, $end_time)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TableApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->tableGetTableEventsByTime($site_uid, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetTableEventsByTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableEventPage**](../Model/QsrAutomationsDineTimeTablesTypesTableEventPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetTableHistoryBySiteAndTime**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage tableGetTableHistoryBySiteAndTime($site_uid, $start_time, $end_time)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TableApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->tableGetTableHistoryBySiteAndTime($site_uid, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetTableHistoryBySiteAndTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableHistoryPage**](../Model/QsrAutomationsDineTimeTablesTypesTableHistoryPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetTableStatusBySiteAndTime**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage tableGetTableStatusBySiteAndTime($site_uid, $start_time, $end_time)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TableApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->tableGetTableStatusBySiteAndTime($site_uid, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetTableStatusBySiteAndTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableStatusPage**](../Model/QsrAutomationsDineTimeTablesTypesTableStatusPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetTables**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[] tableGetTables($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TableApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->tableGetTables($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeTablesTypesTableInstance[]**](../Model/QsrAutomationsDineTimeTablesTypesTableInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

