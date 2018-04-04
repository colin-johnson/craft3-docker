# QsrAutomations\Api\TeamMemberApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamMemberGetTeamMembersBySiteUID**](TeamMemberApi.md#teamMemberGetTeamMembersBySiteUID) | **GET** /Site/{siteUID}/TeamMembers | 
[**teamMemberGetTeamMembersEventsByTime**](TeamMemberApi.md#teamMemberGetTeamMembersEventsByTime) | **GET** /Site/{siteUID}/TeamMembers/Events | 


# **teamMemberGetTeamMembersBySiteUID**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeServerTypesTeamMember[] teamMemberGetTeamMembersBySiteUID($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TeamMemberApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->teamMemberGetTeamMembersBySiteUID($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMemberGetTeamMembersBySiteUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeServerTypesTeamMember[]**](../Model/QsrAutomationsDineTimeServerTypesTeamMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberGetTeamMembersEventsByTime**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeServerTypesTeamMemberEventPage teamMemberGetTeamMembersEventsByTime($site_uid, $start_time, $end_time)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\TeamMemberApi();
$site_uid = "site_uid_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->teamMemberGetTeamMembersEventsByTime($site_uid, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMemberGetTeamMembersEventsByTime: ', $e->getMessage(), PHP_EOL;
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

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeServerTypesTeamMemberEventPage**](../Model/QsrAutomationsDineTimeServerTypesTeamMemberEventPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

