# QsrAutomations\Api\WalkinApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**walkinAddWalkIn**](WalkinApi.md#walkinAddWalkIn) | **POST** /Site/{siteUID}/WalkIn | 


# **walkinAddWalkIn**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance walkinAddWalkIn($site_uid, $command)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WalkinApi();
$site_uid = "site_uid_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.WebAhead.Commands.AddWalkinCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWalkinCommand | 

try {
    $result = $api_instance->walkinAddWalkIn($site_uid, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalkinApi->walkinAddWalkIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWalkinCommand**](../Model/QsrAutomations.DineTime.WebAhead.Commands.AddWalkinCommand.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

