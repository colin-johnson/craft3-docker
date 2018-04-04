# QsrAutomations\Api\WebAheadApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webAheadAddWebAhead**](WebAheadApi.md#webAheadAddWebAhead) | **POST** /Site/{siteUID}/WebAhead | Add a WebAhead
[**webAheadArrive**](WebAheadApi.md#webAheadArrive) | **POST** /Site/{siteUID}/WebAhead/{visitId}/Arrive | Arrive a WebAhead
[**webAheadArriveGlobal**](WebAheadApi.md#webAheadArriveGlobal) | **POST** /WebAhead/{confirmationNumber}/Arrive | Arrive a WebAhead
[**webAheadCancel**](WebAheadApi.md#webAheadCancel) | **POST** /Site/{siteUID}/WebAhead/{visitId}/Cancel | Cancel a WebAhead
[**webAheadCancelGlobal**](WebAheadApi.md#webAheadCancelGlobal) | **POST** /WebAhead/{confirmationNumber}/Cancel | Cancels the by confirmation number.
[**webAheadDisable**](WebAheadApi.md#webAheadDisable) | **POST** /Site/{siteUID}/WebAhead/disable | 
[**webAheadEnable**](WebAheadApi.md#webAheadEnable) | **POST** /Site/{siteUID}/WebAhead/enable | 
[**webAheadGet**](WebAheadApi.md#webAheadGet) | **GET** /Site/{siteUID}/WebAhead/{visitId} | Get a WebAhead
[**webAheadGetWaitListStatus**](WebAheadApi.md#webAheadGetWaitListStatus) | **GET** /Site/{siteUID}/WebAhead/Status | Get wait list status and quote for web ahead based on party size.
[**webAheadGetWaitListStatusForPartySizes**](WebAheadApi.md#webAheadGetWaitListStatusForPartySizes) | **GET** /Site/{siteUID}/WebAhead/StatusForPartySizes | Get wait list status and quote for web ahead based on party size.
[**webAheadGetWaitListStatusForSites**](WebAheadApi.md#webAheadGetWaitListStatusForSites) | **GET** /Site/WebAhead/Status | Get wait list status and quote for web ahead based on party size, for a list of sites
[**webAheadGetWebAheadGlobal**](WebAheadApi.md#webAheadGetWebAheadGlobal) | **GET** /WebAhead/{confirmationNumber} | Gets the web ahead.
[**webAheadUpdateWebAheadGlobalPartial**](WebAheadApi.md#webAheadUpdateWebAheadGlobalPartial) | **PATCH** /WebAhead/{confirmationNumber} | Updates the web ahead partial by confirmation number.
[**webAheadUpdateWebAheadPartial**](WebAheadApi.md#webAheadUpdateWebAheadPartial) | **PATCH** /Site/{siteUID}/WebAhead/{visitId} | Update a WebAhead


# **webAheadAddWebAhead**
> webAheadAddWebAhead($site_uid, $command)

Add a WebAhead

Adds a WebAhead, adding the specified party to the Waitlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.WebAhead.Commands.AddWebAheadCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWebAheadCommand | 

try {
    $api_instance->webAheadAddWebAhead($site_uid, $command);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadAddWebAhead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsAddWebAheadCommand**](../Model/QsrAutomations.DineTime.WebAhead.Commands.AddWebAheadCommand.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadArrive**
> webAheadArrive($site_uid, $visit_id)

Arrive a WebAhead

Arrives a WebAhead, setting the \"ArrivalTime\" property of the returned GuestVisit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 

try {
    $api_instance->webAheadArrive($site_uid, $visit_id);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadArrive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadArriveGlobal**
> webAheadArriveGlobal($confirmation_number)

Arrive a WebAhead

Arrives a WebAhead, setting the \"ArrivalTime\" property of the returned GuestVisit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$confirmation_number = "confirmation_number_example"; // string | The confirmation number.

try {
    $api_instance->webAheadArriveGlobal($confirmation_number);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadArriveGlobal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_number** | **string**| The confirmation number. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadCancel**
> webAheadCancel($site_uid, $visit_id)

Cancel a WebAhead

Cancels a WebAhead, removing the specified pary from the Waitlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 

try {
    $api_instance->webAheadCancel($site_uid, $visit_id);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadCancelGlobal**
> string webAheadCancelGlobal($confirmation_number)

Cancels the by confirmation number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$confirmation_number = "confirmation_number_example"; // string | The confirmation number.

try {
    $result = $api_instance->webAheadCancelGlobal($confirmation_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadCancelGlobal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_number** | **string**| The confirmation number. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadDisable**
> string webAheadDisable($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->webAheadDisable($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadEnable**
> string webAheadEnable($site_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 

try {
    $result = $api_instance->webAheadEnable($site_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadGet**
> webAheadGet($site_uid, $visit_id, $expand)

Get a WebAhead

Gets a WebAhead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 
$expand = array("expand_example"); // string[] | 

try {
    $api_instance->webAheadGet($site_uid, $visit_id, $expand);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |
 **expand** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadGetWaitListStatus**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatus webAheadGetWaitListStatus($site_uid, $party_size)

Get wait list status and quote for web ahead based on party size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$party_size = 56; // int | 

try {
    $result = $api_instance->webAheadGetWaitListStatus($site_uid, $party_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadGetWaitListStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **party_size** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatus**](../Model/QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadGetWaitListStatusForPartySizes**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForPartySizes webAheadGetWaitListStatusForPartySizes($site_uid, $party_sizes)

Get wait list status and quote for web ahead based on party size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$party_sizes = array(56); // int[] | 

try {
    $result = $api_instance->webAheadGetWaitListStatusForPartySizes($site_uid, $party_sizes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadGetWaitListStatusForPartySizes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **party_sizes** | [**int[]**](../Model/int.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForPartySizes**](../Model/QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForPartySizes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadGetWaitListStatusForSites**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForSites webAheadGetWaitListStatusForSites($site_ui_ds, $party_sizes)

Get wait list status and quote for web ahead based on party size, for a list of sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_ui_ds = array("site_ui_ds_example"); // string[] | 
$party_sizes = array(56); // int[] | 

try {
    $result = $api_instance->webAheadGetWaitListStatusForSites($site_ui_ds, $party_sizes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadGetWaitListStatusForSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_ui_ds** | [**string[]**](../Model/string.md)|  |
 **party_sizes** | [**int[]**](../Model/int.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForSites**](../Model/QsrAutomationsDineTimeContractsWebAheadTypesIWaitListStatusForSites.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadGetWebAheadGlobal**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite webAheadGetWebAheadGlobal($confirmation_number)

Gets the web ahead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$confirmation_number = "confirmation_number_example"; // string | The confirmation number.

try {
    $result = $api_instance->webAheadGetWebAheadGlobal($confirmation_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadGetWebAheadGlobal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_number** | **string**| The confirmation number. |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadUpdateWebAheadGlobalPartial**
> \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite webAheadUpdateWebAheadGlobalPartial($confirmation_number, $command)

Updates the web ahead partial by confirmation number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$confirmation_number = "confirmation_number_example"; // string | The confirmation number.
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.WebAhead.Commands.PatchWebAheadCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand | The command.

try {
    $result = $api_instance->webAheadUpdateWebAheadGlobalPartial($confirmation_number, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadUpdateWebAheadGlobalPartial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_number** | **string**| The confirmation number. |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand**](../Model/QsrAutomations.DineTime.WebAhead.Commands.PatchWebAheadCommand.md)| The command. |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite**](../Model/QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesWebAheadsIWebAheadWithSite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webAheadUpdateWebAheadPartial**
> webAheadUpdateWebAheadPartial($site_uid, $visit_id, $command)

Update a WebAhead

Updates a WebAhead, modifying any data that was changed in the posted WebAhead object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\WebAheadApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.WebAhead.Commands.PatchWebAheadCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand | 

try {
    $api_instance->webAheadUpdateWebAheadPartial($site_uid, $visit_id, $command);
} catch (Exception $e) {
    echo 'Exception when calling WebAheadApi->webAheadUpdateWebAheadPartial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand**](../Model/QsrAutomations.DineTime.WebAhead.Commands.PatchWebAheadCommand.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

