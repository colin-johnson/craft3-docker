# QsrAutomations\Api\VisitApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**visitFindVisitByPhoneNumber**](VisitApi.md#visitFindVisitByPhoneNumber) | **GET** /Site/{SiteUID}/Visit | 
[**visitGetVisitByExternalID**](VisitApi.md#visitGetVisitByExternalID) | **GET** /Site/{siteUID}/Visit/ExternalID/{externalID} | 
[**visitGetVisitByID**](VisitApi.md#visitGetVisitByID) | **GET** /Site/{siteUID}/Visit/{visitID} | 
[**visitMergeVisitData**](VisitApi.md#visitMergeVisitData) | **PATCH** /Site/{siteUID}/Visit/{visitID} | 
[**visitPollVisits**](VisitApi.md#visitPollVisits) | **GET** /Site/{siteUID}/Visits | 
[**visitRaiseTableEvent**](VisitApi.md#visitRaiseTableEvent) | **POST** /Site/{siteUID}/Visit/TableEvent | Raise a table event
[**visitUpdatePartyMix**](VisitApi.md#visitUpdatePartyMix) | **POST** /Site/{siteUID}/Visit/{visitID}/PartyMix | 
[**visitUpdateVisitProximity**](VisitApi.md#visitUpdateVisitProximity) | **PATCH** /Site/{SiteUID}/Visit/{VisitID}/Proximity | Stuff


# **visitFindVisitByPhoneNumber**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[] visitFindVisitByPhoneNumber($site_uid, $phone_number, $country_code, $status)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$country_code = "country_code_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $api_instance->visitFindVisitByPhoneNumber($site_uid, $phone_number, $country_code, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitFindVisitByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **phone_number** | **string**|  |
 **country_code** | **string**|  |
 **status** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitData[]**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitGetVisitByExternalID**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance visitGetVisitByExternalID($site_uid, $external_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$external_id = "external_id_example"; // string | 

try {
    $result = $api_instance->visitGetVisitByExternalID($site_uid, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitGetVisitByExternalID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **external_id** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitGetVisitByID**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance visitGetVisitByID($site_uid, $visit_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 

try {
    $result = $api_instance->visitGetVisitByID($site_uid, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitGetVisitByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitMergeVisitData**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance visitMergeVisitData($site_uid, $visit_id, $command)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Visits.Command.PatchVisitCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsCommandPatchVisitCommand | 

try {
    $result = $api_instance->visitMergeVisitData($site_uid, $visit_id, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitMergeVisitData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsCommandPatchVisitCommand**](../Model/QsrAutomations.DineTime.Visits.Command.PatchVisitCommand.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitPollVisits**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse visitPollVisits($site_uid, $start, $stop, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$stop = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->visitPollVisits($site_uid, $start, $stop, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitPollVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **start** | **\DateTime**|  |
 **stop** | **\DateTime**|  |
 **sync_source** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitRaiseTableEvent**
> visitRaiseTableEvent($site_uid, $table_event)

Raise a table event

Raise a table event for the specified table at the specified site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$table_event = new \QsrAutomations\Api\Model\QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Visits.Public.TableEvent(); // \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent | 

try {
    $api_instance->visitRaiseTableEvent($site_uid, $table_event);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitRaiseTableEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **table_event** | [**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent**](../Model/QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Visits.Public.TableEvent.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitUpdatePartyMix**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance visitUpdatePartyMix($site_uid, $visit_id, $party_mix)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 
$party_mix = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Visits.Types.VisitPartyMix(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsTypesVisitPartyMix | 

try {
    $result = $api_instance->visitUpdatePartyMix($site_uid, $visit_id, $party_mix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitUpdatePartyMix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |
 **party_mix** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeVisitsTypesVisitPartyMix**](../Model/QsrAutomations.DineTime.Visits.Types.VisitPartyMix.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance**](../Model/QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitUpdateVisitProximity**
> string visitUpdateVisitProximity($patch_command, $site_uid, $visit_id)

Stuff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\VisitApi();
$patch_command = new \QsrAutomations\Api\Model\QsrAutomations.Enterprise.DineTimeThirdPartyApiService.Host.Commands.PatchVisitProximityCommand(); // \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand | 
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 

try {
    $result = $api_instance->visitUpdateVisitProximity($patch_command, $site_uid, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->visitUpdateVisitProximity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patch_command** | [**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand**](../Model/QsrAutomations.Enterprise.DineTimeThirdPartyApiService.Host.Commands.PatchVisitProximityCommand.md)|  |
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

