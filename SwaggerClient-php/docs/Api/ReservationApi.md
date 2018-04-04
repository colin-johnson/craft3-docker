# QsrAutomations\Api\ReservationApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reservationAddReservation**](ReservationApi.md#reservationAddReservation) | **POST** /site/{siteUID}/reservations | 
[**reservationCancelReservation**](ReservationApi.md#reservationCancelReservation) | **DELETE** /site/{siteUID}/reservations/{visitID} | 
[**reservationGetAvailability**](ReservationApi.md#reservationGetAvailability) | **GET** /site/{siteUID}/reservations/availability | 
[**reservationGetReservationByConfirmationNumber**](ReservationApi.md#reservationGetReservationByConfirmationNumber) | **GET** /site/{siteUID}/reservations | 
[**reservationPatchReservation**](ReservationApi.md#reservationPatchReservation) | **PATCH** /site/{siteUID}/reservations/{visitID} | 
[**reservationSyncExternalReservation**](ReservationApi.md#reservationSyncExternalReservation) | **PUT** /site/{siteUID}/externalreservations/{externalID} | 


# **reservationAddReservation**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance reservationAddReservation($site_uid, $command)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Contracts.Reservations.Commands.IAddReservationCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsCommandsIAddReservationCommand | 

try {
    $result = $api_instance->reservationAddReservation($site_uid, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationAddReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsCommandsIAddReservationCommand**](../Model/QsrAutomations.DineTime.Contracts.Reservations.Commands.IAddReservationCommand.md)|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance**](../Model/QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationCancelReservation**
> string reservationCancelReservation($site_uid, $visit_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 

try {
    $result = $api_instance->reservationCancelReservation($site_uid, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationCancelReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationGetAvailability**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailability reservationGetAvailability($site_uid, $date, $size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$size = 56; // int | 

try {
    $result = $api_instance->reservationGetAvailability($site_uid, $date, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationGetAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **date** | **\DateTime**|  |
 **size** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailability**](../Model/QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailability.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationGetReservationByConfirmationNumber**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance reservationGetReservationByConfirmationNumber($site_uid, $conf)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$conf = "conf_example"; // string | 

try {
    $result = $api_instance->reservationGetReservationByConfirmationNumber($site_uid, $conf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationGetReservationByConfirmationNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **conf** | **string**|  |

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance**](../Model/QsrAutomationsDineTimeContractsReservationsTypesIReservationInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationPatchReservation**
> string reservationPatchReservation($site_uid, $visit_id, $command)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$visit_id = "visit_id_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Reservations.Commands.PatchReservationCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeReservationsCommandsPatchReservationCommand | 

try {
    $result = $api_instance->reservationPatchReservation($site_uid, $visit_id, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationPatchReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **visit_id** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeReservationsCommandsPatchReservationCommand**](../Model/QsrAutomations.DineTime.Reservations.Commands.PatchReservationCommand.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationSyncExternalReservation**
> string reservationSyncExternalReservation($site_uid, $external_id, $reservation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\ReservationApi();
$site_uid = "site_uid_example"; // string | 
$external_id = "external_id_example"; // string | 
$reservation = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Contracts.Reservations.Types.IExternalReservationData(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIExternalReservationData | 

try {
    $result = $api_instance->reservationSyncExternalReservation($site_uid, $external_id, $reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->reservationSyncExternalReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **external_id** | **string**|  |
 **reservation** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIExternalReservationData**](../Model/QsrAutomations.DineTime.Contracts.Reservations.Types.IExternalReservationData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

